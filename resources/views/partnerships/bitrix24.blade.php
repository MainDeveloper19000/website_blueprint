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
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets\img\logo\logogogogo.png') }}" alt="logo-img">
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

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="page-header-left">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s" style="color: silver">Silver Partner</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ url('/') }}">
                                Bitrix24 is an online workspace designed to bring people, tools, and information in your
                                company together in the most intuitive and productive way.
                            </a>
                        </li>
                    </ul>
                    {{-- <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="{{ url('/') }}">
                                    Trabajamos estrechamente contigo para adaptar Bitrix24 a las necesidades específicas de tu empresa,<br>
                                     asegurando una experiencia fluida y eficiente.


                                </a>
                            </li>
                        </ul> --}}
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-regular fa-chevrons-right"></i>
                        </li>
                        <li>
                            Bitrix24 Silver Partner
                        </li>
                    </ul>
                </div>
                <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                    <img src="{{ asset('assets/img/bitrix24/bitrix24.webp') }}">
                </div>
            </div>
        </div>
    </div>

    <!-- Certificate Silver Partner-->
    <section class="about-section section-padding fix">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="about-sub">
                                Certificate Silver Partner
                            </div>
                            <div class="shape-image">
                                <img src="assets/img/about/shape.png" alt="img">
                            </div>
                            <div class="about-image-1 wow fadeInLeft" data-wow-delay=".3s">
                                <img src="{{ asset('assets/img/silver_partner.png') }}">
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
                                <h2 class="wow fadeInUp" data-wow-delay=".3s"> Silver Partner</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                As a proud Silver Partner of Bitrix24, we help organizations achieve their goals by
                                offering fast solutions and consulting services for process automation and customer
                                relationship management (CRM). We are the largest and most experienced company in the
                                Cambodian market as a certified Silver Partner. To date, we have successfully completed
                                over 10 projects in various business sectors. We also integrate Bitrix24 with
                                third-party systems based on our clients' requirements.
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
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Achieving Organizational Goals with
                                    Expert Solutions</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                We help organizations achieve their goals by offering fast solutions and consulting
                                services for process automation and customer relationship management. We are the largest
                                and experienced company in the Cambodia market as a certified Silver Partner. To date,
                                we have successfully completed over 30 projects in various business sectors. We also
                                integrate Bitrix24 with third-party systems based on our clients' requirements.
                            </p>
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
                                <img src="{{ asset('assets\img\Bitrix_Partnership_pic_icon\Partner_pic_icon\new_office_moc.png') }}">
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
                            <img src="{{ asset('assets\img\Bitrix_Partnership_pic_icon\Partner_pic_icon\cloudman-10.png') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Automation</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Comprehensive Process Automation</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Our expertise in process automation ensures that your business operations run smoothly
                                and efficiently. By automating repetitive tasks, we help you save time and reduce
                                errors, allowing your team to focus on more strategic activities. Our tailored solutions
                                are designed to meet the unique needs of each client, ensuring maximum efficiency and
                                productivity.
                            </p>                       
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
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Customer Relationship Management (CRM)
                                </h2>
                            </div>
                            <div class="hosting-items wow fadeInUp mt-4 mt-md-0" data-wow-delay=".5s">
                                <div class="icon">
                                    
                                    <img src="assets/img/hosting/icon-9.png" alt="img">
                                </div>
                                <div class="content">
                                    <h4>Customer Relationship Management (CRM)</h4>
                                    <p>Effective customer relationship management is crucial for any business looking to
                                        grow and retain its customer base. Our CRM solutions help you manage customer
                                        interactions, track sales, and analyze data to make informed decisions. With our
                                        CRM services, you can improve customer satisfaction, increase sales, and build
                                        long-lasting relationships with your clients.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="hosting-image">
                            <img src="{{ asset('assets\img\Bitrix_Partnership_pic_icon\Partner_pic_icon\cloudman-13.png') }}">
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
                            <img src="{{ asset('assets\img\Bitrix_Partnership_pic_icon\Partner_pic_icon\cloudman-04.png') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Proven Track Record</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Proven Track Record</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                With over 30 successful projects across various business sectors, our track record
                                speaks for itself. Our clients range from small businesses to large enterprises, and we
                                have helped them achieve their goals through our innovative solutions. Our experience
                                and expertise make us the go-to partner for organizations looking to enhance their
                                operations and customer relationships.
                            </p>                    
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
                                    <img src="{{ asset('assets/img/bitrix24/icon_crm.png') }}">
                                    {{-- <img src="assets/img/hosting/icon-9.png" alt="img">                                           --}}
                                </div>
                                <div class="content">
                                    <h4>Integration</h4>
                                    <p>We understand that every business has unique requirements, which is why we offer
                                        seamless integration of Bitrix24 with third-party systems. Whether you need to
                                        connect your CRM with your accounting software or integrate your project
                                        management tools, we have the skills and experience to make it happen. Our
                                        integration services ensure that all your systems work together harmoniously,
                                        providing you with a unified platform to manage your business.
                                    </p>
                                </div>
                            </div>                       
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="hosting-image">
                            <img src="{{ asset('assets/img/bitrix24/app.jpg') }}">
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

                            <img src="{{ asset('assets\img\Bitrix_Partnership_pic_icon\Partner_pic_icon\cloudman-16.png') }}" style="width: 600px">
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                Expertise
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                As a certified Silver Partner, we have the knowledge and experience to
                                                deliver top-notch solutions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Customization
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We tailor our services to meet the specific needs of each client.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3"
                                                aria-expanded="false" aria-controls="faq3">
                                                Support
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Our team is always available to provide ongoing support and ensure your
                                                systems run smoothly.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4"
                                                aria-expanded="false" aria-controls="faq4">
                                                Innovation
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We stay up-to-date with the latest trends and technologies to offer
                                                cutting-edge solutions.
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
