@props(['delay', 'title', 'value'])

<div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="counter">
        <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
            <h3>{{ $title }}</h3>
        </div>
        <div class="counter-content d-flex align-items-center justify-content-center mt-4">
            <span class="counter-value" data-toggle="counter-up">{{ $value }}</span>
            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
        </div>
    </div>
</div>
