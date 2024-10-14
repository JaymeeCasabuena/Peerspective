<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\CourseParticipation;
use App\Models\CourseSchedule;
use App\Models\Assessment;
use App\Models\User;
class DashboardController extends Controller
{
    /**
     * Display dashboard with required data
     * list of courses and assessments
     */
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;

        $courses = CourseParticipation::join(
            "courses",
            "course_participations.course_code",
            "=",
            "courses.course_code"
        )
            ->join(
                "course_schedules",
                "course_participations.course_schedule_id",
                "=",
                "course_schedules.id"
            )
            ->select(
                "courses.name as course_name",
                "courses.course_code as course_code",
                "course_schedules.day as day",
                "course_schedules.time as time",
                "course_schedules.mode as mode",
                "course_participations.course_schedule_id"
            )
            ->where("course_participations.userId", $userId)
            ->get();

        foreach ($courses as $course) {
            $instructor = User::join(
                "course_participations",
                "users.id",
                "=",
                "course_participations.userId"
            )
                ->where(
                    "course_participations.course_code",
                    $course->course_code
                )
                ->where(
                    "course_participations.course_schedule_id",
                    $course->course_schedule_id
                )
                ->where("users.isInstructor", 1)
                ->pluck("users.name")
                ->first();

            $course->instructor = $instructor;
        }

        $assessments = Assessment::join(
            "courses",
            "assessments.course_code",
            "=",
            "courses.course_code"
        )
            ->join(
                "course_participations",
                "course_participations.course_code",
                "=",
                "assessments.course_code"
            )
            ->select(
                "assessments.title as title",
                "assessments.instructions as instruction",
                "assessments.due_date as due_date",
                "assessments.type as type",
                "courses.course_code as course_code",
                "courses.name as course_name"
            )
            ->where("course_participations.userId", $userId)
            ->get();

        foreach ($assessments as $assessment) {
            $assessment->formatted_due_date = \Carbon\Carbon::parse(
                $assessment->due_date
            )->format("F d, Y h:i A");
        }

        return view("dashboard.home-page", compact("courses", "assessments"));
    }
}
