<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Mark;

class MarkController extends Controller
{

    /**
     * Store mark for students with validation
     * score shouldnt exceed maxscore
     */

    public function store(Request $request, $assessmentId, $userId)
    {
        $assessment = Assessment::where("id", $assessmentId)
            ->select("maxscore")
            ->first();

        $maxScore = $assessment->maxscore;

        $request->validate([
            "score" => "required|numeric|min:0|max:$maxScore",
        ]);

        Mark::create([
            "score" => $request->input("score"),
            "assessment_id" => $assessmentId,
            "userId" => $userId,
        ]);

        return redirect()
            ->route("assessment.admin-view", $assessmentId)
            ->with("success", "Mark submitted successfully.");
    }
}
