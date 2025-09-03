@props(['delay', 'image', 'title'])

<div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="class-img rounded-top">
        <img src="{{ asset('frontend/img/' . $image) }}" class="img-fluid rounded-top w-100" alt="Image">
    </div>
    <div class="rounded-bottom p-4">
        <a href="#" class="h4 mb-3 d-block">{{ $title }}</a>
        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi
            blanditiis quidem</p>
        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
    </div>
</div>
