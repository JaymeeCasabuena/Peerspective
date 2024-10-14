<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Assessment;
use App\Models\CourseParticipation;
use App\Models\CourseSchedule;
use App\Models\User;
use App\Models\ReviewRating;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display the course by id.
     * including assessments, students not enrolled,
     * top reviewers, instructors and schedules
     */
    public function show(string $course_code)
    {
        $course = Course::where("course_code", $course_code)->firstOrFail();

        $assessments = Assessment::where("course_code", $course_code)->get();

        foreach ($assessments as $assessment) {
            $assessment->formatted_due_date = \Carbon\Carbon::parse(
                $assessment->due_date
            )->format("F d, Y h:i A");
        }

        $instructors = CourseParticipation::join(
            "users",
            "course_participations.userId",
            "=",
            "users.id"
        )
            ->select("users.name as instructor")
            ->where("course_participations.course_code", $course_code)
            ->where("users.isInstructor", 1)
            ->get();

        $studentsNotEnrolled = User::leftJoin(
            "course_participations",
            function ($join) use ($course_code) {
                $join
                    ->on("users.id", "=", "course_participations.userId")
                    ->where(
                        "course_participations.course_code",
                        "=",
                        $course_code
                    );
            }
        )
            ->select("users.name as student", "users.id")
            ->whereNull("course_participations.course_code")
            ->where("users.isInstructor", 0)
            ->distinct()
            ->get();

        $studentsArray = $studentsNotEnrolled
            ->map(function ($student) {
                return [
                    "label" => $student->student,
                    "value" => $student->id,
                ];
            })
            ->toArray();

        $schedules = CourseSchedule::select(
            "id",
            DB::raw("(day || ' ' || time || ' ' || mode) as schedule")
        )
            ->where("course_code", $course_code)
            ->get();

        $schedulesArray = $schedules
            ->map(function ($schedule) {
                return [
                    "label" => $schedule->schedule,
                    "value" => $schedule->id,
                ];
            })
            ->toArray();

        $topReviewers = ReviewRating::join(
            "users",
            "review_ratings.userId",
            "=",
            "users.id"
        )
            ->select(
                "users.name",
                DB::raw("AVG(review_ratings.rating) as average_rating")
            )
            ->where("review_ratings.course_code", $course_code)
            ->groupBy("users.id", "users.name")
            ->orderByDesc("average_rating")
            ->limit(5)
            ->get();

        return view(
            "course-details.course-details",
            compact(
                "course",
                "assessments",
                "instructors",
                "studentsArray",
                "schedulesArray",
                "topReviewers"
            )
        );
    }
}
