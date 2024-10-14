<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\CourseParticipationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ReviewRatingController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("auth.login");
});

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );
    Route::resource("courses", CourseController::class);

    Route::resource("assessments", AssessmentController::class);

    Route::get("/dashboard", [DashboardController::class, "index"])->name(
        "dashboard"
    );

    //feedback help route
    Route::get("/help", function () {
        return view("dashboard.info-page");
    })->name("help");

    //add new assessment route
    Route::post("/courses/{courseCode}/assessments/store", [
        AssessmentController::class,
        "store",
    ])->name("assessment.store");

    //add new student route
    Route::post("/courses/{courseCode}/participation/store", [
        CourseParticipationController::class,
        "store",
    ])->name("participation.store");

    //submit review route
    Route::post("/courses/{assessmentId}/review/store", [
        ReviewController::class,
        "store",
    ])->name("review.store");

    //assessment student view route
    Route::get("/assessments/{id}/student-view", [
        AssessmentController::class,
        "showStudentView",
    ])->name("assessment.student-view");

    //assessment admin view route
    Route::get("/assessments/{id}/admin-view/{userId?}", [
        AssessmentController::class,
        "showAdminView",
    ])->name("assessment.admin-view");

    //mark submission route
    Route::post("/assessments/{assessmentId}/admin-view/{userId}/mark/store", [
        MarkController::class,
        "store",
    ])->name("mark.store");

    //rate review route
    Route::post(
        "/assessments/{courseCode}/{userId}/{assessmentId}/{reviewId}",
        [ReviewRatingController::class, "store"]
    )->name("rating.store");

    //update assessment route
    Route::post("/assessments/{courseCode}/{assessmentId}", [
        AssessmentController::class,
        "update",
    ])->name("assessment.update");

    //import csv route
    Route::post("import-csv", [ImportController::class, "importCSV"])->name(
        "import"
    );
});

require __DIR__ . "/auth.php";
