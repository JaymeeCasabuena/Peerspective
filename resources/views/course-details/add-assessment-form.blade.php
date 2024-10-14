<button type="button" class="btn btn-warning subtext rounded-5 px-4 ms-3" data-bs-toggle="modal"
    data-bs-target="#addAssessmentModal">
    @if(isset($assessment)) Edit Assessment @else Add New Assessment @endif
</button>

<div class="modal fade" data-bs-backdrop="static" id="addAssessmentModal" tabindex="-1"
    aria-labelledby="addAssessmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="header fw-semibold text-uppercase" id="addAssessmentModalLabel">
                    @if(isset($assessment)) Edit Assessment @else Add New Assessment @endif
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post"
                    action="{{ isset($assessment) ? route('assessment.update', ['courseCode' => $assessment->course_code, 'assessmentId' => $assessment->id]) : route('assessment.store', ['courseCode' => $courseCode]) }}"
                    x-data="{ assessmentType: '{{ old('type', $assessment->type ?? '') }}' }">
                    @csrf
                    <p class="text-list">Assessment Title</p>
                    <input name="title" placeholder="Write title here"
                        value="{{ old('title', $assessment->title ?? '') }}"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mb-3" />
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <p class="text-list">Assessment Instruction</p>
                    <textarea class="form-control mb-3" name="instructions">{{ old('instructions', $assessment->instructions ?? '') }}
                    </textarea>
                    @error('instructions')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <p class="text-list">Assessment Type</p>
                    <select name="type" x-model="assessmentType"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mb-3">
                        <option value="" disabled>Select type</option>
                        <option value="student-select" {{ old('type', $assessment->type ?? '') == 'student-select' ? 'selected' : '' }}>Student Select</option>
                        <option value="teacher-assign" {{ old('type', $assessment->type ?? '') == 'teacher-assign' ? 'selected' : '' }}>Teacher Assign</option>
                    </select>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div x-show="assessmentType === 'student-select'" class="mt-3 mb-3">
                        <p class="text-list">Number of Required Reviews</p>
                        <input numeric="true" placeholder="Required Reviews" name="required_reviews"
                            value="{{ old('required_reviews', $assessment->required_reviews ?? '') }}"
                            class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600" />
                    </div>
                    @error('required_reviews')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <p class="text-list mt-3">Maximum Score</p>
                    <input numeric="true" placeholder="Max Score" name="maxscore"
                        value="{{ old('maxscore', $assessment->maxscore ?? '') }}"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mb-3" />
                    @error('maxscore')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <p class="text-list">Due Date</p>
                    <input type="datetime-local" name="due_date"
                        value="{{ old('due_date', isset($assessment) ? date('Y-m-d\TH:i', strtotime($assessment->due_date)) : '') }}"
                        class="form-control border-2 border-slate-300/50 rounded-md text-sm px-3.5 py-2.5 text-slate-600 mt-3">
                    @error('due_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-warning subtext rounded-5 w-full mt-4">
                        @if(isset($assessment)) Update Assessment @else Add Assessment @endif
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>