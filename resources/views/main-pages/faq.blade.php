@include('layouts.header')
<body>
    <!-- Preloader Start -->
    @include('layouts.preload')
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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">FAQ’S</h1>
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
                                FAQ’S
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Faq Section Start -->
        {{-- <section class="faq-section fix section-padding">
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
        </section> --}}

         <!--<< Contact Section Start >>-->
         <section class="contact-section fix section-bg section-padding">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                           <div class="contact-left">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Request a <br> Consultation</h2>
                                <div class="contact-image wow fadeInUp" data-wow-delay=".5s">
                                    <img src="assets/img/contact.png" alt="contact-img">
                                </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-right">
                                <h3 class="wow fadeInUp">Get in Touch</h3>
                                <form action="#" id="contact-form" method="POST" class="contact-form-items">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <div class="category-oneadjust">
                                                    <select name="cate" class="category">
                                                        <option value="1">
                                                            Subject
                                                        </option>
                                                        <option value="1">
                                                          Doming
                                                        </option>
                                                        <option value="1">
                                                            Hosting
                                                        </option>
                                                        <option value="1">
                                                          VPS Hosting
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Messages"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                            <div class="form-check d-flex gap-2 from-customradio">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault12">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Collaboratively formulate principle capital. Progressively evolve user 
                                                </label>
                                            </div>
                                            <button type="submit" class="theme-btn">
                                                Submit Now <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('layouts.footer')