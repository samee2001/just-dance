<!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ url('/') }}" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-biohazard me-3"></i>JustDance</h1>
                    <!-- <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('home') || request()->is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ url('/about-us') }}" class="nav-item nav-link {{ request()->is('about-us') ? 'active' : '' }}">About</a>
                        <a href="{{ url('/events') }}" class="nav-item nav-link {{ request()->is('events') ? 'active' : '' }}">Events</a>
                        <a href="{{ url('/gallery') }}" class="nav-item nav-link {{ request()->is('gallery') ? 'active' : '' }}">Gallery</a>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Contact Us</a>
                   
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->