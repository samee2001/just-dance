@props(['delay', 'image', 'date', 'time', 'location', 'title','description'])

<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="event-item rounded">
        <div class="position-relative">
            <img src="{{ asset('frontend/img/' . $image) }}" class="img-fluid rounded-top w-100" alt="Image">
            <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2"
                style="top: 0; right: 0;">{{ $date }}</div>
            <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute"
                style="bottom: 0; left: 0; opacity: 0.8;">
                <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> {{ $time }}</a>
                <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span>
                    {{ $location }}</a>
            </div>
        </div>
        <div class="border border-top-0 rounded-bottom p-4">
            <a href="#" class="h4 mb-3 d-block">{{ $title }}</a>
            <p class="mb-3">{{ $description }}</p>
            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
        </div>
    </div>
</div>
