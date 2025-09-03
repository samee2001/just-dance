@props(['delay', 'image', 'number', 'title'])

<div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="training-img rounded-top">
        <img src="{{ asset('frontend/img/' . $image) }}" class="img-fluid rounded-top w-100" alt="Image">
        <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">{{ $number }}</h1>
    </div>
    <div class="rounded-bottom border border-top-0 p-4">
        <a href="#" class="h4 mb-3 d-block">{{ $title }}</a>
        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
    </div>
</div>
