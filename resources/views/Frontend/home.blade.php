<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>JustDance</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <x-topbar/>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <x-navbar/>
        <!-- Navbar & Hero End -->


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <x-carousel-item/>
            <x-carousel-item/>
        </div>
        <!-- Carousel End -->

        <!-- Banner Start -->
        <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
            <div class="container">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                    <h1 class="me-4"><span class="fw-normal">Join us today for </span><span> your first dance</span></h1>
                    <a href="#" class="text-white fw-bold fs-2"> <i class="fa fa-phone me-1"></i> 714-783-2205</a>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- About Start -->
        <x-about/>
        <!-- About End -->


        <!-- Counter Facts Start -->
        <div class="container-fluid counter-facts py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                                <h3>Dance Classes</h3>
                            </div>
                            <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                                <span class="counter-value" data-toggle="counter-up">158</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                                <h3>Best Instructor</h3>
                            </div>
                            <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                                <span class="counter-value" data-toggle="counter-up">49</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter">
                            <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                                <h3>Total Brunch</h3>
                            </div>
                            <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                                <span class="counter-value" data-toggle="counter-up">17</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter">
                            <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                                <h3>Happy customer</h3>
                            </div>
                            <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                                <span class="counter-value" data-toggle="counter-up">567</span>
                                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                            </div>
                        </div>
                    </div>
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
                            <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Training</h4>
                            <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Training Platform</h1>
                        </div>
                        <div class="col-xl-4 text-xl-end wow fadeInUp" data-wow-delay="0.3s">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">View All Training</a>
                        </div>
                    </div>
                </div>
                <div class="training-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-img rounded-top">
                            <img src="{{ asset('frontend/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">01</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Dance Theater</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-img rounded-top">
                            <img src="{{ asset('frontend/img/service-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">02</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Personalized Learning</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-img rounded-top">
                            <img src="{{ asset('frontend/img/service-2.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">03</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Convenient Dancing</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-img rounded-top">
                            <img src="{{ asset('frontend/img/service-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">04</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Dance Theater</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.9s">
                        <div class="training-img rounded-top">
                            <img src="{{ asset('frontend/img/service-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">05</h1>
                        </div>
                        <div class="rounded-bottom border border-top-0 p-4">
                            <a href="#" class="h4 mb-3 d-block">Personalized Learning</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
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
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                        <div class="class-img rounded-top">
                            <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                        <div class="class-img rounded-top">
                            <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                        <div class="class-img rounded-top">
                            <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                        <div class="class-img rounded-top">
                            <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
                    <div class="class-item bg-white rounded wow fadeInUp" data-wow-delay="0.9s">
                        <div class="class-img rounded-top">
                            <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Explore Details</a>
                        </div>
                    </div>
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
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">JAN 20</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border border-top-0 rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House - Springs Dance</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                                <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/img/service-2.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">JUN 30</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House And Registration</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                                <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/img/service-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">MAY 15</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House Morris Dance</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                                <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/img/service-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;">APR 2</div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> 08:00AM - 10:00PM</a>
                                    <a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>
                                </div>
                            </div>
                            <div class="border rounded-bottom p-4">
                                <a href="#" class="h4 mb-3 d-block">Open House Dance Studio</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                                <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events End -->



        <!-- Blogs Start -->
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="pb-5">
                    <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Blog & News</h4>
                    <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Latest News & Articles</h1>
                </div>
                <div class="blog-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-img rounded-top">
                            <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-img rounded-top">
                            <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-img rounded-top">
                            <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                        <div class="blog-img rounded-top">
                            <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                                <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                            </div>
                            <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                            <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blogs End -->


        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="pb-5">
                    <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Dance Teachers</h4>
                    <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Professional Instructor</h1>
                </div>
                <div class="team-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-img bg-secondary rounded-top">
                            <img src="{{ asset('frontend/img/team-1.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center p-4">
                            <a href="#" class="h4">Emily Ava</a>
                            <p class="mb-0 text-primary">Instructor</p>
                        </div>
                    </div>
                    <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-img bg-secondary rounded-top">
                            <img src="{{ asset('frontend/img/team-2.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center p-4">
                            <a href="#" class="h4">Emily Ava</a>
                            <p class="mb-0 text-primary">Instructor</p>
                        </div>
                    </div>
                    <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-img bg-secondary rounded-top">
                            <img src="{{ asset('frontend/img/team-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center p-4">
                            <a href="#" class="h4">Emily Ava</a>
                            <p class="mb-0 text-primary">Instructor</p>
                        </div>
                    </div>
                    <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-img bg-secondary rounded-top">
                            <img src="{{ asset('frontend/img/team-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center p-4">
                            <a href="#" class="h4">Emily Ava</a>
                            <p class="mb-0 text-primary">Instructor</p>
                        </div>
                    </div>
                    <div class="team-item border rounded wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-img bg-secondary rounded-top">
                            <img src="{{ asset('frontend/img/team-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center p-4">
                            <a href="#" class="h4">Emily Ava</a>
                            <p class="mb-0 text-primary">Instructor</p>
                        </div>
                    </div>
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
                        <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                            <a class="d-flex py-2 px-5 rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                                <span class="text-dark">All</span>
                            </a>
                        </li>
                        <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                            <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2">
                                <span class="text-dark">Dance Practice</span>
                            </a>
                        </li>
                        <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                            <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-3">
                                <span class="text-dark">Dance Training</span>
                            </a>
                        </li>
                        <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                            <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-4">
                                <span class="text-dark">Dance Growth</span>
                            </a>
                        </li>
                        <li class="nav-item bg-light border border-primary rounded-pill mb-4">
                            <a class="d-flex py-2 px-5 rounded-pill" data-bs-toggle="pill" href="#GalleryTab-5">
                                <span class="text-dark">Dance Improvement</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-2">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="GalleryTab-2" class="tab-pane fade show p-0">
                            <div class="row g-2">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="GalleryTab-3" class="tab-pane fade show p-0">
                            <div class="row g-2">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="GalleryTab-4" class="tab-pane fade show p-0">
                            <div class="row g-2">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="GalleryTab-5" class="tab-pane fade show p-0">
                            <div class="row g-2">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                                                               </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-1.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-2.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="video h-100">
                                        <img src="{{ asset('frontend/img/class-3.jpg') }}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
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
                    <div class="testimonial-item border text-center rounded">
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/testimonial-1.jpg') }}" alt="img">
                        </div>
                        <div class="position-relative" style="margin-top: 140px;">
                            <h5 class="mb-0">Person Name</h5>
                            <p>Profession</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-content p-4">
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item border text-center rounded">
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/testimonial-2.jpg') }}" alt="img">
                        </div>
                        <div class="position-relative" style="margin-top: 140px;">
                            <h5 class="mb-0">Person Name</h5>
                            <p>Profession</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-content p-4">
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item border text-center rounded">
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/testimonial-3.jpg') }}" alt="img">
                        </div>
                        <div class="position-relative" style="margin-top: 140px;">
                            <h5 class="mb-0">Person Name</h5>
                            <p>Profession</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-content p-4">
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item border text-center rounded">
                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/testimonial-3.jpg') }}" alt="img">
                        </div>
                        <div class="position-relative" style="margin-top: 140px;">
                            <h5 class="mb-0">Person Name</h5>
                            <p>Profession</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-content p-4">
                            <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">JustDanc</h4>
                                <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                                <div class="d-flex">
                                    <a class="btn btn-lg-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Address</h4>
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fas fa-map-marker-alt"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">0123.. Street, New York, USA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fa fa-phone-alt"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">+012 345 67890</p>
                                    <p class="mb-0">+012 345 67890</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fas fa-envelope"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">info@example.com</p>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#" class="footer-link"> About Us</a>
                            <a href="#" class="footer-link"> Classes</a>
                            <a href="#" class="footer-link"> Privacy Policy</a>
                            <a href="#" class="footer-link"> Terms & Conditions</a>
                            <a href="#" class="footer-link"> Schedule</a>
                            <a href="#" class="footer-link"> FAQ</a>
                            <a href="#" class="footer-link"> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Newsletter</h4>
                                <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                                <div class="position-relative mx-auto rounded-pill">
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
    

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>

</html>