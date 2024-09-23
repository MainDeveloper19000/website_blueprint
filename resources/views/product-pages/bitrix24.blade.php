@include('layouts.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<body>
    <!-- Preloader Start -->
    {{-- @include('layouts.preload') --}}
    <!-- Preloader Start -->
    <!-- Offcanvas Area Start -->
    @include('layouts.snacknav')
    <div class="offcanvas__overlay"></div>
    <!-- Header Section Start -->
    @include('layouts.navigation')
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
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Microsoft_365_Copilot_Icon.svg/2048px-Microsoft_365_Copilot_Icon.svg.png"
                                    alt="img" height="50" width="50">
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
    <div class="swiper-container"​ style="overflow: hidden">
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
                                                    Online Workspaces
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Online Meetings
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Copilot In Chat
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Online Documents & File Storage
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Shared Calendars
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Workgroups
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Mobile Commumnications
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
                                                    Sale Management
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Sale Enablement
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Marketing
                                                </li>
                                                <li><i class="far fa-check"></i>
                                                    Automation & Integrations
                                                </li>
                                                <li><i class="far fa-check"></i>
                                                    Mobile CRM
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Contact Center
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Analytics & Reports
                                                </li>
                                                <li><i class="far fa-check"></i>
                                                    Sales Team Collaboration
                                                </li>
                                                <li><i class="far fa-check"></i>
                                                    Copilot in CRM
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
                                                    Task management
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Task tracking

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    API & integrations
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Project management
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Employee performance
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Mobile tasks

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Project collaboration
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Automation
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    CoPilot in Tasks
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
                                                    Website builder
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Social selling
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Online store

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Mobile sites & online stores

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Website widget

                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Website forms
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Landing pages
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Online marketing tools

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    CoPilot in Sites & Stores
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
                                        <img src="https://www.bitrix24.com/upload/optimizer/converted/images/content_en/tools/communications/index/communications-main.png.webp?1723037766385"
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
                                                    Information management
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
                                                    CoPilot in Feed
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
                                                    CoPilot in Chat

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    CoPilot in CRM

                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    CoPilot in Feed



                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    CoPilot in Tasks
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    CoPilot in Sites & Stores
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
    {{-- ======================================================== --}}
    @include('layouts.bitrix24service')
    {{-- @include('layouts.bitrix_solu') --}}
    <div class="footer-bottom">
        <br>
        <center>
            <p style="font-size: 30px;font-weight: 500;">See why Customers Love Bitrix 24</p>
        </center>
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <img src="assets/img/bitrix24_G2_awards_2024/BusinessInstantMessaging_HighPerformer_Asia_HighPerformer.png"
                    alt="Business Instant Messaging High Performer Asia" height="120px">

                <img src="assets/img/bitrix24_G2_awards_2024/CloudContentCollaboration_HighPerformer_Enterprise_HighPerformer.png"
                    alt="Cloud Content Collaboration High Performer Enterprise" height="120px">

                <img src="assets/img/bitrix24_G2_awards_2024/CRM_HighPerformer_Mid-Market_AsiaPacific_HighPerformer.png"
                    alt="CRM High Performer Mid-Market Asia Pacific" height="120px">

                <img src="assets/img/bitrix24_G2_awards_2024/ProjectManagement_EasiestToUse_Enterprise_EaseOfUse.png"
                    alt="Project Management Easiest To Use Enterprise" height="120px">

                <img src="assets/img/bitrix24_G2_awards_2024/VideoConferencing_UsersMostLikelyToRecommend_Enterprise_Nps.png"
                    alt="Video Conferencing Users Most Likely To Recommend Enterprise" height="120px">

            </div>
        </div>
    </div>
    {{-- start pricing --}}
    <section class="pricing-section fix section-padding section-bg">
        <div class="pricing-shape">
            <img src="assets/img/pricing-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Pricing Plans</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">One price for ALL users included within <br>the plan
                    limit</h2>
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
                    Save up to 20%
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
                                    </div> --}}
                                    <h2>100% free</h2><br><br><br>
                                    <div class="section-title text-center">
                                        <span class="style-bg wow fadeInUp">Unlimited users</span>
                                    </div>
                                </div>

                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        Register free
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 GB
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited
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
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

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
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 5 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        Buy
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            24 GB
                                        </span>

                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 users
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
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>

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
                                    <br>
                                    <br>
                                    <br>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Customer support
                                        </span>
                                    </li>
                                    <br>
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
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 50 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        Buy
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
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
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 100 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        Buy
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            1 024 GB
                                        </span>

                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 users
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
                                    <br>
                                    <br>
                                    <br>
                                    <br>


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
                                <h6 class="top-text">Enterprise</h6>
                                <div class="pricing-header-2">
                                    {{-- <div class="price-list">
                                        <del>120.99</del>
                                        <span>SAVE 75%</span>
                                    </div> --}}
                                    <h2>$499 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 250 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        Buy
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            3TB
                                        </span>

                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            250 users
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
                                    </div> --}}
                                    <h2>100% free</h2><br><br><br>
                                    <div class="section-title text-center">
                                        <span class="style-bg wow fadeInUp">Unlimited users</span>
                                    </div>
                                </div>

                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        Register free
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 GB
                                        </span>

                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited
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
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".6s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Basic</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>$49</del> --}}
                                        {{-- <span>SAVE 35%</span> --}}
                                    </div>
                                    <h2>$49<sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 5 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            24 GB
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            5 users
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
                                            <i class="fa-solid fa-check"></i>
                                            CRM
                                        </span>

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
                                    <br>
                                    <br>
                                    <br>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Customer support
                                        </span>
                                    </li>
                                    <br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay=".8s">
                            <div class="pricing-items style-2">
                                <h6 class="top-text">Standard</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>$124</del> --}}
                                        {{-- <span>SAVE 35%</span> --}}
                                    </div>
                                    <h2>$99 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 50 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
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
                                        {{-- <del>$249</del> --}}
                                        {{-- <span>SAVE 35%</span> --}}
                                    </div>
                                    <h2>$199 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 100 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            1 024 GB
                                        </span>

                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            100 users
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
                                    <br>
                                    <br>
                                    <br>
                                    <br>


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
                                <h6 class="top-text">Enterprise</h6>
                                <div class="pricing-header-2">
                                    <div class="price-list">
                                        {{-- <del>$499</del>
                                        <span>SAVE 35%</span> --}}
                                    </div>
                                    <h2>$399 <sub>/month</sub></h2>
                                </div>
                                <p class="text-center">
                                    / organization / month / billed monthly
                                </p>
                                <div class="section-title text-center">
                                    <span class="style-bg wow fadeInUp">includes 250 users</span>
                                </div>
                                <div class="pricing-button">
                                    <a href="https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=17920951&ga=GA1.1.728590792.1724894287&bx_fbp=fb.1.1724894287546.857504256541115124&bx_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F128.0.0.0+Safari%2F537.36"
                                        class="pricing-btn">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            3TB
                                        </span>

                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            250 users
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
                            <img src="assets/img/integrate/Artboard1.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard2.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard3.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard4.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard5.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard6.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard7.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard8.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard9.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard10.png" alt="img" height="50">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/integrate/Artboard11.png" alt="img" height="50">
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
    <!-- Faq Section Start -->
    <section class="faq-section fix section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="faq-image">
                            <img src="assets/img/bitrix24/faqimg.jpg" alt="img">
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
                                                Is the 'free forever' plan really free?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, it is! The free plan is a default account state, in which you can
                                                add an unlimited number of users and enjoy the available tools
                                                completely free of charge for as long as you wish. Please note that some
                                                tools like Telephony and apps from Bitrix24 Market are available only on
                                                the paid plans.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Does Bitrix24 have a trial period?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, Bitrix24 features a free 15-day trial period that allows you to
                                                test out most of the features available on our high-tier plans. The
                                                trial mode can be activated on the Subscription > Activate trial page in
                                                your cloud account. No credit card is required. Learn more
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3"
                                                aria-expanded="false" aria-controls="faq3">
                                                What’s the difference between annual and monthly billing?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                The difference is how often you pay your subscription fee. The annual
                                                subscription has a 12-month billing cycle, which means that you pay a
                                                full subscription price every 12 months (please note that there are no
                                                installments available).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                Can I change my plan?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, you can. Learn more about cloud subscription upgrades and
                                                downgrades here.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                How do I cancel the automatic subscription renewal option?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Once you purchase a subscription, the auto-renewal option will be
                                                enabled by default. You can cancel the automatic renewal at any time on
                                                the Subscription > Purchase History page in your Bitrix24 account. This
                                                action will not affect your subscription expiration date. Learn more
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                How can I get assistance with my project implementation?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Bitrix24 partners will make your Bitrix24 experience more pleasant and
                                                productive: from free product demo to advanced implementation,
                                                customization, and employee training. Bitrix24 partners can also help
                                                you set up an integration with a third-party app or service. Local
                                                partners will provide you support in your local language and timezone.
                                                Just fill in the form and get a personal offer from up to 5 partners.
                                                You can also browse our partner’s directory and hand-pick the right
                                                partner.
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