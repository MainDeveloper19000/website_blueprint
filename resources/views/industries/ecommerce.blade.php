@include('layouts.header')
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Mouse Cursor Start >>-->  
        @include('layouts.preload')

        <!-- Offcanvas Area Start -->

        <!-- Header Section Start -->
        
        @include('layouts.navigation')
        <!-- Modal Version 1 -->
        <div class="modal modal-common-wrap fade" id="exampleModal" tabindex="-1" aria-hidden="true">
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
        </div>

        <!-- Modal Version 2 -->
        <div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
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
        </div>

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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Ecommerce</h1>
                        <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="index.html">
                                    Close More with Chat Commerce
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Brand Section Start -->
        <div class="brand-section fix section-padding section-bg margin-top-10 pb-0">
            <div class="container">
                <h3 class="brand-head-title wow fadeInUp" data-wow-delay=".3s"><img src="assets/img/w.png" alt="img">Recommended By <span>WordPress.org</span></h3>
                <div class="swiper brand-slider-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/trustipilot.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/google.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/wpbeginner.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/hostadvice.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="assets/img/brand/capterra.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Choose Us Section Start -->
        <section class="choose-us-section-2 pt-100 pb-100 margin-top-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-card-items mt-0">
                            <div class="icon">
                                <img src="assets/img/choose/safe-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Safe and Secured</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-us-card-items mt-0">
                            <div class="icon">
                                <img src="assets/img/choose/bank-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Money-Back Guarantee</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="choose-us-card-items mt-0">
                            <div class="icon">
                                <img src="assets/img/choose/secured-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Safe and Secured</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="choose-us-card-items mt-0">
                            <div class="icon">
                                <img src="assets/img/choose/support-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Dedicated Support</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hosting Section Start -->
        <section class="hosting-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Best hosting</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Discover Most Powerful Web <br> Hosting Features</h2>
               </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-1.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="dedicated-hosting.html">Dedicated Hosting</a></h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-2.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="dedicated-hosting.html">Email Hosting</a></h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-3.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="dedicated-hosting.html">Ecommerce Hosting</a></h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-4.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="cloud-hosting.html">Cloud Hosting</a></h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-5.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="reseller-hosting.html">Reseller Hosting</a></h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-6.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="vps-hosting.html">VPS Hosting</a></h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section Start -->
        <section class="faq-section fix section-padding pt-0">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="faq-image">
                                <img src="assets/img/faq.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">FAQ’S</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Prioritize Your Site’s Safety and Security
                                    </h2>
                                </div>
                                <div class="faq-accordion mt-4 mt-md-0">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                    How to Install WordPress theme on cPanel?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                    Do you have Custom Hosting Service?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    Better Security And Faster Server?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages Lorem Ipsum but the majority have suffered alteration in some form, by injected humor.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Deployment Within Few Minutes
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Footer Section Start >>-->
        @include('layouts.footer')
