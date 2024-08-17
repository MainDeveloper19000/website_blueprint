@include('layouts.header')

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
                                <a href="index.html">
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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Other Service</h1>
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
                                Other Service
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
        
        <!--<< Team Details Section Start >>-->
        <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="team-author-items ">
                    <div class="thumb">
                        <img src="assets/img/team/details.jpg" alt="img">
                    </div>
                    <div class="content">
                        <h2>Savannah Nguyen</h2>
                        <span>Children Diet</span>
                        <p>
                            Adipiscing elit. Mauris viverra nisl quis mollis laoreet. Ut eget lacus a felis accumsan pharetra in dignissim enim. In amet odio  mollis urna aliquet volutpat. Sed bibendum nisl vehicula imperdiet imperdiet, augue massa fringilla.
                        </p>
                        <ul>
                            <li>
                                <b>Experience:</b> 10 Years
                            </li>
                            <li>
                                <b>Position:</b>
                                Web Developer
                            </li>
                            <li>
                                <b>Phone:</b>
                                +208-555-0112
                            </li>
                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <span>Social Media</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="details-info-items">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="info-content">
                                <h2>Professional Info</h2>
                                <p class="mb-3">
                                    Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip
                                </p>
                                <p>
                                    The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac augu ehabitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progress-area">
                                <div class="progress-wrap">
                                    <div class="pro-items">
                                        <div class="pro-head">
                                            <h6 class="title">
                                                Web Design
                                            </h6>
                                            <span class="point">
                                                90%
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                    <div class="pro-items">
                                        <div class="pro-head">
                                            <h6 class="title">
                                                Plugin Development
                                            </h6>
                                            <span class="point">
                                                70%
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value style-two"></div>
                                        </div>
                                    </div>
                                    <div class="pro-items">
                                        <div class="pro-head">
                                            <h6 class="title">
                                                Customize
                                            </h6>
                                            <span class="point">
                                                55%
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value style-three"></div>
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

        <!-- Team Section Start -->
        <section class="team-section-details fix section-padding pt-0">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title mb-0">
                        <span>Our Expert</span>
                        <h2>Other team Member</h2>
                    </div>
                    <div class="arry-button">
                        <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
                        <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="swiper team-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/05.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Esther Howard</a></h5>
                                   <p>Legal adviser</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/06.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Wade Warren</a></h5>
                                   <p>Nursing Assistant</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/07.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Bessie Cooper</a></h5>
                                   <p>UI/UX Designer</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/08.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Kathryn Murphy</a></h5>
                                   <p>Physiotherapist</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
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