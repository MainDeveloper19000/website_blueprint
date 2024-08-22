@include('layouts.header')
<body>
    <!-- Preloader Start -->

    @include('layouts.preload')

    <!-- Preloader Start -->
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
                                    <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn text-center">
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
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked" checked>
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
                            <button class="theme-create style-border" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
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
                            <button class="theme-create style-border" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
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
    <!-- Hero Section Start -->
    <section class="hero-section hero-1 style-affiliate bg-cover fix"
        style="background-image: url('assets/img/hero/hero-bg-1.jpg');">
        <div class="circle-shape-left">
            <img src="assets/img/hero/hero-1-circle-left.png" alt="shape-img">
        </div>
        <div class="circle-shape-right">
            <img src="assets/img/hero/hero-1-circle-right.png" alt="shape-img">
        </div>
        <div class="dot-left">
            <img src="assets/img/hero/hero-1-dot-left.png" alt="img">
        </div>
        <div class="dot-right">
            <img src="assets/img/hero/hero-1-dot-right.png" alt="img">
        </div>
        <div class="container">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="sub-text-2 wow fadeInUp">
                            <img src="assets/img/hero/activity.png" alt="img" class="me-2">
                            Bussiness Development Software
                        </span>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Respond.io Chat with Leads, Make More Money
                        </h1>
                        <a href="pricing.html" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">
                            view plan <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets/img/Respond_io_logo.png" alt="img" width="888.89" height="500">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Start -->
    <!-- Feature Section Start -->
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/retail.jpg" alt="img" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">RETAIL</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">From Clicks to Bricks: Enhancing Retail
                                    with Online Chat</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Whether you sell apparel, fine jewelry, electronics or furniture, respond.io helps
                                businesses like yours market and sell at scale from any channel on a single platform.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">

                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">EDUCATION</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">3X Your Student Intake with Respond.io
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Don’t lose out on leads because of late replies or lack of visibility. Respond.io is
                                designed for education marketing, helping schools market and sell their services
                                effectively.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/education_respond.jpg" alt="img" style="border-radius: 12px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/healthcare.jpg" alt="img" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">HEALTHCARE</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Healthier Patient Engagements Over Chat
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Switch appointment bookings, inquiries and teleconsultations over to instant messaging.
                                By integrating patient data with a messaging inbox, automation and analytics stack,
                                respond.io is just what the doctor ordered.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">

                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">PROFESSIONAL SERVICES</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Transform Your Professional Services
                                    with Online Chat
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                From photography and videography services to home cleaning and maid services, respond.io
                                helps businesses deliver their services at scale from any channel on a single platform.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/education_respond.jpg" alt="img" style="border-radius: 12px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/automotive.jpg" alt="img" style="border-radius: 12px">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">AUTOMOTIVE</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Shift Customer Journeys Into High Gear
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Manage all automotive chats on one platform. Make respond.io a part of your toolkit to
                                market at scale, shorten sales cycles and offer personalized experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">

                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">TRAVEL</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Driving Travel Sales with Online Chat
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                From photography and videography services to home cleaning and maid services, respond.io
                                helps businesses deliver their services at scale from any channel on a single platform.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/Travel.jpg" alt="img" style="border-radius: 12px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Brand Section Start -->
    {{-- <div class="brand-section fix section-padding section-bg margin-top-10 pb-0">
        <div class="container">
            <h3 class="brand-head-title wow fadeInUp" data-wow-delay=".3s"><span></span></h3>
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
    </div> --}}
    <!-- Choose Us Section Start -->
    <section class="choose-us-section-2 pt-100 pb-100 margin-top-5">
        <div class="container">
            {{-- <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="choose-us-card-items mt-0">
                        <div class="icon">
                            <img src="assets/img/choose/safe-icon.png" alt="img">
                        </div>
                        <div class="content">
                            <h3>Safe and Secured</h3>
                            <p>
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
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
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
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
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
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
                                Collaboratively formulate principle capital. Progressively evolve user revolutionary
                                hosting services.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!--  Section Start Pricing-->
    <section class="pricing-section fix section-padding section-bg">
        <div class="pricing-shape">
            <img src="assets/img/pricing-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Pricing Plans</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Plans Built to Scale <br>Your Business</h2>
            </div>
            <div class="pricing-tab-header">
                <div class="arrow-shape">
                    <img src="assets/img/arrow.png" alt="img">
                </div>
                <ul class="nav" role="tablist">
                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                        <a href="#monthly" data-bs-toggle="tab" class="nav-link active" aria-selected="true"
                            role="tab">
                            Monthly
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                        <a href="#yearly" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                            role="tab" tabindex="-1">
                            Yearly
                        </a>
                    </li>
                </ul>
                <div class="save-text">
                    Save up to 20% Yearly
                </div>
            </div>
            <div class="tab-content">
                <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="pricing-items style-2 active">
                                <h6 class="top-text">Starter Plans</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>120.99</del>s --}}
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>$99 <sub>/mo</sub></h2>
                                </div>

                                <p class="text-center">
                                    5 Users Included <br>
                                    Additional Users at $15/month
                                    <br>
                                    For sales teams to manage conversations and achieve sales goals across multiple
                                    channels
                                </p>
                                <b>Includes:</b>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Team & Custom Inboxes
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Mobile App
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Prompt
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Assist
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Basic Reports
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Two-Factor Authentication (2FA)
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Growth Widgets
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn">
                                        Start 7 Days Trial
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Growth</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <b>Most Popular</b>
                                        <span>Starting at</span>
                                    </div>
                                    <h2>$199<sub>/mo</sub></h2>
                                </div>
                                <p class="text-center">
                                    5 Users Included
                                    Additional Users at $25/month
                                    Starts at 1,000 Monthly Active Contacts
                                    <br>
                                    For marketing and sales teams looking to maximize conversions over conversations
                                    with automation and AI
                                </p>
                                <b>Everything in Starter, Plus:</b>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Broadcasts
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Workflows
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Agent
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Advanced Reports
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Data Export
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Zapier & Make Integratio
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Developer API
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn">
                                        Start 7 Days Trial
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Advanced</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>120.99</del> --}}
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>$349<sub>/mo</sub></h2>
                                </div>
                                <p class="text-center">
                                    5 Users Included,
                                    Additional Users at $30/month
                                    Starts at 1,000 Monthly Active Contacts <br>For marketing and sales teams needing
                                    advanced integrations, multiple workspaces, and security enhancements
                                </p>
                                <b>Everything in Growth, Plus:</b>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Mask Phone Number & Email Address
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Multiple Workspaces
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            HTTP Requests in Workflows
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Incoming & Outgoing Webhooks
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Single Sign-On (SSO)
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Custom Channels
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn">
                                        Book a Demo
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="yearly" class="tab-pane fade" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".4s">
                            <div class="pricing-items style-2 active">
                                <h6 class="top-text">Starter Plans</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>120.99</del>s --}}
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>$79 <sub>/mo</sub></h2>
                                </div>

                                <p class="text-center">
                                    5 Users Included <br>
                                    Additional Users at $12/month
                                    <br>
                                    For sales teams to manage conversations and achieve sales goals across multiple
                                    channels
                                </p>
                                <b>Includes:</b>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Team & Custom Inboxes
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Mobile App
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Prompt
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Assist
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Basic Reports
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Two-Factor Authentication (2FA)
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Growth Widgets
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn">
                                        Start 7 Days Trial
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".6s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Growth</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <b>Most Popular</b>
                                        <span>Starting at</span>
                                    </div>
                                    <h2>$159<sub>/mo</sub></h2>
                                </div>
                                <p class="text-center">
                                    5 Users Included
                                    Additional Users at $20/month
                                    Starts at 1,000 Monthly Active Contacts
                                    <br>
                                    For marketing and sales teams looking to maximize conversions over conversations
                                    with automation and AI
                                </p>
                                <b>Everything in Starter, Plus:</b>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Broadcasts
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Workflows
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Agent
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Advanced Reports
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Data Export
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Zapier & Make Integratio
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Developer API
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn">
                                        Start 7 Days Trial
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Advanced</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>120.99</del> --}}
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>$279<sub>/mo</sub></h2>
                                </div>
                                <p class="text-center">
                                    5 Users Included,
                                    Additional Users at $24/month
                                    Starts at 1,000 Monthly Active Contacts <br>For marketing and sales teams needing
                                    advanced integrations, multiple workspaces, and security enhancements
                                </p>
                                <b>Everything in Growth, Plus:</b>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Mask Phone Number & Email Address
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Multiple Workspaces
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            HTTP Requests in Workflows
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Incoming & Outgoing Webhooks
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Single Sign-On (SSO)
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Custom Channels
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn">
                                        Book a Demo
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </section>
    {{-- <br>
    <hr>
    <section class="feature-section">
        <div class="container">
            <div class="feature-wrapper-2">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-8 col-lg-10 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-card-items text-center">
                                <img src="assets/img/activecontact.png" alt="img" style="width: 100px;">
                            <div class="content mt-3 text-center">
                                <h3>Why Monthly Active Contacts?</h3>
                                <p>Monthly Active Contacts are contacts that have sent or received a message over the month. We believe our pricing should reflect the value we deliver to you. Chats with contacts are opportunities to increase sales and Monthly Active Contact pricing ensures you only pay for the contacts you talk to.
                                    <br>
                                    Monthly Active Contact pricing starts with the Growth plan, designed for businesses looking to increase leads and close more deals without additional staff. This encourages us to focus on features like Respond AI, broadcasting, and workflows to help you achieve these goals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Faq Section Start -->
    {{-- <section class="faq-section fix section-padding pt-0">
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                How to Install WordPress theme on cPanel?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam fringilla erat id ante
                                                commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Do you have Custom Hosting Service?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam fringilla erat id ante
                                                commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3"
                                                aria-expanded="false" aria-controls="faq3">
                                                Better Security And Faster Server?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages Lorem Ipsum but the majority have
                                                suffered alteration in some form, by injected humor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                Deployment Within Few Minutes
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis
                                                semper odio. Mauris et mollis quam. Nullam fringilla erat id ante
                                                commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
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
    </section> --}}
    <!--<< Footer Section Start >>-->
    @include('layouts.footer')
