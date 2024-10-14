<div class="top-banner d-flex flex-column align-items-start justify-content-center w-100 h-100 mt-3">
    <div class="mt-5 ms-5 w-100">
        @foreach ($topReviewers as $reviewer)
            <div class="d-flex flex-row align-items-center justify-content-center w-75 ms-5">
                <!-- Name and Average Rating -->
                <p class="subtext mt-2 mb-0">{{ $reviewer->name }} - {{ round($reviewer->average_rating, 1) }}</p>

                <!-- Star Rating -->
                <div class="ms-2 mb-1 d-none d-md-block">
                    @include('shared.star-rating', ['name' => $reviewer->name, 'rating' => round($reviewer->average_rating, 0), 'isStatic' => true])
                </div>
            </div>
        @endforeach
    </div>
</div>