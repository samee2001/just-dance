@extends('Frontend.master')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Banner Start -->
    <x-banner />
    <!-- Banner End -->
    <!-- About Start -->
    <x-about />
    <!-- About End -->
    <!-- Counter Facts Start -->
    <div class="container-fluid counter-facts py-5">
        <div class="container">
            <div class="row">
                <x-counter-fact title="Dance Classes" count="158" delay="0.1s" :value="158" />
                <x-counter-fact title="Best Instructor" count="49" delay="0.3s" :value="49" />
                <x-counter-fact title="Total Brunch" count="17" delay="0.5s" :value="17" />
                <x-counter-fact title="Happy customer" count="567" delay="0.7s" :value="567" />
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->
    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Teachers</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Professional Instructor</h1>
            </div>
            <div class="team-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <x-team-item image="team-1.jpg" name="Emily Ava" title="Instructor" delay="0.1s" />
                <x-team-item image="team-2.jpg" name="John Doe" title="Instructor" delay="0.3s" />
                <x-team-item image="team-3.jpg" name="Sophia Smith" title="Instructor" delay="0.5s" />
                <x-team-item image="team-4.jpg" name="Michael Johnson" title="Instructor" delay="0.7s" />
                <x-team-item image="team-1.jpg" name="Emily Ava" title="Instructor" delay="0.9s" />
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection