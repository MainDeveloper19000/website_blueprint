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
                        <a href="https://www.bitrix24.com/create.php?p=17920951"; rel="noindex nofollow" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">
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
                <div class="row g-4">
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="flex: 0 0 20%;">
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
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="flex: 0 0 20%;">
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
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s" style="flex: 0 0 20%;">
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
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s" style="flex: 0 0 20%;">
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
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s" style="flex: 0 0 20%;">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Start -->
    {{-- COLABORATION --}}
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
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Online workspace for <br> the whole team
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Through its wide variety of communication and collaboration tools, Bitrix24 enables
                                teams to work efficiently and smoothly wherever they are — at home, in the office, or on
                                the go.
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
                            {{-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End COLABORATION --}}
    <hr>
    {{-- CRM --}}
    <section class="feature-hosting-section fix section-padding">
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">

                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">CRM</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Free CRM software for <br> your business
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Sell more. Sell better. Sell faster with Bitrix24 a single platform to cover all your
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
                            {{-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a> --}}
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
    {{-- End CRM --}}
    <hr>
    {{-- Site and store --}}
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
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Powerful, no-code website builder<br>
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Create multi-page websites, beautiful landing pages, and online stores with a full set
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
                            {{-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a> --}}
                        </div>
                    </div>

                  

                </div>
            </div>
        </div>
    </section>
    {{-- end site and store --}}
    <hr>
    {{-- Task And Project --}}
    <section class="feature-hosting-section fix section-padding">s
        <div class="container">
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">

                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Task And Project</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Free task management software for your
                                    business<br>
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Set tasks, manage deadlines, collect reports, track KPIs, and run projects from wherever
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
                            {{-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a> --}}
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
    {{-- end Task And Project --}}
    <hr>
    {{-- Copilot --}}
    <section class="feature-hosting-section fix section-padding">s
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
                                <span class="wow fadeInUp">AI-powered assistant CoPilot</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">AI-powered CoPilot<br>
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                CoPilot is a powerful AI tool inside Bitrix24 designed to help you with mundane tasks and boost your creativity. Located conveniently throughout the product, CoPilot is always there when you need it.
                            </p>
                            <div class="list-items">
                                <ul class="wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="far fa-check"></i>
                                        CoPilot with Chat
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        CoPilot with CRM
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        CoPilot in Sites & Stores
                                    </li>
                                </ul>
                                <ul class="wow fadeInUp" data-wow-delay=".5s">
                                    <li>
                                        <i class="far fa-check"></i>
                                        CoPilot with Feed
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        CoPilot in Tasks
                                    </li>
                                    
                                </ul>
                            </div>
                            {{-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i
                                    class="fas fa-long-arrow-alt-right"></i>
                            </a> --}}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    {{-- End Copilt --}}
    <!--<< Footer Section Start >>-->
    @include('layouts.footer')
