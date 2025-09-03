@props(['image', 'videoUrl'])

<div class="video h-100">
    <img src="{{ asset('frontend/img/' . $image) }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;"
        alt="">
    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="{{ $videoUrl }}"
        data-bs-target="#videoModal">
        <span></span>
    </button>
</div>
