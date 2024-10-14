<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\CourseParticipation;
use App\Models\CourseSchedule;
use App\Models\Assessment;
use App\Models\User;
use App\Models\Mark;
use App\Models\Review;
use App\Models\ReviewRating;
use App\Models\UserPeerGroup;
use App\Models\PeerGroup;
use Carbon\Carbon;

class AssessmentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * Store new assessment
     */

    public function store(Request $request, $courseCode)
    {
        $request->validate([
            "title" => "required|max:20",
            "instructions" => "required",
            "due_date" => "required|date",
            "type" => "required|in:student-select,teacher-assign",
            "maxscore" => "required|numeric|min:1|max:100",
            "required_reviews" => "nullable|numeric|min:1",
        ]);

        $assessment = Assessment::create([
            "title" => $request->input("title"),
            "instructions" => $request->input("instructions"),
            "due_date" => $request->input("due_date"),
            "type" => $request->input("type"),
            "maxscore" => $request->input("maxscore"),
            "required_reviews" => $request->input("required_reviews"),
            "course_code" => $courseCode,
        ]);

        if ($assessment->type === "teacher-assign") {
            $courseSchedules = CourseSchedule::where(
                "course_code",
                $courseCode
            )->get();

            foreach ($courseSchedules as $schedule) {
                $this->assignStudentsToPeerGroups(
                    $courseCode,
                    $schedule->id,
                    $assessment->id
                );
            }
        }

        return redirect()
            ->route("courses.show", $courseCode)
            ->with("success", "Assessment added successfully.");
    }

    /**
     * Display the specified resource.
     * Display assessments - student view
     */

    public function showStudentView(string $id)
    {
        if (Auth::user()->isInstructor()) {
            abort(403, "Unauthorized action.");
        }

        //get assessment by id

        $assessment = Assessment::where("id", $id)->firstOrFail();

        //get course code

        $courseCode = $assessment->course_code;

        //format the due date using carbon

        $formattedDueDate = \Carbon\Carbon::parse(
            $assessment->due_date
        )->format("F d, Y h:i A");

        //get students not reviewed yet by current user
        //if assessment type is student-select, check all students from course list
        //if teacher assign check user peer group

        $currentUserId = auth()->user()->id;

        if ($assessment->type === "student-select") {
            $studentsNotReviewed = User::leftJoin(
                "course_participations",
                function ($join) use ($courseCode) {
                    $join
                        ->on("users.id", "=", "course_participations.userId")
                        ->where(
                            "course_participations.course_code",
                            "=",
                            $courseCode
                        );
                }
            )
                ->leftJoin("reviews", function ($join) use (
                    $currentUserId,
                    $id
                ) {
                    $join
                        ->on("users.id", "=", "reviews.reviewee_id")
                        ->where("reviews.reviewer_id", "=", $currentUserId)
                        ->where("reviews.assessment_id", "=", $id);
                })
                ->select("users.name as student", "users.id")
                ->where("course_participations.course_code", $courseCode)
                ->where("users.isInstructor", 0)
                ->where("users.id", "!=", $currentUserId)
                ->whereNull("reviews.id")
                ->distinct()
                ->get();
        } elseif ($assessment->type === "teacher-assign") {
            $currentUserPeerGroup = UserPeerGroup::where(
                "userId",
                $currentUserId
            )
                ->where("assessment_id", $id)
                ->first();

            if ($currentUserPeerGroup) {
                $studentsNotReviewed = User::join(
                    "user_peer_groups",
                    "users.id",
                    "=",
                    "user_peer_groups.userId"
                )
                    ->leftJoin("reviews", function ($join) use (
                        $currentUserId,
                        $id
                    ) {
                        $join
                            ->on("users.id", "=", "reviews.reviewee_id")
                            ->where("reviews.reviewer_id", "=", $currentUserId)
                            ->where("reviews.assessment_id", "=", $id);
                    })
                    ->select("users.name as student", "users.id")
                    ->where(
                        "user_peer_groups.peer_group_id",
                        $currentUserPeerGroup->peer_group_id
                    )
                    ->where("users.isInstructor", 0)
                    ->where("users.id", "!=", $currentUserId)
                    ->whereNull("reviews.id")
                    ->distinct()
                    ->get();
            } else {
                $studentsNotReviewed = collect();
            }
        }

        // Format students array for the searchable select input
        $studentsArray = $studentsNotReviewed
            ->map(function ($student) {
                return [
                    "label" => $student->student,
                    "value" => $student->id,
                ];
            })
            ->toArray();

        //get feedback received by current student

        $reviewsReceived = Review::join(
            "users",
            "reviews.reviewer_id",
            "=",
            "users.id"
        )
            ->leftJoin(
                "review_ratings",
                "reviews.id",
                "=",
                "review_ratings.reviewId"
            )
            ->select(
                "reviews.id",
                "users.name as reviewer",
                "reviews.review_text",
                "reviews.reviewer_id",
                "review_ratings.rating"
            )
            ->where("reviewee_id", $currentUserId)
            ->where("assessment_id", $id)
            ->get();

        //get review submitted count and percentage by current user

        $submittedReviewsCount = Review::where("reviewer_id", $currentUserId)
            ->where("assessment_id", $id)
            ->count();

        if ($assessment->required_reviews > 0) {
            $assessmentProgress = (int) round(
                ($submittedReviewsCount / $assessment->required_reviews) * 100
            );
        } else {
            $assessmentProgress = 0;
        }

        // Get the student's review ratings for all course assessments

        $reviewRatings = ReviewRating::where("userId", $currentUserId)
            ->where("course_code", $courseCode)
            ->pluck("rating");

        // Check if the student has at least 3 review ratings, if yes check average
        // Show warning if avg falls below 3

        $showWarning = false;
        if ($reviewRatings->count() >= 3) {
            $averageRating = $reviewRatings->avg();

            if ($averageRating < 3) {
                $showWarning = true;
            }
        }

        return view(
            "assessment.assessment-details",
            compact(
                "assessment",
                "formattedDueDate",
                "studentsArray",
                "reviewsReceived",
                "submittedReviewsCount",
                "assessmentProgress",
                "showWarning"
            )
        );
    }

    /**
     * Display the specified resource.
     * Display assessments - instructor view
     */

    public function showAdminView(string $id, string $userId = null)
    {
        if (!Auth::user()->isInstructor()) {
            abort(403, "Unauthorized action.");
        }

        //get assessment by id

        $assessment = Assessment::where("id", $id)->firstOrFail();

        $hasReviews = Review::where("assessment_id", $id)->exists();

        // get course code

        $courseCode = $assessment->course_code;

        //format the due date using carbon

        $formattedDueDate = \Carbon\Carbon::parse(
            $assessment->due_date
        )->format("F d, Y h:i A");

        $selectedStudent = User::where("id", $userId)->first();

        //get all student enrolled in the course

        $studentsEnrolled = User::join(
            "course_participations",
            "users.id",
            "=",
            "course_participations.userId"
        )
            ->select("users.name as student", "users.id")
            ->where("course_participations.course_code", $courseCode)
            ->where("users.isInstructor", 0)
            ->distinct()
            ->paginate(10);

        // Get reviews received by the selected student

        if ($userId) {
            $markReceived = Mark::where("userId", $userId)
                ->where("assessment_id", $id)
                ->select("score")
                ->first();

            $reviewsReceived = Review::join(
                "users",
                "reviews.reviewer_id",
                "=",
                "users.id"
            )
                ->select(
                    "users.name as reviewer",
                    "reviews.review_text",
                    "reviews.reviewer_id"
                )
                ->where("reviewee_id", $userId)
                ->where("assessment_id", $id)
                ->get();

            // Get reviews submitted by the selected student

            $reviewsSubmitted = Review::join(
                "users",
                "reviews.reviewee_id",
                "=",
                "users.id"
            )
                ->select(
                    "users.name as reviewee",
                    "reviews.review_text",
                    "reviews.reviewee_id"
                )
                ->where("assessment_id", $id)
                ->where("reviewer_id", $userId)
                ->get();

            $reviewsSubmittedCount = $reviewsSubmitted->count();
            $reviewsReceivedCount = $reviewsReceived->count();

            if ($assessment->required_reviews > 0) {
                $reviewsSubmittedProgress = (int) round(
                    ($reviewsSubmittedCount / $assessment->required_reviews) *
                        100
                );
                $reviewsReceivedProgress = (int) round(
                    ($reviewsReceivedCount / $assessment->required_reviews) *
                        100
                );
            } else {
                $reviewsSubmittedProgress = 0;
                $reviewsReceivedProgress = 0;
            }
        } else {
            $reviewsSubmitted = [];
            $reviewsReceived = [];
            $reviewsReceivedCount = 0;
            $reviewsSubmittedCount = 0;
            $reviewsSubmittedProgress = 0;
            $reviewsReceivedProgress = 0;
            $markReceived = 0;
        }

        return view(
            "assessment.assessment-details-admin",
            compact(
                "assessment",
                "hasReviews",
                "formattedDueDate",
                "selectedStudent",
                "studentsEnrolled",
                "reviewsSubmitted",
                "reviewsReceived",
                "reviewsReceivedCount",
                "reviewsSubmittedCount",
                "reviewsSubmittedProgress",
                "reviewsReceivedProgress",
                "markReceived"
            )
        );
    }

    /**
     * Update the specified resource in storage.
     * Update assessment details
     */
    public function update(
        Request $request,
        string $courseCode,
        string $assessmentId
    ) {
        $request->validate([
            "title" => "required|max:20",
            "instructions" => "required",
            "due_date" => "required",
            "type" => "required",
            "maxscore" => "required|numeric|min: 1|max:100",
            "required_reviews" => "nullable|numeric|min:1",
        ]);

        $assessment = Assessment::findOrFail($assessmentId);

        $assessment->update([
            "title" => $request->input("title"),
            "instructions" => $request->input("instructions"),
            "due_date" => $request->input("due_date"),
            "type" => $request->input("type"),
            "maxscore" => $request->input("maxscore"),
            "required_reviews" => $request->input("required_reviews"),
            "course_code" => $courseCode,
        ]);

        return redirect()
            ->route("assessment.admin-view", ["id" => $assessmentId])
            ->with("success", "Assessment updated successfully.");
    }

    /**
     * Assign students to peer groups.
     */

    public function assignStudentsToPeerGroups(
        $courseCode,
        $scheduleId,
        $assessmentId
    ) {
        $students = $this->getStudentsByCourseAndSchedule(
            $courseCode,
            $scheduleId
        );

        $groupSize = $this->determineGroupSize($students->count());

        $this->updateRequiredReviews($assessmentId, $groupSize);

        $this->randomizeAndAssignToGroups($students, $groupSize, $assessmentId);
    }

    /**
     * Fetch students enrolled in a specific course schedule.
     */
    protected function getStudentsByCourseAndSchedule($courseCode, $scheduleId)
    {
        return User::join(
            "course_participations",
            "users.id",
            "=",
            "course_participations.userId"
        )
            ->join(
                "course_schedules",
                "course_participations.course_schedule_id",
                "=",
                "course_schedules.id"
            )
            ->join(
                "assessments",
                "assessments.course_code",
                "=",
                "course_participations.course_code"
            )
            ->select("users.id as userId")
            ->where("course_participations.course_code", $courseCode)
            ->where("course_schedules.id", $scheduleId)
            ->where("assessments.type", "=", "teacher-assign")
            ->distinct()
            ->get();
    }

    /**
     * Determine group size for teacher-assigned assessments.
     */

    protected function determineGroupSize(
        $totalStudents,
        $minGroupSize = 3,
        $maxGroupSize = 4
    ) {
        $fullGroupCount = intdiv($totalStudents, $maxGroupSize);
        $remainder = $totalStudents % $maxGroupSize;

        if ($remainder != 0 && $remainder < $minGroupSize) {
            $fullGroupCount--;
        }

        return ceil($totalStudents / ($fullGroupCount + 1));
    }

    /**
     * Randomize students and assign them to peer groups.
     */

    private function randomizeAndAssignToGroups(
        $students,
        $groupSize,
        $assessmentId
    ) {
        $shuffledStudents = $students->shuffle();

        $groups = $shuffledStudents->chunk($groupSize);

        foreach ($groups as $group) {
            \Log::info("Group size: " . count($group));

            $peerGroup = PeerGroup::create([
                "assessment_id" => $assessmentId,
            ]);

            foreach ($group as $student) {
                UserPeerGroup::create([
                    "userId" => $student->userId,
                    "peer_group_id" => $peerGroup->id,
                    "assessment_id" => $assessmentId,
                ]);
            }
        }
    }

    /**
     * update required reviews field in assessment table
     * after determining group size - 1
     */

    public function updateRequiredReviews($assessmentId, $groupSize)
    {
        Assessment::where("id", $assessmentId)
            ->where("type", "teacher-assign")
            ->update([
                "required_reviews" => $groupSize - 1,
            ]);
    }

    /**
     * Mark a student as absent in the peer group.
     */

    public function markStudentAsAbsent($userPeerGroupId, $userId)
    {
        UserPeerGroup::where("id", $userPeerGroupId)
            ->where("userId", $userId)
            ->update([
                "isAbsent" => true,
            ]);
    }
}
