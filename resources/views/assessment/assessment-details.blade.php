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

<div class="row justify-content-between align-items-start mt-3 w-100">
@include('shared.help-banner')
    <div class="col-sm-12 col-md-11 col-lg-12 ps-3 mt-5">
        <h5 class="header fw-semibold mb-3">Assessment Details</h5>
        <x-bladewind::card compact="true">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                <p class="text-list"><strong>Due:</strong> {{ $formattedDueDate }}</p>
                <p class="text-list"><strong>{{ $assessment->maxscore }} Points Possible</strong></p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                <p class="text-list"><strong>Assessment type:</strong> {{ $assessment->type }}</p>
                <p class="text-list"><strong>Required Review:</strong> {{ $assessment->required_reviews }}</p>
            </div>
            <p class="text-list"><strong>Instructions:</strong></p>
            <p class="text-list">{{ $assessment->instructions }}</p>
        </x-bladewind::card>
    </div>

    <div class="col-sm-12 col-md-11 col-lg-6 mt-4">
        <h6 class="header fw-semibold ms-5 mt-4 mb-3">Reviews received</h6>
        <div class="card d-flex flex-column align-items-center justify-content-start ms-0 ms-lg-5 p-3">
            @forelse ($reviewsReceived as $review)
                <x-bladewind::card compact="true" class="w-100 mt-2">
                    <p class="text-list"><strong>Reviewer:</strong> {{ $review->reviewer }}</p>
                    <p class="text-list">{{ $review->review_text }}</p>
                    @if($review->rating)
                    <p class="text-list mb-0"><strong>You rated this review:</strong></p>
                    @include('shared.star-rating', ['name' => $review->id, 'rating' => $review->rating, 'isStatic' => true])
                    @else
                    <p class="text-list mb-0"><strong>Rate this review:</strong></p>
                    <form method="post" action="{{ route('rating.store', ['userId' => $review->reviewer_id, 'courseCode' => $assessment->course_code, 'assessmentId' => $assessment->id, 'reviewId' => $review->id]) }}" class="w-100">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-between w-100">
                            <div class="p-0">
                                @include('shared.star-rating', ['name' => $review->id, 'rating' => $review->rating, 'isStatic' => false])
                            </div>
                            <button type="submit" class="btn btn-warning subtext rounded-5 mt-3 px-4">
                                Submit
                            </button>
                        </div>
                    </form>
                    @endif
                </x-bladewind::card>
            @empty
                <p class="text-white">No reviews received yet</p>
            @endforelse
        </div>
    </div>

    <div class="col-sm-12 col-md-11 col-lg-6 mt-4">
        <h6 class="header fw-semibold mt-4 mb-3">Submit Peer Review</h6>
        <div class="card d-flex flex-column align-items-start justify-content-center me-0 me-lg-5">
            @if($showWarning)
            <p class="subtext text-warning ms-4 mt-3"><strong>Important:</strong> Your peer feedback rating is low – Please refer to the help page for some tips</p>
            @endif
            <div class="mt-4 px-4 w-100">
                <p class="subtext mt-3">Submitted Reviews {{$submittedReviewsCount}} out of {{$assessment->required_reviews}}</p>
                <x-bladewind::progress-bar percentage="{{$assessmentProgress}}" color="green" striped="true" animated="true"/>
            </div>
            <form method="post" action="{{ route('review.store', ['assessmentId' => $assessment->id]) }}" class="w-100">
                @csrf
                <div class="mt-4 px-4 w-100">
                    <p class="subtext mt-3">Select a student to give feedback to</p>
                    <x-bladewind::select name="reviewee_id" searchable="true" label_key="label" value_key="value"
                                          label="Select a student to review" :data="$studentsArray" />
                    <p class="subtext mt-3">Write feedback here</p>
                    <x-bladewind::textarea name="review_text" label="Review" />
                </div>
                @if ($assessmentProgress == 100)
                    <p class="subtext fw-semibold ms-4 mt-3">Well done! You submitted required amount of reviews!</p>
                @else
                    <button type="submit" class="btn btn-warning subtext rounded-5 px-4 ms-4 mb-4">
                        Add
                    </button>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection