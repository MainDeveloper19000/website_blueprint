@include('layouts.header')
    <body>

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
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Gold Partner</h1>
                        <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="index.html">
                                    En Bit24, somos expertos en Bitrix24, un CRM para administrar y gestionar clientes,<br>
                                     así como funciones de automatización de marketing que impulsarán tu negocio.
                                </a>
                            </li>
                        </ul>
                        <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="index.html">
                                    Trabajamos estrechamente contigo para adaptar Bitrix24 a las necesidades específicas de tu empresa,<br>
                                     asegurando una experiencia fluida y eficiente.


                                </a>
                            </li>
                        </ul>
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
                                Bitrix24 Gold Partner
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="{{asset('assets/img/bitrix24/bitrix24.webp')}}">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Certificate Gold Partner-->
        <section class="about-section section-padding fix">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <div class="about-sub">
                                    Certificate Gold Partner
                                </div>
                                <div class="shape-image">
                                    <img src="assets/img/about/shape.png" alt="img">
                                </div>
                                <div class="about-image-1 wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="{{asset('assets/img/bitrix24/Bitrix_Gold.png')}}">
                                    {{-- <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                        <img src="{{asset('assets/img/bitrix24/header.png')}}">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Bitrix24 Partner</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s"> Gold Partner</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    We help organizations achieve their goals by offering fast solutions and consulting services for process automation and customer relationship management. We are the largest and experienced company in the Mongolian market as a certified Gold Partner. To date, we have successfully completed over 30 projects in various business sectors. We also integrate Bitrix24 with third-party systems based on our clients' requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Expert Solutions -->
        <section class="feature-hosting-section fix section-padding section-bg">
            <div class="container">
                <div class="feature-content-warpper style-2">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="feature-hosting-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Expert Solutions</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Achieving Organizational Goals with Expert Solutions</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    We help organizations achieve their goals by offering fast solutions and consulting services for process automation and customer relationship management. We are the largest and experienced company in the Cambodia market as a certified Silver Partner. To date, we have successfully completed over 30 projects in various business sectors. We also integrate Bitrix24 with third-party systems based on our clients' requirements.
                                </p>
                                {{-- <div class="list-items">
                                    <ul class="wow fadeInUp" data-wow-delay=".3s">
                                        <li>
                                            <i class="far fa-check"></i>
                                            Branding and design Identity 
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
                                <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i class="fas fa-long-arrow-alt-right"></i> 
                                </a> --}}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="feature-hosting-image-2">
                                <div class="icon-box-1">
                                    <img src="assets/img/hosting/icon-1.png" alt="img">
                                </div>
                                <div class="icon-box-2">
                                    <img src="assets/img/hosting/icon-3.png" alt="img">
                                </div>
                                Achieving
                                <div class="thumb">
                                    <img src="{{asset('assets/img/bitrix24/Flying.webp')}}">   
                                    {{-- <img src="assets/img/Flying.webp" alt="img"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

        <!-- Automation -->
        <section class="feature-hosting-section fix section-padding">
            <div class="container">
                <div class="feature-content-warpper margin-top-60">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                            <div class="feature-hosting-image">
                                <img src="{{asset('assets/img/bitrix24/Automation.jpg')}}">
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-hosting-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Automation</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Comprehensive Process Automation</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Our expertise in process automation ensures that your business operations run smoothly and efficiently. By automating repetitive tasks, we help you save time and reduce errors, allowing your team to focus on more strategic activities. Our tailored solutions are designed to meet the unique needs of each client, ensuring maximum efficiency and productivity.
                                </p>
                                {{-- <div class="list-items">
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
                                </div> --}}
                                {{-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i class="fas fa-long-arrow-alt-right"></i> 
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Customer Relationship Management (CRM) -->
        <section class="hosting section-padding fix">
            <div class="container">
                <div class="hosting-wrapper">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="hosting-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">CRM</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Customer Relationship Management (CRM)</h2>
                                </div>
                                <div class="hosting-items wow fadeInUp mt-4 mt-md-0" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="{{asset('assets/img/bitrix24/icon_crm.png')}}">
                                        {{-- <img src="assets/img/hosting/icon-9.png" alt="img">                                           --}}
                                    </div>
                                    <div class="content">
                                        <h4>Customer Relationship Management (CRM)</h4>
                                        <p>Effective customer relationship management is crucial for any business looking to grow and retain its customer base. Our CRM solutions help you manage customer interactions, track sales, and analyze data to make informed decisions. With our CRM services, you can improve customer satisfaction, increase sales, and build long-lasting relationships with your clients.</p>
                                    </div>
                                </div>
                                {{-- <div class="hosting-items wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon">
                                        <img src="assets/img/hosting/icon-10.png" alt="img">                                          
                                    </div>
                                    <div class="content">
                                        <h4>Better Security and faster Server</h4>
                                        <p>Cursus libero sit amet ultrices. Nullam sit amet ornare neque duis vitae congue ante, nec tempus quam. Donec non.</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                            <div class="hosting-image">
                                <img src="{{asset('assets/img/bitrix24/crm.webp')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Proven Track Record -->
         <section class="feature-hosting-section fix section-padding">
            <div class="container">
                <div class="feature-content-warpper margin-top-60">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                            <div class="feature-hosting-image">
                                <img src="{{asset('assets/img/bitrix24/Proven.jpg')}}">
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-hosting-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Proven Track Record</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Proven Track Record</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    With over 30 successful projects across various business sectors, our track record speaks for itself. Our clients range from small businesses to large enterprises, and we have helped them achieve their goals through our innovative solutions. Our experience and expertise make us the go-to partner for organizations looking to enhance their operations and customer relationships.
                                </p>
                                {{-- <div class="list-items">
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
                                </div> --}}
                                {{-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i class="fas fa-long-arrow-alt-right"></i> 
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Integration -->
        <section class="hosting section-padding fix">
            <div class="container">
                <div class="hosting-wrapper">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="hosting-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Integration</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Seamless Integration with Bitrix24</h2>
                                </div>
                                <div class="hosting-items wow fadeInUp mt-4 mt-md-0" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="{{asset('assets/img/bitrix24/icon_crm.png')}}">
                                        {{-- <img src="assets/img/hosting/icon-9.png" alt="img">                                           --}}
                                    </div>
                                    <div class="content">
                                        <h4>Integration</h4>
                                        <p>We understand that every business has unique requirements, which is why we offer seamless integration of Bitrix24 with third-party systems. Whether you need to connect your CRM with your accounting software or integrate your project management tools, we have the skills and experience to make it happen. Our integration services ensure that all your systems work together harmoniously, providing you with a unified platform to manage your business.
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="hosting-items wow fadeInUp" data-wow-delay=".7s">
                                    <div class="icon">
                                        <img src="assets/img/hosting/icon-10.png" alt="img">                                          
                                    </div>
                                    <div class="content">
                                        <h4>Better Security and faster Server</h4>
                                        <p>Cursus libero sit amet ultrices. Nullam sit amet ornare neque duis vitae congue ante, nec tempus quam. Donec non.</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                            <div class="hosting-image">
                                <img src="{{asset('assets/img/bitrix24/app.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <!-- Why Choose Us? -->
         <section class="faq-section fix section-padding pt-0">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="faq-image">
                                
                                <img src="{{asset('assets/img/bitrix24/question-icon.png')}}">
                                {{-- <img src="assets/img/faq.png" alt="img"> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Why Choose Us?</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Why Choose Us?
                                    </h2>
                                </div>
                                <div class="faq-accordion mt-4 mt-md-0">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                    Expertise
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    As a certified Silver Partner, we have the knowledge and experience to deliver top-notch solutions.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                    DCustomization
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We tailor our services to meet the specific needs of each client. 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    Support
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Our team is always available to provide ongoing support and ensure your systems run smoothly.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Innovation
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    We stay up-to-date with the latest trends and technologies to offer cutting-edge solutions.
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

         <!-- Choose Us Section Start -->
        {{-- <section class="choose-us-section-2 pt-100 pb-100 margin-top-5">
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
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
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
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
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
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
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
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Team Section Start -->


        {{-- <section class="team-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-border wow fadeInUp">Our Expart</span>
                    <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our expert team</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/01.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Darlene Robertson</a></h5>
                               <p>Web Designer</p>
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
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/02.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Leslie Alexander</a></h5>
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
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/03.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Ralph Edwards</a></h5>
                               <p>President of Sales</p>
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
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/04.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Kristin Watson</a></h5>
                               <p>Software Tester</p>
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
        </section> --}}

        <!-- Choose Us Section Start -->
        {{-- <section class="choose-us-section fix section-padding bg-cover" style="background-image: url('assets/img/feature-bg.jpg');">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-border-white text-white wow fadeInUp">Why choose uS</span>
                    <h2 class="mb-3 text-white wow fadeInUp" data-wow-delay=".3s">Why Choose Hostech</h2>
                    <p class="text-white wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa </p>
                </div>
                <div class="choose-us-top-inner style-2">
                    <ul>
                        <li class="wow fadeInUp" data-wow-delay=".2s">Step One</li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">Step Two</li>
                        <li class="wow fadeInUp" data-wow-delay=".6s">Step Three</li>
                        <li class="wow fadeInUp" data-wow-delay=".8s">Step Four</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-card-items style-2">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-5.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Bay a Domain</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-us-card-items style-2">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-6.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Find the Right Hosting</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="choose-us-card-items style-2">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-7.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Add Professional Email</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="choose-us-card-items style-2">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-8.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Boost Performance</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Client Success Stories -->
        <section class="cta-contact-section">
            <div class="container">
                <div class="cta-contact-wrapper mb-0">
                    <div class="cta-contact-image wow fadeInUp">
                        <img src="{{asset('assets/img/bitrix24/icon_userstory.png')}}">
                    </div>
                    <div class="section-title mb-0">
                        <span class="white-text wow fadeInUp">Client Success</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Client Success Stories</h2>
                        <span class="white-text wow fadeInUp">Our clients have seen significant improvements in their operations and customer relationships after working with us. For example, a retail company we worked with was able to streamline their inventory management and improve customer satisfaction by implementing our CRM solution. Another client, a financial services firm, saw a 20% increase in productivity after automating their internal processes.</span>
                    </div>
                    
                    {{-- <a href="contact.html" class="theme-btn bg-color-2 mt-xl-5 wow fadeInUp" data-wow-delay=".5s">Talk to a Specialist <i class="fas 
                        fa-long-arrow-alt-right"></i></a> --}}
                </div>
            </div>
        </section>
         <!-- Get Started Today -->
         <section class="feature-hosting-section fix section-padding">
            <div class="container">
                <div class="feature-content-warpper style-2">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="feature-hosting-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Get Started Today</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Get Started Today</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Ready to take your business to the next level? Contact us today to learn more about our services and how we can help you achieve your goals. Our team of experts is here to provide you with the solutions you need to succeed in today's competitive market.
                                </p>
                                <br>
                                <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Get Started <i class="fas fa-long-arrow-alt-right"></i> 
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="feature-hosting-image-2">
                                <div class="icon-box-1">
                                    <img src="assets/img/hosting/icon-1.png" alt="img">
                                </div>
                                <div class="icon-box-2">
                                    <img src="assets/img/hosting/icon-3.png" alt="img">
                                </div>
                                <div class="thumb">
                                    <img src="assets/img/gym-man.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonia Section Start -->
        <section class="testimonial-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-border wow fadeInUp">Testimonials</span>
                    <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Impressions & Feedback</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa </p>
                </div>
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card-items-2">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/client-5.jpg');"></div>
                                    <div class="content">
                                        <h4>Ronald Richards</h4>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                                <p>
                                    Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan felis sed.
                                </p>
                                <div class="client-bottom">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <img src="assets/img/testimonial/wpbeginner-dark.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items-2">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/client-6.jpg');"></div>
                                    <div class="content">
                                        <h4>Esther Howard</h4>
                                        <span>President of Sales</span>
                                    </div>
                                </div>
                                <p>
                                    Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan felis sed.
                                </p>
                                <div class="client-bottom">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <img src="assets/img/testimonial/hostadvice-dark.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-items-2">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/client-7.jpg');"></div>
                                    <div class="content">
                                        <h4>Courtney Henry</h4>
                                        <span>Nursing Assistant</span>
                                    </div>
                                </div>
                                <p>
                                    Praesent ut lacus a velit tincidunt aliquam a eget urna. Sed ullamcorper tristique nisl at pharetra turpis accumsan et etiam eu sollicitudin eros. In imperdiet accumsan felis sed.
                                </p>
                                <div class="client-bottom">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <img src="assets/img/testimonial/capterra.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-click-text wow fadeInUp" data-wow-delay=".3s">
                    <p>Explore more testimonials by</p>
                    <a href="contact.html"> Click Here</a>
                </div>
            </div>
        </section>

        <!--<< Footer Section Start >>-->
        @include('layouts.footer')