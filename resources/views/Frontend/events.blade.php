@extends('frontend.master')

@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Upcoming Events</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Events</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Banner Start -->
    <x-banner />
    <!-- Banner End -->

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
                <x-event-item delay="0.1s" image="service-1.jpg" date="JUL 01" time="08:00AM - 10:00PM" location="New York"
                    title="Open House And Registration" />
                <x-event-item delay="0.3s" image="service-2.jpg" date="JUN 30" time="08:00AM - 10:00PM" location="New York"
                    title="Open House And Registration" />
                <x-event-item delay="0.5s" image="service-3.jpg" date="MAY 15" time="08:00AM - 10:00PM" location="New York"
                    title="Open House And Registration" />
                <x-event-item delay="0.7s" image="service-4.jpg" date="APR 02" time="08:00AM - 10:00PM" location="India"
                    title="Open House And Registration" />
                <x-event-item delay="0.9s" image="service-1.jpg" date="MAR 20" time="08:00AM - 10:00PM" location="Sri Lanka"
                    title="Open House And Registration" />
            </div>
        </div>
    </div>
    <!-- Events End -->


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

    <!-- Video Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container py-5">
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
                                <x-video-item image="class-4.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <x-video-item image="class-1.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-2" class="tab-pane fade show p-0 active">
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
                                <x-video-item image="class-4.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <x-video-item image="class-1.jpg" videoUrl="https://www.youtube.com/embed/DWRcNpR6Kdc" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection