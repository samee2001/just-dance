@extends('Frontend.master')

@section('content')
    <!-- Dance Class Start -->
    <br>
    <div class="container-fluid class bg-light py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Our Dance Classes</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Dance Classes for everyone</h1>
            </div>
            <div class="class-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <x-class-item delay="0.1s" image="class-1.jpg" title="Classical Dance class" />
                <x-class-item delay="0.3s" image="class-2.jpg" title="Western Dance class" />
                <x-class-item delay="0.5s" image="class-3.jpg" title="Traditional Dance class" />
                <x-class-item delay="0.7s" image="class-2.jpg" title="Hip Hop Dance class" />
                <x-class-item delay="0.9s" image="class-3.jpg" title="Contemporary Dance class" />
            </div>
        </div>
    </div>
    <!-- Dance Class End -->
@endsection