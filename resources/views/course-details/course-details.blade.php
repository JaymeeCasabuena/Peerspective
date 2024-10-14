@extends('layouts.master')

@section('title')
Course Details
@endsection

@section('content')

<!-- Banner -->

@include('shared.banner', [
    'header' => $course->name,
    'subtext' => $course->course_code,
    'class' => 'course-banner'
])

@include('shared.success-alert')
@include('shared.error-alert')

<div class="row justify-content-between align-items-start mt-5 w-100">

        <div class="col-sm-12 col-md-11 col-lg-6 mt-4 mt-lg-0 ">

            @if(count($assessments) > 0)
        <h5 class="header mt-5 fw-semibold">Assessments</h5>
            <x-bladewind::card title="Assessments" compact="true">
                <x-bladewind::list-view class="p-0">
                    @foreach($assessments as $assessment)
                        <x-bladewind::list-item>
                        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between w-100">
                            <span class="me-5 w-100">
                                @if(Auth::user()->isInstructor)
                                    <a class="text-decoration-none text-list" href="{{ route('assessment.admin-view', $assessment->id) }}"> {{ $assessment->title }}
                                        </a>
                                @else
                                    <a class="text-decoration-none text-list" href="{{ route('assessment.student-view', $assessment->id) }}"> {{ $assessment->title }}
                                        </a>
                                @endif
                            </span>
                            <span class="text-list w-75 mt-3 mt-md-0 ms-md-5"><strong>Date:</strong>
                                    {{ $assessment->formatted_due_date }}
                            </span>
                            </div>
                        </x-bladewind::list-item>
                    @endforeach
                </x-bladewind::list-view>

                @if(Auth::user()->isInstructor)
                @include('course-details.add-assessment-form', ['courseCode' => $course->course_code, 'assessment' => null])
                @endif
            </x-bladewind::card>
        </div>
    @else
        @include('shared.empty')
    @endif

        <div class="col-sm-12 col-md-11 col-lg-6 mt-lg-0">
            <h5 class="header mt-5 fw-semibold">Instructors</h5>
            <div class="card d-flex flex-row align-items-center justify-content-start">
                @foreach($instructors as $instructor)
                    <div class="d-flex flex-column align-items-center justify-content-center text-white m-3">
                        <x-bladewind::avatar image="{{ asset('assets/photos/avatar.jpg') }}" size="big" />
                        <span class="mt-2">{{ $instructor->instructor }}</span>
                    </div>
                @endforeach
            </div>
            @if(!Auth::user()->isInstructor && count($topReviewers) > 0)
                @include('shared.top-reviewer-banner', ['topReviewers' => $topReviewers])
            @endif
            @if(Auth::user()->isInstructor)
            <h5 class="header fw-semibold mt-4">Add a Student</h5>
            <div class="card d-flex flex-column align-items-start justify-content-start">
                @include('course-details.add-student-form')
            </div>
        </div>
    @endif

</div>
@endsection