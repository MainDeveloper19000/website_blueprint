@include('layouts.header')

<!-- Preloader Start -->
@include('layouts.preload')


        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{url('/')}}">
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
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
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
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
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
        <header class="header-section-1">
            <div id="header-sticky" class="header-1">
                <div class="container">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{url('/')}}" class="header-logo">
                                        <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                                    </a>
                                    <a href="{{url('/')}}" class="header-logo-2">
                                        <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                                    </a>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li class="has-dropdown active menu-thumb">
                                                    <a href="{{url('/')}}">
                                                    Home 
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu has-homemenu has-menu-home">
                                                        <li class="border-none">
                                                            <div class="homemenu-items">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/web-host.png" alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{url('/')}}">Web Hosting</a></h6>
                                                                        <p>
                                                                            Powerful bare metal server
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/host-service.png" alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="index-2.html">Hosting Services</a></h6>
                                                                        <p>
                                                                            Flexible virtual machine
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/host-solut.png" alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="index-3.html">Hosting Solutions</a></h6>
                                                                        <p>
                                                                            Powerful Hosting solutions
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-list mb-0">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/host-agen.png" alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="index-4.html">Hosting Agency</a></h6>
                                                                        <p>
                                                                            Big hosting agency
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown active d-xl-none">
                                                    <a href="team.html" class="border-none">
                                                    Home
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="{{url('/')}}">Web Hosting</a></li>
                                                        <li><a href="index-2.html">Hosting Services</a></li>
                                                        <li><a href="index-3.html">Hosting Solutions</a></li>
                                                        <li><a href="index-4.html">Hosting Agency</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown menu-thumb">
                                                    <a href="news.html">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu has-homemenu">
                                                        <li class="border-none">
                                                            <div class="homemenu-items">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/about.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="{{url('/about')}}">About Us</a></h6>
                                                                                <p>
                                                                                    About hostech
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/black-friday.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="black-friday.html">Black Friday</a></h6>
                                                                                <p>
                                                                                    Excellent Offer
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/affiliate.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="affiliate.html">Affiliate</a></h6>
                                                                                <p>
                                                                                    Best Provider
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/pricing.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="pricing.html">Pricing</a></h6>
                                                                                <p>
                                                                                    Flexible Plans
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/pricing.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="pricing-2.html">Pricing Package</a></h6>
                                                                                <p>
                                                                                    Flexible Plans
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/data-center.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="data-center.html">Data Center</a></h6>
                                                                                <p>
                                                                                    Worldwide Data Center
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/service.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="service.html">Services</a></h6>
                                                                                <p>
                                                                                    Best Services Provider
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/team.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="team.html">Team</a></h6>
                                                                                <p>
                                                                                    Experts Member
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/team.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="team-details.html">Team Details</a></h6>
                                                                                <p>
                                                                                    Experts Member
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/error.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="404.html">Error Pages</a></h6>
                                                                                <p>
                                                                                    Back to Home
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown active d-xl-none">
                                                    <a href="team.html" class="border-none">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                                        <li><a href="black-friday.html">Black Friday</a></li>
                                                        <li><a href="affiliate.html">Affiliate</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="pricing-2.html">Pricing Package</a></li>
                                                        <li><a href="data-center.html">Data Center</a></li>
                                                        <li><a href="service.html">Services</a></li>
                                                        <li><a href="team.html">Team</a></li>
                                                        <li><a href="team-details.html">Team Details</a></li>
                                                        <li><a href="404.html">Error Pages</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown menu-thumb">
                                                    <a href="{{url('/')}}">
                                                    Hosting 
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu has-homemenu has-menu-hosting">
                                                        <li class="border-none">
                                                            <div class="homemenu-items">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/share-host.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="share-hosting.html">Share Hosting</a></h6>
                                                                                <p>
                                                                                    About hostech
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/reseller-shost.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="reseller-hosting.html">Reseller Hosting</a></h6>
                                                                                <p>
                                                                                    Excellent Offer
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/dedicated-host.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="dedicated-hosting.html">Dedicated Hosting</a></h6>
                                                                                <p>
                                                                                    Flexible Plans
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/vps-host.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="vps-hosting.html">VPS Hosting</a></h6>
                                                                                <p>
                                                                                    Flexible Plans
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/wordpress-host.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="wordpress-hosting.html">WordPress Hosting</a></h6>
                                                                                <p>
                                                                                    Best Provider
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="homemenu-list">
                                                                            <div class="icon">
                                                                                <img src="assets/img/menu-icon/cloud-host.png" alt="img">
                                                                            </div>
                                                                            <div class="content">
                                                                                <h6><a href="cloud-hosting.html">Cloud Hosting</a></h6>
                                                                                <p>
                                                                                    Worldwide Data Center
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown active d-xl-none">
                                                    <a href="team.html" class="border-none">
                                                    Hosting
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="share-hosting.html">Share Hosting</a></li>
                                                        <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                                                        <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                                        <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                                        <li><a href="wordpress-hosting.html">WordPress Hosting</a></li>
                                                        <li><a href="cloud-hosting.html">Cloud Hosting</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="doming.html">Doming</a>
                                                </li>
                                                <li>
                                                    <a href="news.html">
                                                    News
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="news-grid.html">News Grid</a></li>
                                                        <li><a href="news.html">News List</a></li>
                                                        <li><a href="news-details.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="contact.html">
                                                    Help Center
                                                    <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="faq.html">Faq</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                        <li><a href="support.html">Support</a></li>
                                                        <li><a href="contact.html">Contact Us</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                                <div class="header-button">
                                    <a href="contact.html" class="theme-btn">
                                        get Started
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Pages not found</h1>
                        <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="{{url('/')}}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <i class="fa-regular fa-chevrons-right"></i>
                            </li>
                            <li>
                               404
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Eror Section Start -->
        <section class="Error-section section-padding fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="error-items">
                            <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                                <img src="assets/img/404.png" alt="img">
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".5s">
                                <span>Oops!</span> Page not found
                            </h2>
                            <p class="mb-3 wow fadeInUp" data-wow-delay=".6s">The page you are looking for does not exist</p>
                            <a href="{{url('/')}}" class="theme-btn wow fadeInUp" data-wow-delay=".7s">
                                Back to home pages
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Footer Section Start >>-->
@include('layouts.footer')