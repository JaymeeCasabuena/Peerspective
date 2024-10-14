@extends('layouts.master')

@section('title')
Info Page
@endsection

@section('content')

<!-- Banner -->

@include('shared.banner', [
    'header' => 'How to Write a Peer Review: Giving Constructive Feedback',
    'subtext' => 'and why writing a good one is important',
    'class' => 'assessment-banner'
])
<!-- Enrolled Courses -->

<div class="row justify-content-between align-items-start mt-5 w-100">
    <div class="col-sm-12 col-md-11 col-lg-12">
        <x-bladewind::card compact="true">
            
            <!-- Positive Peer Feedback -->
            <h2 class="header">Positive Peer Feedback</h2>
            <p>Example: “Thank you for your extra efforts in completing your project. Your commitment is impressive and contributes greatly to the team's success.”</p>
            <p><strong>Key Elements:</strong> Specificity, Recognition of Effort, Personalization, Positive Tone.</p>

            <!-- Constructive Criticism in Peer Review -->
            <h2 class="header mt-5">Constructive Criticism in Peer Review</h2>
            <p>Constructive criticism involves offering actionable suggestions while maintaining a respectful tone. Focus on behavior, use 'I' statements, and suggest solutions.</p>
            <ul>
                <li>Example: “I noticed some sections of the report could benefit from clearer formatting. Perhaps spend some time proofreading before submission.”</li>
                <li>Example: “In future presentations, incorporating visuals could enhance clarity and engagement.”</li>
            </ul>

            <!-- Guidelines for Giving Constructive Feedback -->
            <h2 class="header mt-5">Guidelines for Giving Constructive Feedback</h2>
            <ul>
                <li>Focus on behavior, not the individual.</li>
                <li>Use specific examples and offer solutions.</li>
                <li>Maintain a positive and respectful tone.</li>
                <li>Be open to dialogue and feedback.</li>
            </ul>

            <!-- Constructive Peer Feedback Example -->
            <h2 class="header mt-5">Peer Review Example</h2>
            <p>Scenario: A peer is consistently missing deadlines. “I noticed you’ve been struggling to meet deadlines. Moving forward, creating a project schedule and setting reminders could help improve your progress.”</p>
            <p>This example is specific, focuses on future improvements, and uses a positive tone.</p>
        </x-bladewind::card>
    </div>
</div>
@endsection