@props(['image', 'name', 'profession', 'rating' => 5, 'content'])

<div class="testimonial-item border text-center rounded">
    <div class="rounded-circle position-absolute"
        style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
        <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/' . $image) }}"
            alt="img">
    </div>
    <div class="position-relative" style="margin-top: 140px;">
        <h5 class="mb-0">{{ $name }}</h5>
        <p>{{ $profession }}</p>
        <div class="d-flex justify-content-center">
            @for ($i = 1; $i <= 5; $i++)
                <i class="fas fa-star{{ $i <= $rating ? ' text-secondary' : '' }}"></i>
            @endfor
        </div>
    </div>
    <div class="testimonial-content p-4">
        <p class="fs-5 mb-0">{{ $content }}</p>
    </div>
</div>
