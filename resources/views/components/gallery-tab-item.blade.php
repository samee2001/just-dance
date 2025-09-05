@props(['href', 'text', 'active' => false])

<li class="nav-item bg-light border border-primary rounded-pill mb-4">
    <a class="d-flex py-2 px-5 rounded-pill {{ $active ? 'active' : '' }}" data-bs-toggle="pill" href="{{ $href }}">
        <span class="text-dark">{{ $text }}</span>
    </a>
</li>
