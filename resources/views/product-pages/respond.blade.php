@include('layouts.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<body>
    <!-- Preloader Start -->

    @include('layouts.preload')
    <!-- Preloader Start -->
    <!-- Offcanvas Area Start -->
    @include('layouts.snacknav')
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
                        <h6 class="wow fadeInUp" data-wow-delay=".5s">Capture leads, automate chats and converse to
                            convert with the leading customer conversation management software</h6>
                        <a href="https://app.respond.io/user/register?_gl=1*vzkgg5*_gcl_au*NzMzNDU2OTEuMTcxNzY2NjI4MA..*_ga*NTkxNDYzNzEyLjE3MDk4OTAyNzY.*_ga_0EZ318H868*MTcyNTI0NjMyNC4yMjcuMS4xNzI1MjQ2MzQ4LjM2LjAuMA"
                            class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">
                            Start For Free<i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets\img\respond\image(4).png" alt="img" width="max-width">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Start -->
    <br>
    <br>
   <center><h5 style="font-size: 50px;color: rgb(46, 46, 126)">Industry Specific</h5></center> 
    <div class="swiper-container" style="overflow: hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">              
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
                                            {{-- <span class="wow fadeInUp">RETAIL</span> --}}
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">RETAIL</h2>
                                        </div>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Electronic
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Fashion & Apparel
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Furniture
                                                </li>
                                                <li><i class="far fa-check"></i>
                                                    Jewelry
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            retailing is all about Customer Relationship Management. Bitrix24 helps
                                            create seamless and personalized shopping experiences that lead to better
                                            sales, increase brand loyalty, and boost sales conversions. Win customers
                                            over by revealing hidden needs and building deeper connections.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">

                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            {{-- <span class="wow fadeInUp">EDUCATION</span> --}}
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">EDUCATION
                                            </h2>
                                        </div>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Academic Tutoring
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Afterschool Activities
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Sport & Fitness
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Don’t lose out on leads because of late replies or lack of visibility.
                                            Respond.io is
                                            designed for education marketing, helping schools market and sell their
                                            services
                                            effectively.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="assets/img/education_respond.jpg" alt="img"
                                            style="border-radius: 12px">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="assets/img/healthcare.jpg" alt="img"
                                            style="border-radius: 12px">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            {{-- <span class="wow fadeInUp">HEALTHCARE</span> --}}
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">HEALTHCARE
                                            </h2>
                                        </div>

                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Beauty Center

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Dental Clinic
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Medical Clinic
                                                </li>

                                            </ul>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Switch appointment bookings, inquiries and teleconsultations over to instant
                                            messaging.
                                            By integrating patient data with a messaging inbox, automation and analytics
                                            stack,
                                            respond.io is just what the doctor ordered.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">

                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            {{-- <span class="wow fadeInUp">PROFESSIONAL SERVICES</span> --}}
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">PROFESSIONAL SERVICES
                                            </h2>
                                        </div>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Home Cleaning & Maid Services

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Photography & Videography
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            From photography and videography services to home cleaning and maid
                                            services, respond.io
                                            helps businesses deliver their services at scale from any channel on a
                                            single platform.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://cdn.prod.website-files.com/6030eb20edb26744961d31ee/66a3027664f58437e88743ca_Professional-Services-Photography-Videography-p-800.png" alt="img"
                                            style="border-radius: 12px">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="assets/img/automotive.jpg" alt="img"
                                            style="border-radius: 12px">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            {{-- <span class="wow fadeInUp">AUTOMOTIVE</span> --}}
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">AUTOMOTIVE
                                            </h2>
                                        </div>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Auto Part Retailer
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Car Dealership
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Manage all automotive chats on one platform. Make respond.io a part of your
                                            toolkit to
                                            market at scale, shorten sales cycles and offer personalized experience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">

                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            {{-- <span class="wow fadeInUp">TRAVEL</span> --}}
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">TRAVEL
                                            </h2>
                                        </div>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Travel Agency & Tour Operator

                                                </li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Are you struggling to organize all those tiny details about your clients and
                                            their trips, flights, and cruises? Is the workflow so challenging that your
                                            agents have started to lose their edge? Are there leaks in your lead
                                            pipeline? Bitrix24 has a perfect solution for all your travel management
                                            problems. Collect, store, and manage client and vendor data, build long-term
                                            relationships, automate tasks, encourage productivity, and streamline your
                                            sales process, all from a single platform.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://cdn.prod.website-files.com/6030eb20edb26744961d31ee/66a311b811c8222c5702c42e_Travel-1-p-800.png" alt="img" style="border-radius: 12px">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="{{ url('/respondfeature') }}" class="theme-btn wow fadeInUp"
                            data-wow-delay=".5s">Explore More
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </section>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
        });
    </script>




    {{-- banefit service provide --}}
    
    @include('layouts.respondservice')
    {{-- banefit service provide --}}


    <!--  Section Start Pricing-->
    <section class="pricing-section fix section-padding section-bg" id="pricing-section">
        <div class="pricing-shape">
            <img src="assets/img/pricing-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Pricing Plans</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Plans Built to Scale
                   <br>Your Business</h2>
                   <p style="font-size: 20px">Pay only for the contacts you message each month.</p>
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
                        <!-- Starter Card -->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="pricing-items style-2 active">
                                <h6 class="top-text">Starter</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>$99 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    5 Users Included <br>
                                    Additional Users at $15/month
                                    __________________________
                                    <br>
                                    For sales teams to manage conversations and achieve sales goals across multiple channels
                                </p>
                                <b>Includes:</b>
                                <ul class="pricing-list">
                                    <li><span><i class="fa-solid fa-check"></i> Team & Custom Inboxes</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Mobile App</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Respond AI: AI Prompt</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Respond AI: AI Assist</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Basic Reports</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Two-Factor Authentication (2FA)</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Growth Widgets</span></li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ" class="pricing-btn">Start 7 Days Trial <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Growth Card -->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Growth</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <b style="background-color: rgb(243, 255, 74); border-radius: 10px; padding: 3px;">Most Popular</b>
                                        <span>Starting at</span>
                                    </div>
                                    <h2>$199<sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    10 Users Included <br>
                                    Additional Users at $25/month
                                    __________________________
                                    <br>Starts at 1,000 Monthly Active Contacts
                                    <br>
                                    For marketing and sales teams looking to maximize conversions over conversations with automation and AI
                                </p>
                                <b>Everything in Starter, Plus:</b>
                                <ul class="pricing-list">
                                    <li><span><i class="fa-solid fa-check"></i> Broadcasts</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Workflows</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Respond AI: AI Agent</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Advanced Reports</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Data Export</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Zapier & Make Integration</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Developer API</span></li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ" class="pricing-btn">Start 7 Days Trial <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Advanced Card -->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Advanced</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>$349<sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    10 Users Included <br>
                                    Additional Users at $30/month  
                                    __________________________
                                    <br>Starts at 1,000 Monthly Active Contacts
                                    <br>For marketing and sales teams needing advanced integrations, multiple workspaces, and security enhancements
                                </p>
                                <b>Everything in Growth, Plus:</b>
                                <ul class="pricing-list">
                                    <li><span><i class="fa-solid fa-check"></i> Mask Phone Number & Email Address</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Multiple Workspaces</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> HTTP Requests in Workflows</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Incoming & Outgoing Webhooks</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Single Sign-On (SSO)</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Custom Channels</span></li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ" class="pricing-btn">Book a Demo <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Enterprise Card -->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Enterprise</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>Talk to Us</h2>
                                </div>
                                <p class="text-center">
                                    Unlimited Users<br>
                                    Custom Monthly Active Contacts<br>
                                    __________________________
                                    <br>For marketing and sales teams requiring a large number of user seats, workspaces, and increased API rate limits
                                </p>
                                <b>Includes:</b>
                                <ul class="pricing-list">
                                    <li><span><i class="fa-solid fa-check"></i> Large Team Management</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Custom Features</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Enterprise Support</span></li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ" class="pricing-btn">Book a Demo <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="yearly" class="tab-pane fade" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".4s">
                            <div class="pricing-items style-2 active">
                                <h6 class="top-text">Starter</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>120.99</del>s --}}
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>$79 <sub>/month</sub></h2>
                                </div>

                                <p class="text-center">
                                    5 Users Included <br>
                                    Additional Users at $12/month
                                    __________________________
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
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Mobile App
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Prompt
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Assist
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Basic Reports
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Two-Factor Authentication (2FA)
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Growth Widgets
                                        </span>
                                        
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ"
                                        class="pricing-btn">
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
                                        <b style="background-color: rgb(243, 255, 74);border-radius: 10px;padding: 3px;">Most Popular</b>
                                        <span>Starting at</span>
                                    </div>
                                    <h2>$159<sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    10 Users Included <br>
                                    Additional Users at $20/month
                                    __________________________
                                    <br>
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
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Workflows
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Respond AI: AI Agent
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Advanced Reports
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Data Export
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Zapier & Make Integratio
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Developer API
                                        </span>
                                        
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ"
                                        class="pricing-btn">
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
                                    <h2>$279<sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    10 Users Included <br>
                                    Additional Users at $24/month
                                    __________________________
                                    <br>
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
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Multiple Workspaces
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            HTTP Requests in Workflows
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Incoming & Outgoing Webhooks
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Single Sign-On (SSO)
                                        </span>
                                        
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Custom Channels
                                        </span>
                                        
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ"
                                        class="pricing-btn">
                                        Book a Demo
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Enterprise</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <center><span>Starting at</span></center>
                                    </div>
                                    <h2>Talk to Us</h2>
                                </div>
                                <p class="text-center">
                                    Unlimited Users<br>
                                    Custom Monthly Active Contacts<br>
                                    __________________________
                                    <br>For marketing and sales teams requiring a large number of user seats, workspaces, and increased API rate limits
                                </p>
                                <b>Includes:</b>
                                <ul class="pricing-list">
                                    <li><span><i class="fa-solid fa-check"></i> Large Team Management</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Custom Features</span></li>
                                    <li><span><i class="fa-solid fa-check"></i> Enterprise Support</span></li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="https://respond.io/?pscd=get.respond.io&ps_partner_key=Y2hhbmJvcGhhOTA2MQ&ps_xid=MnfBRO7AUm0Qa1&gsxid=MnfBRO7AUm0Qa1&gspk=Y2hhbmJvcGhhOTA2MQ" class="pricing-btn">Book a Demo <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- brand-section --}}
    <div class="brand-section pt-100 pb-0" id="brandsection">
        <div class="container">
            <div class="swiper brand-slider bor-bottom pb-100 pt-0">
                <div class="section-title text-center">
                    {{-- <span class="wow fadeInUp">Respond.io integrations</span> --}}
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">integrations</h2>
                    {{-- <p>Powerful apps and integrations to acquire, engage and retain more customers with respond.io.</p> --}}
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard1.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard2.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard3.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard4.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard5.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard6.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard7.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard8.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard9.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard10.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard11.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard12.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/respond/Artboard13.png" alt="img" height="35">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>


    <!-- Faq Section Start -->
    <section class="faq-section fix section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="faq-image">
                            <img src="https://motopress.com/wp-content/uploads/2020/05/FAQ-plugins-915x524.jpg"
                                alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">FAQ’S</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Frequently Asked Questions
                                </h2>
                            </div>
                            <div class="faq-accordion mt-4 mt-md-0">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                Are WhatsApp fees included in the respond.io subscription?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                WhatsApp fees are not included in the respond.io subscription, however,
                                                you'll be able to top up your WhatsApp credit through our platform. If
                                                you exceed 1,000 monthly WhatsApp service conversations, Meta will
                                                deduct your WhatsApp credit for any additional conversations that month.
                                                Check out our WhatsApp Business API Pricing Calculator for an estimate
                                                of how much it can cost.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                What is a Monthly Active Contact?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Monthly Active Contacts are contacts that have sent or received a
                                                message (excluding broadcasts) over the billing month. We charge based
                                                on Monthly Active Contacts to align more closely with your success and
                                                provide a transparent, value-driven service. Our approach is designed to
                                                support your growth: as you succeed and expand, we grow alongside you,
                                                ensuring that our services scale effectively to meet your evolving
                                                needs.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3"
                                                aria-expanded="false" aria-controls="faq3">
                                                What if I reach my Monthly Active Contact limit?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                If you exceed your Monthly Active Contact limit, your operations will
                                                not be interrupted. Instead, you will be billed on demand for any
                                                additional contacts in increments of 100 Monthly Active Contacts. You
                                                will be charged $12 per 100 MACs on Growth and $15 per 100 MACs on
                                                Advanced. This charge will be applied at the end of your billing
                                                cycle.Please note on-demand Monthly Active Contacts are intended for
                                                temporary, seasonal usage spikes. If you require a permanent increase,
                                                upgrading your plan is more cost-effective.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                How does the free trial work?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Our 7-day free trial provides immediate access to all features of the
                                                Growth plan for 5 users and 1,000 Monthly Active Contacts, except for
                                                broadcasts. Please note that certain features, such as topping up your
                                                WhatsApp Business Account, require a subscription. If you need more time
                                                to explore respond.io, please contact our support team to discuss
                                                extending your trial.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq5"
                                                aria-expanded="false" aria-controls="faq5">
                                                Can I upgrade or cancel my plan at any time?
                                            </button>
                                        </h5>
                                        <div id="faq5" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, you can cancel or upgrade your subscription at any time. To cancel,
                                                go to the Billing section of the Platform, and click Cancel
                                                Subscription. You will continue to receive the features and limits of
                                                your plan until the end of the billing cycle. To upgrade, go to the
                                                billing section of the Platform, select a plan and click Subscribe or
                                                you can talk to sales.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq6"
                                                aria-expanded="false" aria-controls="faq6">
                                                How does respond.io protect my data?
                                            </button>
                                        </h5>
                                        <div id="faq6" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Respond.io prioritizes your data security through a combination of
                                                encryption, access controls and security audits. Our ISO 27001
                                                certification further highlights our commitment to maintaining top-tier
                                                information security standards. For more insights into our security
                                                measures, visit our security page.
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

    @include('layouts.footer')
