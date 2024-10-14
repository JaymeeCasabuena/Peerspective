<form method="post" action="{{ route('participation.store', ['courseCode' => $course->course_code]) }}" class="w-100">
    @csrf
    <div class="mt-4 px-4 w-100">
        <p class="subtext mt-3">Select a student to enroll</p>
        <x-bladewind::select name="userId" searchable="true" label_key="label" value_key="value"
            label="Select a student to enroll" :data="$studentsArray" />
    </div>
    <div class="mt-4 px-4 w-100">
        <p class="subtext mt-3">Schedule</p>
        <x-bladewind::select name="course_schedule_id" searchable="true" label_key="label" value_key="value"
            label="Schedule" :data="$schedulesArray" />
    </div>
    <button type="submit" class="btn btn-warning subtext rounded-5 px-4 ms-4 mb-4">
        Add
    </button>
</form>