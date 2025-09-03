@props(['delay', 'image', 'name', 'title', 'titleColor' => 'primary'])

<div class="team-item border rounded wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="team-img bg-secondary rounded-top">
        <img src="{{ asset('frontend/img/' . $image) }}" class="img-fluid rounded-top w-100" alt="Image">
        <div class="team-icon">
            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                    class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                    class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                    class="fab fa-instagram"></i></a>
            <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                    class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
    <div class="team-content text-center p-4">
        <a href="#" class="h4">{{ $name }}</a>
        <p class="mb-0 text-{{ $titleColor }}">{{ $title }}</p>
    </div>
</div>
