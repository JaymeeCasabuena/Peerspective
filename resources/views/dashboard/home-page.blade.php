@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')

<!-- Banner -->

@include('shared.banner', [
    'header' => 'Welcome back, ' . Auth::user()->name . '!',
    'subtext' => Auth::user()->isInstructor ? 'Ready to lead your students through meaningful assessments and feedback?' :
        'Ready to give and receive valuable feedback?',
    'class' => 'banner'
])

@if(!Auth::user()->isInstructor)
            @include('shared.help-banner')
            @endif

<!-- Enrolled Courses -->

<div class="row justify-content-between align-items-start mt-5 w-100">
    @if($courses->isEmpty())
        @include('shared.empty')
     @else
    <div class="col-sm-12 col-md-11 col-lg-6 ">
        <div class="d-flex flex-column justify-content-start">
            <h5 class="header fw-semibold mt-5 mb-3">
                {{ Auth::user()->isInstructor ? "Courses You're Teaching" : 'Enrolled Courses' }}
            </h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($courses as $course)
                        <div class="col">
                            <div class="card rounded-4 h-100">
                                <div class="card-body h-75">
                                    <h6 class="card-title text-white">{{ $course->course_name }} - {{ $course->course_code}}</h6>
                                    @if(Auth::user()->isInstructor)
                                    @else
                                    <p class="card-title text-white subtext">{{ $course->instructor}}</p>
                                    @endif
                                    <p class="card-title text-white subtext">{{ $course->day}}
                                        {{ $course->time}} {{ $course->mode}}
                                    </p>
                                    </div>
                                    <div class="w-50 h-25 ms-3 mb-2">
                                    <a href="{{ route('courses.show', $course->course_code) }}"
                                        class="btn rounded-5 px-4 subtext">View</a>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

        <div class="col-sm-12 col-md-11 col-lg-6 pt-5 mt-5 mt-lg-0">
        @if($assessments->isEmpty())
    @else
            <x-bladewind::card title="To Do" compact="true">
                <x-bladewind::list-view class="p-0">
                    @foreach($assessments as $assessment)
                        <x-bladewind::list-item>
                            <x-bladewind::checkbox color="green" />
                            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between w-100">
                                <div class="text-list d-flex flex-column me-5 w-100">
                                    <strong>{{ $assessment->course_name }}</strong>
                                    <span>{{ $assessment->title }}</span>
                                </div>
                                <div class="text-list w-75 mt-3 mt-md-0 ms-md-5">
                                    <strong>Date:</strong>
                                    {{ $assessment->formatted_due_date }}
                                </div>
                            </div>
                        </x-bladewind::list-item>
                    @endforeach
                </x-bladewind::list-view>
            </x-bladewind::card>
        @endif
    </div>
</div>
@endsection