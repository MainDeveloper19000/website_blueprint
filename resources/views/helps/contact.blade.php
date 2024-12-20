@include('layouts.header')

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
                        {{--  --}}
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

{{-- this 2 modal can hiiden because we don't have login and register --}}

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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
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
                        Contact Us
                    </li>
                </ul>
            </div>
            {{-- <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                <img src="assets/img/breadcrumb.png" alt="img">
            </div> --}}
        </div>
    </div>
</div>

<!-- Choose Us Section Start -->
<section class="choose-us-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="style-border wow fadeInUp">Our Contact</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">our Premium Contact</h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="choose-us-card-items">
                    <div class="icon">
                       <i class="fas fa-home"></i>
                    </div>
                    <div class="content">
                        <h3>Our Address</h3>
                        <p>
                            #Home C-299 St Boeung Torteung Thngai2, Chrouy Changva District, Khan Chrouy Changva, Phnom Penh
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="choose-us-card-items">
                    <div class="icon">
                         <i class="fas fa-comment"></i>
                    </div>
                    <div class="content">
                        <h3>Email us for any kind of query</h3>
                        <p>
                            <a href="info@masterchat.io">info@masterchat.io</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="choose-us-card-items">
                    <div class="icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="content">
                        <h3>Talk to sale team</h3>
                        <p>
                            <a href="tel: +85516415111">+85516 415 111</a><br>
                             <a href="tel: +85561888132">+85561888132
</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Contact Section Start >>-->
<section class="contact-section fix section-padding pt-0">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Request a <br> Consultation</h2>
                        <div class="contact-image wow fadeInUp" data-wow-delay=".5s">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right">
                        <h3 class="wow fadeInUp">Get in Touch</h3>
                        <form action="{{ route('contact.send') }}" id="contact-form" method="POST"
                            class="contact-form-items">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <input type="text" name="phone" id="phone"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <div class="category-oneadjust">
                                            <select name="cate" class="category">
                                                 <option value="1">
                                                    ---Please Select A Platform---
                                                </option>
                                                <option value="1">
                                                    Bitrix 24
                                                </option>
                                                <option value="2">
                                                    Respond.io
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <b>
                                        <p style="color: red">Detail in Comments</p>how can we help you?
                                    </b>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Comment:"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                    
                                    <button type="submit" class="theme-btn">
                                        Submit Now <i class="fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        {{-- Alert after Send --}}

                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const form = document.querySelector('.contact-form-items');
                                // handle section 
                                form.addEventListener('submit', function(event) {
                                    event.preventDefault();

                                    // Show SweetAlert confirmation
                                    
                                    Swal.fire({
                                        title: 'Thank you!',
                                        text: 'We have received your information.We will contact you soon',
                                        icon: 'success',
                                    }).then((result) => {
                                        // If the user clicks "OK", proceed with form submission
                                        if (result.isConfirmed) {
                                            form.submit();
                                            form.reset();
                                        }
                                    });
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--<< Footer Section Start >>-->
@include('layouts.footer')
