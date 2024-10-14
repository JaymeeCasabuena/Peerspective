@extends('layouts.master')

@section('title')
Course Details
@endsection

@section('content')

<!-- Banner -->
@include('shared.banner', [
    'header' => $assessment->title,
    'subtext' => $assessment->course_code,
    'class' => 'assessment-banner'
])

@include('shared.success-alert')
@include('shared.error-alert')

<div class="row justify-content-between align-items-start mt-5 w-100">

    <!-- assesment details -->

    <div class="col-sm-12 col-md-11 col-lg-12 ps-3">
        <h5 class="header fw-semibold mb-3">Assessment Details</h5>
        <x-bladewind::card compact="true">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mx-3">
                <p class="text-list"><strong>Due:</strong> {{ $formattedDueDate }}</p>
                <p class="text-list"><strong>{{ $assessment->maxscore }} Points Possible</strong></p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start mx-3">
                <p class="text-list"><strong>Assessment type:</strong> {{ $assessment->type }}</p>
                <p class="text-list"><strong>Required Review:</strong> {{ $assessment->required_reviews }}</p>
            </div>
            <p class="text-list ms-3"><strong>Instructions:</strong></p>
            <p class="text-list ms-3 mb-4">{{ $assessment->instructions }}</p>
            @if(!$hasReviews)
            @include('course-details.add-assessment-form', ['assessment' => $assessment])
            @endif
        </x-bladewind::card>
    </div>

    <!-- student list -->

    <div class="col-sm-12 col-md-11 col-lg-4 mt-4">
        <h6 class="header fw-semibold mb-3">All Students</h6>
        <div class="card d-flex flex-column align-items-center justify-content-start p-3">
            <x-bladewind::list-view class="w-100 p-0">
                @forelse ($studentsEnrolled as $student)
                    <x-bladewind::list-item>
                        <a class="text-decoration-none text-list"
                            href="{{ route('assessment.admin-view', ['id' => $assessment->id, 'userId' => $student->id]) }}">
                            {{ $student->student }}
                        </a>
                    </x-bladewind::list-item>
                @empty
                    <p class="text-white">No students enrolled in this course</p>
                @endforelse
            </x-bladewind::list-view>
            <div class="">
            {{ $studentsEnrolled->links()}}
            </div>
        </div>
    </div>

    <!-- Conditionally display the reviews tab when a student is selected -->

    @if (!empty($reviewsSubmitted) || !empty($reviewsReceived))
        <div class="col-sm-12 col-md-11 col-lg-8 mt-5">
            <div class="card d-flex flex-column align-items-center justify-content-start mt-3 p-3">

    <!-- submit score form -->

                @if($selectedStudent)
                    <div class="w-100">
                        @if($markReceived)
                        <p class="text-white fw-semibold fs-5 mt-3">Submitted Marks for {{$selectedStudent->name}}: {{$markReceived->score}}</p>
                        @else
                        <p class="text-white fw-semibold fs-5 mt-3">Submit Marks for {{$selectedStudent->name}}</p>
                        <form method="post"
                            action="{{ route('mark.store', ['assessmentId' => $assessment->id, 'userId' => $selectedStudent->id]) }}">
                            @csrf
                            <div class="d-flex flex-row align-items-start justify-content-evenly w-100 mt-4">
                                <x-bladewind::input numeric="true" placeholder="score" name="score" class="w-1/4" />
                                <button type="submit" class="submit-mark mt-2 btn btn-warning subtext rounded-5 w-full">Submit</button>
                            </div>
                            @error('score')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </form>
                        @endif
                    </div>
                @endif

    <!-- Reviews Submitted by the Student -->

                <div class="w-100">

                @if($reviewsSubmittedCount > 0)
                    <p class="subtext mt-3">Submitted Reviews {{ $reviewsSubmittedCount }} out of
                        {{ $assessment->required_reviews }}</p>
                    <x-bladewind::progress-bar percentage="{{ $reviewsSubmittedProgress }}" color="green" striped="true"
                        animated="true" />
                    @endif

                </div>
                @forelse ($reviewsSubmitted as $review)
                    <x-bladewind::card compact="true" class="w-100 mt-2">
                        <p class="text-list"><strong>Reviewee:</strong> {{ $review->reviewee }}</p>
                        <p class="text-list">{{ $review->review_text }}</p>
                    </x-bladewind::card>
                @empty
                    <div class="mt-4 w-100">
                        <p class="text-white">No review submitted yet</p>
                    </div>
                @endforelse

    <!-- Reviews Received by the Student -->

                <div class="mt-4 w-100">

                @if($reviewsReceivedCount > 0)
                    <p class="subtext mt-3">Reviews Received {{ $reviewsReceivedCount }} out of
                        {{ $assessment->required_reviews }}</p>
                    <x-bladewind::progress-bar percentage="{{ $reviewsReceivedProgress }}" color="green" striped="true"
                        animated="true" />
                    @endif

                </div>
                @forelse ($reviewsReceived as $review)
                    <x-bladewind::card compact="true" class="w-100 mt-2">
                        <p class="text-list"><strong>Reviewer:</strong> {{ $review->reviewer }}</p>
                        <p class="text-list">{{ $review->review_text }}</p>
                    </x-bladewind::card>
                @empty
                    <div class="mt-4 w-100">
                        <p class="text-white">No review received yet</p>
                    </div>
                @endforelse
            </div>
        </div>
    @else

    <!-- Display a message or placeholder if no student is selected -->
        <div class="col-sm-12 col-md-11 col-lg-8 p-5 mt-4">
            <h6 class="header fw-semibold p-5 ms-5 mt-5">Please select a student to view their reviews.</h6>
        </div>
    @endif
</div>
@endsection