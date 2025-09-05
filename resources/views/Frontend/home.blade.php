@extends('Frontend.master')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <x-carousel-item />
        <x-carousel-item />
    </div>
    <!-- Carousel End -->

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
                <x-counter-fact delay="0.1s" title="Dance Classes" value="158" />
                <x-counter-fact delay="0.3s" title="Best Instructor" value="49" />
                <x-counter-fact delay="0.5s" title="Total Brunch" value="17" />
                <x-counter-fact delay="0.7s" title="Total Dinner" value="12" />
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->


    <!-- Training Start -->
    <div class="container-fluid training py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Training
                        </h4>
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Training Platform</h1>
                    </div>
                    <div class="col-xl-4 text-xl-end wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">View All Training</a>
                    </div>
                </div>
            </div>
            <div class="training-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <x-training-item delay="0.1s" image="service-1.jpg" number="01" title="Dance Theater" />
                <x-training-item delay="0.3s" image="service-3.jpg" number="02" title="Personalized Learning" />
                <x-training-item delay="0.5s" image="service-2.jpg" number="03" title="Convenient Dancing" />
                <x-training-item delay="0.7s" image="service-4.jpg" number="04" title="Dance Theater" />
                <x-training-item delay="0.9s" image="service-3.jpg" number="05" title="Personalized Learning" />
                <x-training-item delay="1.1s" image="service-2.jpg" number="06" title="Convenient Dancing" />
            </div>
        </div>
    </div>
    <!-- Training End -->


    <!-- Dance Class Start -->
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


    <!-- Events Start -->
    <div class="container-fluid events py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Events</h4>
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Upcoming Events</h1>
                    </div>
                    <div class="col-xl-4 text-xl-end pb-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">View All Events</a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-start">
                <x-event-item delay="0.1s" image="service-1.jpg" date="JAN 20" time="08:00AM - 10:00PM" location="New York"
                    title="Open House - Springs Dance" />
                <x-event-item delay="0.3s" image="service-2.jpg" date="JUN 30" time="08:00AM - 10:00PM" location="New York"
                    title="Open House And Registration" />
                <x-event-item delay="0.5s" image="service-3.jpg" date="MAY 15" time="08:00AM - 10:00PM" location="New York"
                    title="Open House Morris Dance" />
                <x-event-item delay="0.7s" image="service-4.jpg" date="APR 2" time="08:00AM - 10:00PM" location="New York"
                    title="Open House Dance Studio" />
                <x-event-item delay="0.9s" image="service-1.jpg" date="JAN 20" time="08:00AM - 10:00PM" location="Sri Lanka"
                    title="Open House - Springs Dance" />
                <x-event-item delay="1.1s" image="service-2.jpg" date="JUN 30" time="08:00AM - 10:00PM" location="India"
                    title="Open House And Registration" />
            </div>
        </div>
    </div>
    <!-- Events End -->





    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Teachers</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Professional Instructor</h1>
            </div>
            <div class="team-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <x-team-item delay="0.1s" image="team-1.jpg" name="Emily Ava" title="Instructor" titleColor="white" />
                <x-team-item delay="0.3s" image="team-2.jpg" name="James Anderson" title="Instructor" titleColor="white" />
                <x-team-item delay="0.5s" image="team-3.jpg" name="Json Roy" title="Instructor" titleColor="white" />

                <x-team-item delay="0.9s" image="team-4.jpg" name="Jehan Watson" title="Instructor" titleColor="white" />
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Video Gallery Start -->
    <div class="container-fluid gallery pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Gallery</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Dance class gallery</h1>
            </div>
            <div class="tab-class wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center pb-4">
                    <x-gallery-tab-item href="#GalleryTab-1" text="All" :active="true" />
                    <x-gallery-tab-item href="#GalleryTab-2" text="Dance Practice" />
                    <x-gallery-tab-item href="#GalleryTab-3" text="Dance Training" />
                    <x-gallery-tab-item href="#GalleryTab-4" text="Dance Growth" />
                    <x-gallery-tab-item href="#GalleryTab-5" text="Dance Improvement" />
                </ul>
                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <x-video-item image="class-1.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <x-video-item image="class-3.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                <x-video-item image="class-3.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <x-video-item image="class-1.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <x-video-item image="class-3.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <x-video-item image="class-3.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                <x-video-item image="class-1.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <x-video-item image="class-3.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-2" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <x-video-item image="class-1.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.3s">
                                <x-video-item image="class-3.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.7s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.3s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.7s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <x-video-item image="class-2.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Gallery End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">OUR CLIENTS RIVIEWS</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel pt-5 wow fadeInUp" data-wow-delay="0.2s">
                <x-testimonial-item image="testimonial-1.jpg" name="John" profession="Profession" :rating="4"
                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt." />
                <x-testimonial-item image="testimonial-2.jpg" name="Andrea" profession="Profession" :rating="3"
                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt." />
                <x-testimonial-item image="testimonial-3.jpg" name="Michael" profession="Profession" :rating="4"
                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt." />
                <x-testimonial-item image="testimonial-3.jpg" name="Hendra" profession="Profession" :rating="1"
                    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt." />
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection