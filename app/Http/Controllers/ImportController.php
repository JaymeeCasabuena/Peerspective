<?php

namespace App\Http\Controllers;
use App\Models\Assessment;
use App\Models\Course;
use App\Models\CourseParticipation;
use App\Models\User;
use App\Models\CourseSchedule;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * import csv file and store data to database
     * Store new assessment, course participation,
     *  instructor, and schedule
     */

    public function importCSV(Request $request)
    {
        $request->validate([
            "import_csv" => "required|mimes:csv",
        ]);

        //read csv file and skip data
        $file = $request->file("import_csv");
        $handle = fopen($file->path(), "r");

        //skip the header row
        fgetcsv($handle);

        $chunksize = 25;
        while (!feof($handle)) {
            $chunkdata = [];

            for ($i = 0; $i < $chunksize; $i++) {
                $data = fgetcsv($handle);
                if ($data === false) {
                    break;
                }
                $chunkdata[] = $data;
            }

            $this->getchunkdata($chunkdata);
        }
        fclose($handle);

        return redirect()
            ->route("dashboard")
            ->with("success", "Data has been added successfully.");
    }

    public function getchunkdata($chunkdata)
    {
        $lastCourseCode = null;
        $courseSchedule = null;

        foreach ($chunkdata as $column) {
            $course_code = $column[0];

            if (empty($course_code)) {
                $course_code = $lastCourseCode;
            } else {
                $lastCourseCode = $course_code;
            }

            $course_name = $column[1];
            $instructor_name = $column[2];
            $instructor_sNumber = $column[3];
            $instructor_email = $column[4];
            $isInstructor = $column[5];
            $assessment_title = $column[6];
            $assessment_type = $column[7];
            $assessment_due = $column[8];
            $assessment_max_score = $column[9];
            $assessment_required_reviews = $column[10];
            $assessment_instructions = $column[11];
            $student_name = $column[12];
            $student_sNumber = $column[13];
            $day = $column[14];
            $time = $column[15];
            $mode = $column[16];

            $course = Course::firstOrCreate(
                ["course_code" => $course_code],
                ["name" => $course_name]
            );

            $instructor = User::firstOrCreate(
                ["sNumber" => $instructor_sNumber],
                [
                    "name" => $instructor_name,
                    "email" => $instructor_email,
                    "isInstructor" => $isInstructor,
                    "password" => bcrypt("12345678"),
                ]
            );

            if ($courseSchedule === null) {
                $courseSchedule = CourseSchedule::create([
                    "day" => $day,
                    "time" => $time,
                    "mode" => $mode,
                    "course_code" => $course_code,
                ]);
            }

            $student = User::where("sNumber", $student_sNumber)->first();

            if ($student) {
                $studentId = $student->id;
                CourseParticipation::create([
                    "course_code" => $course_code,
                    "userId" => $studentId,
                    "course_schedule_id" => $courseSchedule->id,
                ]);
            }

            $courseParticipation = CourseParticipation::create([
                "course_code" => $course_code,
                "sNumber" => $instructor_sNumber,
                "userId" => $instructor->id,
                "course_schedule_id" => $courseSchedule->id,
            ]);

            if (!empty($assessment_title)) {
                Assessment::create([
                    "title" => $assessment_title,
                    "instructions" => $assessment_instructions,
                    "due_date" => $assessment_due,
                    "type" => $assessment_type,
                    "maxscore" => $assessment_max_score,
                    "required_reviews" => $assessment_required_reviews,
                    "course_code" => $course_code,
                ]);
            }
        }
    }
}
