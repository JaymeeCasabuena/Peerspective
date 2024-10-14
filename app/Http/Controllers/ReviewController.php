<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Assessment;
use App\Models\User;

class ReviewController extends Controller
{
    /**
     * Store reviews with validation
     *
     */

    public function store(Request $request, $assessmentId)
    {
        $reviewer_id = auth()->user()->id;

        $request->validate([
            "reviewee_id" => "required",
            "review_text" => [
                "required",
                function ($attribute, $value, $fail) {
                    $wordCount = str_word_count(trim($value));
                    if ($wordCount < 40) {
                        $fail("The $attribute must be at least 40 words.");
                    }
                },
            ],
        ]);

        Review::create([
            "reviewer_id" => $reviewer_id,
            "reviewee_id" => $request->input("reviewee_id"),
            "review_text" => $request->input("review_text"),
            "assessment_id" => $assessmentId,
        ]);

        return redirect()
            ->route("assessment.student-view", $assessmentId)
            ->with("success", "Review added successfully.");
    }
}
