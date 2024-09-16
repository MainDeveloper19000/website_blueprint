@include('layouts.header')

<body>

    <!-- Preloader Start -->
    @include('layouts.preload')
    <!--<< Mouse Cursor Start >>-->


    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ url('/') }}">
                                <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Oknha Kleang Moeung St. (70), Phnom Penh
                                        120209</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="info@masterchat.iom"><span
                                            class="info@masterchat.io">info@masterchat.io</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Moday-Sunday, 24/7 hour</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel: +85516415111"> +85516415111</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="{{ route('help_center.contact') }}" class="theme-btn text-center">
                                Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    @include('layouts.navigation')

    <!-- Modal Version 1 -->
    {{-- <div class="modal modal-common-wrap fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                        <div class="modal-common-content">
                            <div class="box">
                                <h2>
                                    welcome back!
                                </h2>
                                <form action="#" class="login-from">
                                    <div class="form-grp cmn-mb">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-grp">
                                        <input type="text" placeholder="Enter Password">
                                    </div>
                                    <div
                                        class="d-flex forgot-inner-area cmn-mb justify-content-between gap-2 flex-wrap align-items-center">
                                        <div class="form-check checkmark-inner">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="#" class="forgot">
                                            Forgot Your password?
                                        </a>
                                    </div>
                                    <button type="button" class="theme-btn w-100">
                                        <span>
                                            Log in
                                        </span>
                                    </button>
                                </form>
                                <span class="orting-badge">
                                    Or
                                </span>
                                <div class="d-grid gap-3">
                                    <a href="#" class="cmn-social">
                                        <img src="assets/img/sign/google.png" alt="img">
                                        Continue With Google
                                    </a>
                                    <a href="#" class="cmn-social">
                                        <img src="assets/img/sign/fb.png" alt="img">
                                        continue with facebook
                                    </a>
                                </div>
                                <div class="form-check d-flex align-items-center gap-2 from-customradio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        i accept your terms & conditions
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-right-thumb position-relative">
                            <img src="assets/img/sign/login.png" alt="img">
                            <div class="signlogin-btnwrap">
                                <button class="theme-create style-border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    create account
                                </button>
                                <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    Log In
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    <!-- Modal Version 2 -->
    {{-- <div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                        <div class="modal-common-content">
                            <div class="box">
                                <h2>
                                    Create account
                                </h2>
                                <form action="#" class="login-from">
                                    <div class="form-grp cmn-mb">
                                        <input type="text" placeholder="User name">
                                    </div>
                                    <div class="form-grp cmn-mb">
                                        <input type="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-grp cmn-mb">
                                        <input type="text" placeholder="Enter Password">
                                    </div>
                                    <div class="form-grp">
                                        <input type="text" placeholder="Enter Confirm password">
                                    </div>
                                </form>
                                <span class="orting-badge">
                                    Or
                                </span>
                                <div class="d-grid gap-3">
                                    <a href="#" class="cmn-social">
                                        <img src="assets/img/sign/google.png" alt="img">
                                        Continue With Google
                                    </a>
                                    <a href="#" class="cmn-social">
                                        <img src="assets/img/sign/fb.png" alt="img">
                                        continue with facebook
                                    </a>
                                </div>
                                <div class="pb-xxl-3">
                                    <div class="form-check d-flex align-items-center gap-2 from-customradio">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault11">
                                        <label class="form-check-label" for="flexRadioDefault11">
                                            i accept your terms & conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="button" class="theme-btn w-100">
                                        <span>
                                            Log in
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-right-thumb position-relative">
                            <img src="assets/img/sign/create.png" alt="img">
                            <div class="signlogin-btnwrap">
                                <button class="theme-create style-border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    create account
                                </button>
                                <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    Log In
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="page-header-left">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Respond.io Gold Partner</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-regular fa-chevrons-right"></i>
                        </li>
                        <li>
                            Respond.io Gold Partner
                        </li>
                    </ul>
                </div>
                <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                    <img src="assets\img\respond\unnamed.png" alt="img" height="160px;">
                </div>
            </div>
        </div>
    </div>



    {{-- 1 --}}
    <!-- About Section Start -->
    <section class="about-section section-padding fix">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="about-sub">
                                Respond.io Partner
                            </div>
                            <div class="shape-image">
                                <img src="assets/img/about/shape.png" alt="img">
                            </div>
                            <div class="about-image-1 wow fadeInLeft" data-wow-delay=".3s">
                                <img src="assets\img\respond\certificate_badage-01.png" alt="img"
                                    style="background-color: white;border: blue;border-style: solid; 1px;">
                                <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                    {{-- <img src="assets\img\respond\certificate_badage-01.png" alt="img"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Partner of respond.io</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">We Are a Gold Partner of respond.io!</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                We are proud to announce that we have achieved the prestigious Gold Partner status with
                                respond.io, a leading platform for omnichannel customer engagement. This certification
                                is a testament to our expertise, dedication, and commitment to delivering top-notch
                                solutions for our clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="footer-bottom">
        <center><p style="font-size: 30px;font-weight: 500;">Certificate</p></center>
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <img src="assets\img\respond\certificate1.png" alt="Business Instant Messaging High Performer Asia" height="120px">

                <img src="assets\img\respond\certificate2.png" alt="Cloud Content Collaboration High Performer Enterprise" height="120px">
                
                <img src="assets\img\respond\certificate3.png" alt="CRM High Performer Mid-Market Asia Pacific" height="120px">
                
                <img src="assets\img\respond\certificate4.png" alt="Project Management Easiest To Use Enterprise" height="120px">
                
                <img src="assets\img\respond\certificate5.png" alt="Video Conferencing Users Most Likely To Recommend Enterprise" height="120px">
                
            </div>
        </div>
    </div>
    </section>
    
    
  

    {{-- 2 --}}

    <section class="contact-section fix section-bg section-padding">
        <div class="container">
            {{-- <h2 class="wow fadeInUp" data-wow-delay=".3s">Vision and Mission </h2> --}}
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="contact-right">
                            <center>
                                <h3 class="wow fadeInUp">Why we are Gold Partner?
                                </h3>
                            </center>
                            <p style="font-size: 20px; font-weight: 500;color: black;">
                                Being a Gold Partner signifies that we have met the highest standards of excellence set
                                by respond.io. It reflects our deep knowledge of the platform, our ability to implement
                                advanced solutions, and our proven track record of successful projects. Here’s what it
                                means for you:
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section Start -->
    <section class="feature-hosting-section fix section-padding section-bg">
        <div class="container">
            <div class="feature-content-warpper style-2">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Why we are...</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Expertise and Experience</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Our team is highly trained and experienced in using respond.io to its fullest potential.
                                We can help you leverage the platform to enhance your customer engagement strategies.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="feature-hosting-image-2">
                            <div class="icon-box-1">
                                <img src="assets/img/hosting/icon-1.png" alt="img">
                            </div>
                            <div class="icon-box-2">
                                <img src="assets/img/hosting/icon-3.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="assets\img\respond\Teamwork_Create_Solution_generated.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- panner -->
    {{-- 3 --}}
    <!-- Feature Section Start -->
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets\img\respond\vecteezy_a-group-of-business-professionals-work-together-on-a_47783299.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Why We are...</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Advanced Solutions</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                As a Gold Partner, we have access to exclusive tools, resources, and support from
                                respond.io. This enables us to provide you with cutting-edge solutions tailored to your
                                specific needs.

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section Start -->
    <section class="feature-hosting-section fix section-padding section-bg">
        <div class="container">
            <div class="feature-content-warpper style-2">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Why we are...</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Proven Success</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Our Gold Partner status is a recognition of our successful implementations and satisfied
                                clients. You can trust us to deliver results that drive your business forward.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="feature-hosting-image-2">
                            <div class="icon-box-1">
                                <img src="assets/img/hosting/icon-1.png" alt="img">
                            </div>
                            <div class="icon-box-2">
                                <img src="assets/img/hosting/icon-3.png" alt="img">
                            </div>
                            <div class="thumb">
                                <img src="assets\img\respond\vecteezy_businessman-walking-on-a-bar-chart-planning-each-step-to_19848516.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< Footer Section Start >>-->
    @include('layouts.footer')
