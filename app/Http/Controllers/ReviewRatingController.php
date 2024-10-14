<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewRating;

class ReviewRatingController extends Controller
{

    /**
     * Store ratings of reviews 
     * 
     */

    public function store(
        Request $request,
        $courseCode,
        $userId,
        $assessmentId,
        $reviewId
    ) {
        $inputName = "rating-" . $reviewId;

        $request->validate([
            $inputName => "required|numeric|min:0|max:5",
        ]);

        ReviewRating::create([
            "rating" => $request->input($inputName),
            "course_code" => $courseCode,
            "userId" => $userId,
            "reviewId" => $reviewId,
        ]);

        return redirect()
            ->route("assessment.student-view", $assessmentId)
            ->with("success", "Rating submitted successfully.");
    }
}
