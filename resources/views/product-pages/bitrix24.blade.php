@include('layouts.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

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
                        <a href="https://www.bitrix24.com/create.php?p=17920951"; rel="noindex nofollow"
                            class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">
                            START FOR FREE <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets/img/bitrix24.png" alt="img" width="888.89" height="500">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Start -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-wrapper-2">
                <div class="row g-3">
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s"
                        style="flex: 0 0 16.66%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/collaboration.png" alt="img" height="50"
                                    width="50">
                            </div>
                            <div class="content">
                                <h3>Collaboration</h3>
                                {{-- <p>Bitrix24 features everything you need for productive team collaboration and
                                    communication: chat, online meetings, tasks, calendar, file storage, online
                                    documents, workflow automation, and more.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s"
                        style="flex: 0 0 16.66%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/crm.png" alt="img" height="50"
                                    width="50">
                            </div>
                            <div class="content">
                                <h3>CRM</h3>
                                {{-- <p>Bitrix24 CRM has everything you need to acquire leads, turn them into deals, receive
                                    payments, manage inventory, e-sign documents, run marketing campaigns, increase
                                    customer engagement, grow customer retention, track sales metrics, and more.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s"
                        style="flex: 0 0 16.66%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/task-management.png" alt="img" height="50"
                                    width="50">
                            </div>
                            <div class="content">
                                <h3>Task And Projects</h3>
                                {{-- <p>Bitrix24 features all the popular task management tools as a part of a single
                                    platform – pick the ones you’re most comfortable with and start getting work done
                                    together with your team.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s"
                        style="flex: 0 0 16.66%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/online-shopping.png" alt="img" height="60"
                                    width="60">
                            </div>
                            <div class="content">
                                <h3>Sites & Stores</h3>
                                {{-- <p>Use our intuitive, no-code website builder to create beautiful sites, landing pages,
                                    and online stores that are fully integrated with Bitrix24 CRM and online marketing
                                    tools.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s"
                        style="flex: 0 0 16.66%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/HR & Automation.png" alt="img" height="50"
                                    width="50">
                            </div>
                            <div class="content">
                                <h3>HR & Automation</h3>
                                {{-- <p>Bitrix24 is a highly scalable workspace solution that features everything you need to
                                    run a team of 5, 50, 500, or 5,000 while maintaining top productivity at all times.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s"
                        style="flex: 0 0 16.66%;">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/HR & Automation.png" alt="img" height="50"
                                    width="50">
                            </div>
                            <div class="content">
                                <h3>Copilot</h3>
                                {{-- <p>Bitrix24 is a highly scalable workspace solution that features everything you need to
                                    run a team of 5, 50, 500, or 5,000 while maintaining top productivity at all times.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Start -->
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- COLABORATION Section -->
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/tools/communications/index/communications-main.png.webp?1723037766385"
                                            alt="bitrix24">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            <span class="wow fadeInUp">COLABORATION</span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Online workspace for <br>
                                                the
                                                whole team
                                            </h2>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Through its wide variety of communication and collaboration tools, Bitrix24
                                            enables teams to work efficiently and smoothly wherever they are — at home,
                                            in the office, or on the go.
                                        </p>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    The driving force behind your team
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Instant and efficient communication
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Productive collaboration
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    AI-powered workspace
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- CRM Section -->
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            <span class="wow fadeInUp">CRM</span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Free CRM software for <br>
                                                your business
                                            </h2>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Sell more. Sell better. Sell faster with Bitrix24 a single platform to cover
                                            all your
                                            needs.
                                        </p>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    The driving force behind your team
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Instant and efficient communication
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Productive collaboration
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    AI-powered workspace
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/tools/crm/index/crm-main.png.webp?1723037766385"
                                            alt="bitrix24crm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Task And Project Section -->
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            <span class="wow fadeInUp">Task And Project</span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Free task management
                                                software for your
                                                business<br>
                                            </h2>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Set tasks, manage deadlines, collect reports, track KPIs, and run projects
                                            from wherever
                                            you are.
                                        </p>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Your tasks. Your way
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Ideal fit for any team
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    AI-powered project management
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Task automation
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/tools/tasks_and_projects/index/tasks_and_projects-main.png.webp?1723037766385"
                                            alt="bitrix24taskandpj">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Site and Store Section -->
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/tools/websites/index/websites-main.png.webp?1723037766385"
                                            alt="bitrix24siteandstore">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            <span class="wow fadeInUp">Site and Store</span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Powerful, no-code website
                                                builder<br>
                                            </h2>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Create multi-page websites, beautiful landing pages, and online stores with
                                            a full set
                                            of ecommerce tools on board.
                                        </p>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Create websites, landing pages, and online stores
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Hassle-free website building
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    AI-powered content
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Integrated with Bitrix24 CRM
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- HR section --}}
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/tools/hr_automation/index/hr_automation-main.png.webp?1724240830867"
                                            alt="bitrix24">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            <span class="wow fadeInUp">HR & Automation</span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">HR
                                                Manage People<br> Build a Culture
                                            </h2>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            HR teams love Bitrix24 because it makes their jobs easier. If you are
                                            looking for some office management software to help your company, try the
                                            Bitrix24 HR system. Not only is this software free, but it comes with
                                            valuable tools, including these popular features.
                                        </p>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Employee management
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Culture & engagement
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Internal communications
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    CoPilot in Feed

                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Mobile HR
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Work management
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Automation
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                  
                                                    Information management
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- CoPilot Section -->
            <div class="swiper-slide">
                <section class="feature-hosting-section fix section-padding">
                    <div class="container">
                        <div class="feature-content-warpper margin-top-60">
                            <div class="row g-4 justify-content-between align-items-center">
                                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="feature-hosting-image">
                                        <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/screens/tools/copilot/header-human-copilot.png.webp?1723037766385"
                                            alt="bitrix24copilot">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="feature-hosting-content">
                                        <div class="section-title">
                                            <span class="wow fadeInUp">CoPilot</span>
                                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Your very own AI
                                                assistant<br>
                                            </h2>
                                        </div>
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                            Automate your day-to-day work, streamline your workflows, and do more than
                                            ever with
                                            Bitrix24 Co-pilot.
                                        </p>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Task management
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Marketing automation
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Website building
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Content creation
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    {{-- start pricing --}}
    <section class="pricing-section fix section-padding section-bg">
        <div class="pricing-shape">
            <img src="assets/img/pricing-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Pricing Plans</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Choose Awesome Plan for <br> your Needs</h2>
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
                    Save up to 35%
                </div>
            </div>
            <div class="tab-content">
                <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="pricing-items style-2 active">
                                <h6 class="top-text">Free</h6>
                                <div class="pricing-header-2">
                                    {{-- <div class="price-list">
                                        <del>120.99</del>
                                        <span>SAVE 75%</span>
                                    </div>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 GB
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Basic</h6>
                                <div class="pricing-header-2">
                                    {{-- <div class="price-list">
                                        <del>120.99</del>
                                        <span>SAVE 75%</span>
                                    </div> --}}
                                    <h2>$61 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            24 GB
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 users
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                        </i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Standard</h6>
                                <div class="pricing-header-2">
                                    {{-- <div class="price-list">
                                        <del>120.99</del>
                                        <span>SAVE 75%</span>
                                    </div> --}}
                                    <h2>$124 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 GB
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            50 users
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-xmark"></i>
                                            Free Domain ($9.99 value)
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Contact Center
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Website builder
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online store
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Marketing
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online documents
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Customer support
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Administration
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Professional</h6>
                                <div class="pricing-header-2">
                                    {{-- <div class="price-list">
                                        <del>120.99</del>
                                        <span>SAVE 75%</span>
                                    </div> --}}
                                    <h2>$249 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            1 024 GB
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 users
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="1s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Enterprise</h6>
                                <div class="pricing-header-2">
                                    {{-- <div class="price-list">
                                        <del>120.99</del>
                                        <span>SAVE 75%</span>
                                    </div> --}}
                                    <h2>$499 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 GB SSD Storage
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            250 users
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Contact Center
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Website builder
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online store
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Marketing
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online documents
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            e-Signature for HR
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Sales Intelligence
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Automation
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            HR
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Multiple branches
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Scalability
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Enterprise pack
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Customer support
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Administration
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="yearly" class="tab-pane fade" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".4s">
                            <div class="pricing-items style-2 active">
                                <h6 class="top-text">Free</h6>
                                <div class="pricing-header-2">
                                    {{-- <div class="price-list">
                                        <del>120.99</del>
                                        <span>SAVE 75%</span>
                                    </div>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 GB
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".6s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Basic</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <del>$40</del>
                                        <span>SAVE 35%</span>
                                    </div>
                                    <h2>$61 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            24 GB
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 users
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                        </i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Standard</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <del>$124</del>
                                        <span>SAVE 35%</span>
                                    </div>
                                    <h2>$81 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 GB
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            50 users
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-xmark"></i>
                                            Free Domain ($9.99 value)
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Contact Center
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Website builder
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online store
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Marketing
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online documents
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Customer support
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Administration
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Professional</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <del>$249</del>
                                        <span>SAVE 35%</span>
                                    </div>
                                    <h2>$162 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            1 024 GB
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 users
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Enterprise</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        <del>$499</del>
                                        <span>SAVE 35%</span>
                                    </div>
                                    <h2>$325 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                </p>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 GB SSD Storage
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            250 users
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Collaboration
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Tasks & projects
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Bitrix24 Sign
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Drive
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Contact Center
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Website builder
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online store
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Marketing
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Online documents
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            e-Signature for HR
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Sales Intelligence
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Automation
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            HR
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Multiple branches
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Scalability
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Enterprise pack
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Customer support
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Administration
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </section>
    {{-- brand-section --}}
    <div class="brand-section pt-100 pb-0">
        <div class="container">
            <div class="swiper brand-slider bor-bottom pb-100 pt-0">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Bitrix24 Integrations</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Choose Awesome platform <br> your Needs</h2>
                    <p>Bitrix24 comes with several dozen integrations available in Bitrix24.Market. You can also create
                        your own apps using our REST API.</p>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard1.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard2.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard3.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard4.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard5.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard6.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard7.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard8.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard9.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard10.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard11.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard12.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard13.png" alt="img" height="35">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard14.png" alt="img" height="35">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<< Footer Section Start >>-->
    @include('layouts.footer')
