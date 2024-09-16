@include('layouts.header')

<body>
    <!-- Preloader Start -->
    @include('layouts.preload')
    <!--<< Mouse Cursor Start >>-->
    {{-- <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div> --}}
    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets\img\logo\logogogogo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Blueprint Technology is offers solutions for business process optimization and digital
                        transformation, enhancing customer engagement, streamlining workflows, and improving efficiency
                        through platform implementation and customization
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
    <section class="hero-section hero-1 bg-cover fix" style="background-image: url('assets/img/hero/hero-bg-1.jpg');">
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
        <div class="hero-social">
            <span>Follow on</span>
            <a href="https://www.facebook.com/MasterChat.io" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/masterchatio/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://t.me/masterchattalk" target="_blank"><i class="fab fa-telegram"></i></a>
            {{-- <a href="#"><i class="fab fa-tiktok"></i></a> --}}
            <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFD_WmOPLc-PgAAAZGnSkxwXvK-z5JPmQWOM_ITt_WR6kYmyEHWZUJwCXvmlftvcx_wf3ptYKti8ZFiJsZgVJQLbo6aGP3ndX2ju7C-p5GBPth0G-fpHf9I8BIS7hf8DjlKBqo=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fmasterchat-io-618641252%2F"
                target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/@masterchatio" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="sub-text wow fadeInUp">
                            <img src="assets/img/hero/activity.png" alt="img" class="me-2">
                            Everything You Need to Growth Up Your Business
                        </span>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s" style="font-size: 48">
                            Empower all Cambodian SMEs with Our Innovative Solutions
                        </h1>
                        <h6 class="wow fadeInUp" data-wow-delay=".5s">Simplify Your Operations and Boost Efficiency
                        </h6>
                        <div class="hero-author">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets/img/logo/logopenguin3d.png" alt="img" width="800px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doming-name-area section-padding pt-0">
        <div class="container">
        </div>
    </section>
    <br id="aboutmission">
    <br><br><br>
    <!-- About Company -->
    <section class="hosting-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    {{--  <span class="wow fadeInUp">Best hosting</span> --}}
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">About Our Company
                    </h2>
                </div>
            </div>
            <div class="row">
                <p style="font-size: 24px">Blueprint Technology is offers solutions for business process optimization
                    and <b>digital
                        transformation, enhancing customer engagement, streamlining workflows</b>, and improving
                    efficiency
                    through platform implementation and customization.</p>
            </div>
        </div>
    </section>
    {{-- Mission and Vision --}}
    <section class="contact-section fix section-bg section-padding">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Vision and Mission </h2>
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h3 class="wow fadeInUp">Our Mission</h3>
                            <p style="font-size: 26px; font-weight: 500;color: black;">"Building sustainable and stable
                                success, together. Empowers Cambodian SMEs with
                                impactful software solutions, driving economic growth, creating jobs, and supporting
                                SMEs by transforming their business from traditional to a new digital technology."</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h3 class="wow fadeInUp">Our Vision</h3>
                            <p style="font-size: 26px; font-weight: 500;color: black;">"To become Cambodia's leading
                                software partner: Together to build a better Cambodia digital
                                future."<br><br><br><br><br></p>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-right">
                            <center>
                                <h3 class="wow fadeInUp">Partnering With Us</h3>
                            </center>
                            <p style="font-size: 20px; font-weight: 500;color: black;">By partnering with us, you gain
                                access to a team of experts dedicated to helping your business thrive in the digital
                                age. We are committed to delivering solutions that drive growth, enhance efficiency, and
                                improve customer satisfaction. Let us help you transform your business and achieve your
                                goals with our comprehensive digital solutions.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Mission and Vision --}}
    <!-- Hosting Section Start -->
    <br>
    <br>
    <link rel="stylesheet" href="{{ 'assets/css/custom.css' }}">
    <section class="hosting-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Our Services</h2>
                </div>
            </div>
            <div class="row g-4"> <!-- 'g-4' adds gap between columns -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets/img/Icon_home_Services/implementation_icon.png') }}"
                                alt="implementation_icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#">Bitrix24 Implementation and Setup</a></h3>
                            <p>
                                Tailoring Bitrix24 to meet specific business needs, including CRM, project management,
                                HR, and communication tools. We ensure that each implementation is customized to align
                                with the unique requirements of your business, facilitating smoother operations and
                                better management.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets/img/Icon_home_Services/Training_icon.png') }}"
                                alt="Training_icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#">User Training and Support</a></h3>
                            <p>
                                Offering in-depth training and ongoing technical support to ensure effective use of
                                Bitrix24 and respond.io. Our training programs are designed to empower your team with
                                the knowledge and skills needed to maximize the potential of these platforms. We provide
                                continuous support to address any technical issues and ensure seamless operation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets/img/Icon_home_Services/Customize_icon.png') }}"
                                alt="Customize_icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#">Customization and Development</a></h3>
                            <p>
                                Developing custom applications and integrations to extend platform functionalities. Our
                                team of experts works closely with clients to understand their specific needs and
                                develop tailored solutions that enhance the capabilities of Bitrix24 and respond.io,
                                ensuring that the platforms evolve with your business.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets/img/Icon_home_Services/omnichannel_icon.png') }}"
                                alt="omnichannel_icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#"> Omnichannel Customer Engagement</a></h3>
                            <p>
                                Creating strategies for engaging customers across multiple channels using respond.io. We
                                help businesses build a cohesive customer engagement strategy that leverages various
                                communication channels, ensuring consistent and personalized interactions with
                                customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets/img/Icon_home_Services/chat-bot-icon.png') }}"
                                alt="chat-bot-icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#"> Chatbot Development</a></h3>
                            <p>
                                Building and managing custom chatbots for automated customer support. Our chatbots are
                                designed to handle a wide range of customer inquiries, providing quick and efficient
                                responses that improve customer satisfaction and reduce the workload on your support
                                team.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets/img/Icon_home_Services/hardware-icon.png') }}"
                                alt="hardware-icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#">Hardware</a></h3>
                            <p>
                                Provides a comprehensive solution for managing IT infrastructure. The provider begins by
                                evaluating your existing hardware to identify what needs replacing or upgrading. They
                                then match your needs with their available hardware, creating a plan that aligns with
                                your business goals and security standards. New hardware is delivered and installed,
                                with the provider also handling the return and disposal of old equipment. Regular
                                maintenance, updates, and repairs, including warranty issues, are managed by the
                                provider.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="brand-section pt-100 pb-0" id="brandsection">
        <div class="container">
            <div class="swiper brand-slider bor-bottom pb-100 pt-0">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Trusted By 100+ Companies</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Who Trusted Us<br></h2>
                    <p>Contact us today to learn more about how our team can we help your business!</p>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard1.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard2.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard3.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard4.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard5.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard6.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard7.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard8.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard9.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard10.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard11.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard12.png" alt="img" height="80">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/client_logo/Artboard13.png" alt="img" height="80">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    {{-- <link rel="stylesheet" href="{{ 'assets/css/custom.css' }}"> --}}
    <section class="hosting-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s"> Why Choose Us?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets\img\Icon_home_ChooseUs\comprehensive_icon.png') }}"
                                alt="comprehensive_icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#">Comprehensive Services</a></h3>
                            <p style="text-align: justify; font-size: 16px">
                                From initial setup and customization to ongoing support and optimization, we offer a
                                full range of services to ensure you get the most out of respond.io.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets/img/Icon_home_ChooseUs/Tailored_icon.png') }}"
                                alt="Tailored_icon" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#">Tailored Strategies</a></h3>
                            <p style="text-align: justify; font-size: 16px">
                                We understand that every business is unique. We work closely with you to develop
                                strategies that align with your goals and enhance your customer interactions.
                            </p>
                        </div>
                    </div>
                </div><br>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hosting-inner-items responsive-style"
                        style="background-image: url('assets/img/hosting/card-bg.png');">
                        <div class="icon">
                            <img src="{{ asset('assets\img\Icon_home_ChooseUs\Continuous_icon.png') }}"
                                alt="Continuous_icon.png" width="50px">
                        </div>
                        <div class="content">
                            <h3><a href="#"> Continuous Improvement</a></h3>
                            <p style="text-align: justify; font-size: 16px">
                                Our partnership with respond.io means we stay updated with the latest features and best
                                practices, ensuring your solutions are always ahead of the curve.
                            </p>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </section>
    {{-- Mission and Vision --}}
    <section class="contact-section fix section-bg section-padding">
        <div class="container">
            {{-- <h2 class="wow fadeInUp" data-wow-delay=".3s">Vision and Mission </h2> --}}
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="contact-right">
                            <center>
                                <h3 class="wow fadeInUp">Let’s Elevate Your Customer Engagement</h3>
                            </center>
                            <p style="font-size: 20px; font-weight: 500;color: black;">By partnering with us, you gain
                                Partnering with us means you’re choosing a team that is recognized for excellence and
                                committed to your success. Whether you’re looking to streamline your communication
                                channels, automate customer support, or gain deeper insights through analytics, we have
                                the expertise to make it happen.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Mission and Vision --}}
    <!-- Client Success Stories -->
    <section class="cta-contact-section">
        <div class="container">
            <div class="cta-contact-wrapper mb-0">
                <div class="cta-contact-image wow fadeInUp">
                    <img src="{{ asset('assets/img/bitrix24/icon_userstory.png') }}">
                </div>
                <div class="section-title mb-0">
                    <span class="white-text wow fadeInUp">Client Success</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Client Success Stories</h2>
                    <span class="white-text wow fadeInUp">
                        <P>- Client A : An e-commerce leader saw a 30% increase in sales conversions after implementing
                            our customized CRM and marketing automation solutions.</P>
                        <P>- Client B: A healthcare provider reduced appointment no-shows by 25% through our automated
                            scheduling and follow-up system.</P>
                        <P>- Client C: A financial services firm improved client satisfaction scores by 20% after
                            optimizing their customer engagement strategies with our help.</P>


                    </span>
                </div>

                {{-- <a href="contact.html" class="theme-btn bg-color-2 mt-xl-5 wow fadeInUp" data-wow-delay=".5s">Talk to a Specialist <i class="fas 
                        fa-long-arrow-alt-right"></i></a> --}}
            </div>
        </div>
    </section>
    <br>
    @include('layouts.footer')
