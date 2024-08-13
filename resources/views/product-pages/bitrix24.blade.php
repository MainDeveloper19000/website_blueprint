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
                            Bussiness Development Sofware
                        </span>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Bitrix24. Your ultimate workspace.
                        </h1>
                        <a href="pricing.html" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">
                            view plan <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets/img/bitrix24.png" alt="img"  width="888.89" height="500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section Start -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-wrapper-2">
                <div class="row g-4">
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="flex: 0 0 20%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/collaboration.png" alt="img" height="50" width="50">
                            </div>
                            <div class="content">
                                <h3>Collaboration</h3>
                                <p>Bitrix24 features everything you need for productive team collaboration and
                                    communication: chat, online meetings, tasks, calendar, file storage, online
                                    documents, workflow automation, and more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="flex: 0 0 20%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/crm.png" alt="img" height="50" width="50">
                            </div>
                            <div class="content">
                                <h3>CRM</h3>
                                <p>Bitrix24 CRM has everything you need to acquire leads, turn them into deals, receive
                                    payments, manage inventory, e-sign documents, run marketing campaigns, increase
                                    customer engagement, grow customer retention, track sales metrics, and more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s" style="flex: 0 0 20%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/task-management.png" alt="img" height="50" width="50">
                            </div>
                            <div class="content">
                                <h3>Task And Projects</h3>
                                <p>Bitrix24 features all the popular task management tools as a part of a single
                                    platform – pick the ones you’re most comfortable with and start getting work done
                                    together with your team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s" style="flex: 0 0 20%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/online-shopping.png" alt="img" height="60" width="60">
                            </div>
                            <div class="content">
                                <h3>Sites & Stores</h3>
                                <p>Use our intuitive, no-code website builder to create beautiful sites, landing pages,
                                    and online stores that are fully integrated with Bitrix24 CRM and online marketing
                                    tools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s" style="flex: 0 0 20%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/HR & Automation.png" alt="img" height="50" width="50">
                            </div>
                            <div class="content">
                                <h3>HR & Automation</h3>
                                <p>Bitrix24 is a highly scalable workspace solution that features everything you need to run a team of 5, 50, 500, or 5,000 while maintaining top productivity at all times.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Feature Section Start -->
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/hosting-boy.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Best hosting</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Get the Good Level Hosting <br> at
                                    Budget Price</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Pellentesque varius mauris sit amet nisi tincidunt finibus Donec faucibus diam quis
                                feugiat accumsan Integer molestie sapien ut ipsum fermentum feugiat Curabitur.
                            </p>
                            <div class="list-items">
                                <ul class="wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="far fa-check"></i>
                                        30-day money back guarantee
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Web site Marketing Solutions
                                    </li>
                                </ul>
                                <ul class="wow fadeInUp" data-wow-delay=".5s">
                                    <li>
                                        <i class="far fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        24/7 system Monitoring
                                    </li>
                                </ul>
                            </div>
                            <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section fix section-padding section-bg margin-top-10 pb-0">
        <div class="container">
            <h3 class="brand-head-title wow fadeInUp" data-wow-delay=".3s"><img src="assets/img/w.png"
                    alt="img">Recommended By <span>WordPress.org</span></h3>
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
            </div>
        </div>
    </section>

    <!-- Affiliate Section Start -->
    <section class="affiliate-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="style-border wow fadeInUp">Affiliate Program</span>
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">How Affiliate Works</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante
                    interdum eu Sed odio massa</p>
            </div>
            <div class="row g-0">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="affiliate-card-items">
                        <h6 class="top-text">All Plan Features</h6>
                        <div class="pricing-header">
                            <div class="affiliate-img">
                                <img src="assets/img/hosting/affiliate.png" alt="img">
                            </div>
                        </div>
                        <ul>
                            <li>
                                cPanel Accounts
                            </li>
                            <li>
                                Disk Space
                            </li>
                            <li>
                                Bandwidth (Traffic)
                            </li>
                            <li>
                                CPU Cores(per cPanel account)
                            </li>
                            <li>
                                RAM(per cPanel account)
                            </li>
                            <li>
                                Hosting type
                            </li>
                            <li>
                                Multisite ready
                            </li>
                            <li>
                                PHP 7 ready
                            </li>
                            <li>
                                Money-Back Guarantee
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="affiliate-card-items">
                        <h6 class="top-text">Regular Plans</h6>
                        <div class="pricing-header">
                            <div class="price-list">
                                <del>120.99</del>
                                <span>SAVE 75%</span>
                            </div>
                            <h2>$99 <sub>/mo</sub></h2>
                            <p class="text-center">
                                Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                            </p>
                            <a href="contact.html" class="theme-btn">get Started Now <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                        <ul class="text-center">
                            <li>
                                50
                            </li>
                            <li>
                                40 GB
                            </li>
                            <li>
                                4 tB
                            </li>
                            <li>
                                2
                            </li>
                            <li>
                                3 BG
                            </li>
                            <li>
                                Shared
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                            </li>
                            <li>
                                28 DAY
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="affiliate-card-items active">
                        <h6 class="top-text">Premium plans</h6>
                        <div class="pricing-header">
                            <div class="price-list">
                                <del>120.99</del>
                                <span>SAVE 75%</span>
                            </div>
                            <h2>$69 <sub>/mo</sub></h2>
                            <p class="text-center">
                                Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                            </p>
                            <a href="contact.html" class="theme-btn">get Started Now <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                        <ul class="text-center">
                            <li>
                                90
                            </li>
                            <li>
                                80 GB
                            </li>
                            <li>
                                6 TB
                            </li>
                            <li>
                                2
                            </li>
                            <li>
                                3 BG
                            </li>
                            <li>
                                Shared
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                            </li>
                            <li>
                                28 DAY
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="affiliate-card-items">
                        <h6 class="top-text">Business</h6>
                        <div class="pricing-header">
                            <div class="price-list">
                                <del>120.99</del>
                                <span>SAVE 75%</span>
                            </div>
                            <h2>$39 <sub>/mo</sub></h2>
                            <p class="text-center">
                                Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                            </p>
                            <a href="contact.html" class="theme-btn">get Started Now <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                        <ul class="text-center">
                            <li>
                                110
                            </li>
                            <li>
                                150 GB
                            </li>
                            <li>
                                8 TB
                            </li>
                            <li>
                                2
                            </li>
                            <li>
                                3 BG
                            </li>
                            <li>
                                Shared
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                            </li>
                            <li>
                                <i class="fa-regular fa-check"></i>
                            </li>
                            <li>
                                28 DAY
                            </li>
                        </ul>
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
    </section>

    <!--<< Footer Section Start >>-->
    <footer class="footer-section fix bg-cover" style="background-image: url('assets/img/section-bg.jpg');">
        <div class="footer-widgets-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <a href="{{ url('/') }}">
                                    <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p>
                                    Nullam interdum libero vitae pretium aliquam donec nibh purus laoreet in ullamcorper
                                    vel malesuada.
                                </p>
                                <ul class="contact-info">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_4461_529)">
                                                <path
                                                    d="M18.7719 14.1213C18.7388 14.0938 14.9913 11.4275 13.9794 11.5906C13.4913 11.6769 13.2125 12.01 12.6531 12.6762C12.4985 12.8617 12.3403 13.0443 12.1788 13.2238C11.8252 13.1086 11.4804 12.9682 11.1469 12.8038C9.42533 11.9656 8.03437 10.5747 7.19625 8.85312C7.03179 8.51964 6.89143 8.1748 6.77625 7.82125C6.96 7.65312 7.2175 7.43625 7.3275 7.34375C7.99062 6.7875 8.32312 6.50812 8.40938 6.01937C8.58625 5.0075 5.90625 1.26125 5.87875 1.2275C5.7567 1.05441 5.59775 0.910578 5.41336 0.806386C5.22897 0.702193 5.02374 0.640241 4.8125 0.625C3.72625 0.625 0.625 4.6475 0.625 5.32562C0.625 5.365 0.681875 9.3675 5.6175 14.3881C10.6325 19.3181 14.635 19.375 14.6744 19.375C15.3519 19.375 19.375 16.2737 19.375 15.1875C19.3596 14.9762 19.2975 14.771 19.1932 14.5866C19.0889 14.4022 18.945 14.2433 18.7719 14.1213ZM14.605 18.1213C14.0625 18.075 10.7 17.6319 6.5 13.5063C2.35437 9.28563 1.9225 5.9175 1.87937 5.39563C2.69861 4.10978 3.68799 2.94064 4.82062 1.92C4.84562 1.945 4.87875 1.9825 4.92125 2.03125C5.78989 3.21702 6.53817 4.48642 7.155 5.82062C6.95441 6.02242 6.7424 6.21253 6.52 6.39C6.17512 6.65278 5.85843 6.95063 5.575 7.27875C5.52704 7.34604 5.4929 7.42217 5.47456 7.50274C5.45621 7.5833 5.45403 7.66671 5.46812 7.74813C5.60039 8.32108 5.80297 8.87549 6.07125 9.39875C7.03243 11.3725 8.62735 12.9672 10.6012 13.9281C11.1244 14.1968 11.6788 14.3996 12.2519 14.5319C12.3333 14.5463 12.4168 14.5443 12.4974 14.5259C12.578 14.5075 12.6541 14.4732 12.7213 14.425C13.0505 14.1404 13.3494 13.8225 13.6131 13.4762C13.8094 13.2425 14.0712 12.9306 14.1706 12.8425C15.5082 13.4587 16.7805 14.2079 17.9681 15.0787C18.02 15.1225 18.0569 15.1562 18.0812 15.1781C17.0606 16.3111 15.8912 17.3007 14.605 18.12V18.1213ZM14.375 9.375H15.625C15.6235 8.04937 15.0962 6.77847 14.1589 5.84111C13.2215 4.90375 11.9506 4.37649 10.625 4.375V5.625C11.6193 5.62599 12.5725 6.0214 13.2756 6.72445C13.9786 7.42749 14.374 8.38074 14.375 9.375Z"
                                                    fill="white" />
                                                <path
                                                    d="M17.5 9.375H18.75C18.7475 7.22088 17.8907 5.15569 16.3675 3.6325C14.8443 2.1093 12.7791 1.25248 10.625 1.25V2.5C12.4477 2.50215 14.1951 3.22717 15.484 4.51602C16.7728 5.80486 17.4978 7.5523 17.5 9.375Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4461_529">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <a href="tel:+61086660112">+6108-666-0112</a>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.0812 13.1941C18.0812 14.883 16.7074 16.2547 15.0206 16.2547H4.97935C3.2926 16.2547 1.91873 14.883 1.91873 13.1941V6.805C1.91835 6.26068 2.06418 5.72624 2.34096 5.25754L7.24049 10.1571C7.9735 10.8922 8.9551 11.2973 10.001 11.2973C11.0448 11.2973 12.0264 10.8922 12.7594 10.1571L17.659 5.25754C17.9358 5.72623 18.0816 6.26067 18.0812 6.805V13.1941H18.0812ZM15.0206 3.74441H4.97935C4.28279 3.74441 3.63978 3.98016 3.12541 4.37238L8.07424 9.32336C8.5865 9.83344 9.27017 10.1164 10.001 10.1164C10.7297 10.1164 11.4135 9.83344 11.9257 9.32336L16.8745 4.37238C16.3602 3.98016 15.7172 3.74441 15.0206 3.74441ZM15.0206 2.56348H4.97935C2.64103 2.56348 0.737793 4.46672 0.737793 6.80504V13.1942C0.737793 15.5346 2.64103 17.4357 4.97935 17.4357H15.0206C17.3589 17.4357 19.2622 15.5346 19.2622 13.1942V6.805C19.2622 4.46668 17.3589 2.56348 15.0206 2.56348Z"
                                                fill="white" />
                                        </svg>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-3 ps-lg-3 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Company</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="{{ url('/about') }}">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Hostech About
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Pricing Plans
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        FAQ’S
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-3 ps-lg-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-footer-widget style-margin">
                            <div class="widget-head">
                                <h3>Hosting</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="shared-hosting.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Shared Hosting
                                    </a>
                                </li>
                                <li>
                                    <a href="reseller-hosting.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Reseller Hosting
                                    </a>
                                </li>
                                <li>
                                    <a href="vps-hosting.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        VPS Hosting
                                    </a>
                                </li>
                                <li>
                                    <a href="cloud-hosting.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Cloud Hosting
                                    </a>
                                </li>
                                <li>
                                    <a href="dedicated-hosting.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Dedicated Hosting
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-4 wow fadeInUp" data-wow-delay=".8s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Support</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="login.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Login Account
                                    </a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Register Account
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Submit Ticket
                                    </a>
                                </li>
                                <li>
                                    <a href="support.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Support Center
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="fa-regular fa-chevrons-right"></i>
                                        Live Chat
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-4 wow fadeInUp" data-wow-delay=".9s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="footer-content">
                                <p>
                                    Sign up to seargin weekly newsletter to get the latest updates.
                                </p>
                                <div class="footer-input">
                                    <input type="email" id="email2" placeholder="Enter Email Address">
                                    <button class="newsletter-btn" type="submit">
                                        <i class="fa-regular fa-paper-plane"></i>
                                    </button>
                                </div>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-between">
                    <p class="wow fadeInLeft" data-wow-delay=".3s">
                        © All Copyright 2024 by <a href="{{ url('/') }}">Hostech</a>
                    </p>
                    <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <img src="assets/img/visa-logo.png" alt="img">
                        </li>
                        <li>
                            <a href="contact.html">
                                <img src="assets/img/mastercard-logo.png" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <img src="assets/img/payoneer-logo.png" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <img src="assets/img/affirm-logo.png" alt="img">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" id="scrollUp" class="scroll-icon">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
</body>

</html>
