<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseParticipation;

class CourseParticipationController extends Controller
{
    /**
     * Enrol a student to the specific course.
     * 
     */
    public function store(Request $request, $courseCode)
    {

        $request->validate([
            "userId" => "required",
            "course_schedule_id" => "required",
        ]);

        CourseParticipation::create(
            array_merge($request->all(), [
                "course_code" => $courseCode,
            ])
        );

        return redirect()
            ->route("courses.show", $courseCode)
            ->with("success", "Student added successfully.");
    }
}
