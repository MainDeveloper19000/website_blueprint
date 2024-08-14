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
                            Software Consultant.
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
    @include('layouts.footer')
