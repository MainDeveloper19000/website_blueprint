<header class="header-section-1">
    {{-- <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="list">
                    <li><i class="fa-light fa-user"></i>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            Login
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{url('/')}}" class="header-logo">
                                <img src="assets/img/logo/logogogogo.png" alt="logo-img" height="70px">
                            </a>
                            <a href="{{url('/')}}" class="header-logo-2">
                                <img src="assets/img/logo/logogogogo.png" alt="logo-img" height="70px">
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
                                            </a>                                  
                                        </li>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{route('product.bitrix24')}}">
                                                Bitrix24
                                                {{-- <i class="fas fa-angle-down"></i> --}}
                                            </a>
                                            {{-- <ul class="submenu has-homemenu has-menu-home">
                                                <li class="border-none">
                                                    <div class="homemenu-items">
                                                        <div class="homemenu-list">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/bitrix24.png" alt="img" height="35px" height="35px">
                                                                    
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{route('product.bitrix24')}}">Bitrix24</a></h6>
                                                                <p>
                                                                    Bitrix24. Your ultimate workspace.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-list">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/respond.png" alt="img"  height="35px" height="35px" >
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{route('product.respond')}}"> Respond.io</a></h6>
                                                                <p>
                                                                    AI-Powered Customer Conversation.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{route('product.respond')}}">
                                                Respond.io
                                                {{-- <i class="fas fa-angle-down"></i> --}}
                                            </a>
                                            {{-- <ul class="submenu has-homemenu has-menu-home">
                                                <li class="border-none">
                                                    <div class="homemenu-items">
                                                        <div class="homemenu-list">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/bitrix24.png" alt="img" height="35px" height="35px">
                                                                    
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{route('product.bitrix24')}}">Bitrix24</a></h6>
                                                                <p>
                                                                    Bitrix24. Your ultimate workspace.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-list">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/respond.png" alt="img"  height="35px" height="35px" >
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{route('product.respond')}}"> Respond.io</a></h6>
                                                                <p>
                                                                    AI-Powered Customer Conversation.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="has-dropdown menu-thumb">
                                            <a href="#">
                                                Industries
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu">
                                                <li class="border-none">
                                                    <div class="homemenu-items">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/edu_icon.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.educatione')}}">  Education</a></h6>
                                                                        <p>
                                                                            Student Intake with Respond.io
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/icon_ecomerce.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.ecommerces')}}">  Ecommerce</a></h6>
                                                                        <p>
                                                                            Close More with Chat Commerce
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/retail_icon.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.retailes')}}">  O2O / Retail</a></h6>
                                                                        <p>
                                                                            Enhancing Retail with Online Chat
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/icon_Hospitality.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.hospital')}}">  Hospitality</a></h6>
                                                                        <p>
                                                                            Deliver 5-Star Guest Experiences
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/Automotive_icon.jpg')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.automotives')}}">  Automotive</a></h6>
                                                                        <p>
                                                                            Shift customer journeys.....
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/icon_Healthcare.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.healthcares')}}">  Healthcare</a></h6>
                                                                        </h6>
                                                                        <p>
                                                                            Healthier patient engagements...
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/icon_Recruitment.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.recruitmente')}}">  Recruitment</a></h6>
                                                                        <p>
                                                                            Get the job done over chat
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/icon_saas.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.it&saas')}}">  IT & SaaS</a></h6>
                                                                        <p>
                                                                            Crack the communication code
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="{{asset('assets/img/menu-icon/icon_Other.png')}}" alt="img" height="35px" height="35px">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('industries.others')}}">  Other</a></h6>
                                                                        <p>
                                                                           More Experience!
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li> --}}


                                        {{-- navigation for mobile-menu --}}


                                        <li class="has-dropdown active d-xl-none">
                                            <a href="{{url('/')}}" class="border-none">
                                                Home
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            {{-- <a href="#" class="border-none">
                                                Products
                                                <i class="fas fa-angle-down"></i>
                                            </a> --}}
                                            <a href="{{route('product.bitrix24')}}" class="border-none">
                                                Bitrix24
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <a href="{{route('product.respond')}}" class="border-none">
                                                Respond.io
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            {{-- <ul class="submenu">
                                                <li><a href="{{route('product.bitrix24')}}">Bitrix 24</a></li>
                                                <li><a href="{{route('product.respond')}}">Respond.io</a></li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="has-dropdown menu-thumb">
                                            <a href="{{url('/')}}">
                                                Service
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu has-menu-hosting">
                                                <li class="border-none">
                                                    <div class="homemenu-items">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/share-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('service.software_consultantes')}}">  Software Consultant</a></h6>
                                                                        <p>
                                                                            About hostech
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/reseller-shost.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('service.service_centers')}}">  Service Center</a></h6>
                                                                        <p>
                                                                            Excellent Offer
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/dedicated-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('service.it_maintanances')}}">  IT Maintanance</a></h6>
                                                                        <p>
                                                                            Flexible Plans
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/vps-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('service.crm_train')}}">  CRM Training</a></h6>
                                                                        </h6>
                                                                        <p>
                                                                            Flexible Plans
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/wordpress-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('service.onboarding_programe')}}">  Onboarding Program</a></h6>
                                                                        <p>
                                                                            Best Provider
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/cloud-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{route('service.other_servic')}}">  Other Service</a></h6>
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
                                        </li> --}}
                                        {{-- <li class="has-dropdown active d-xl-none">
                                            <a href="team.html" class="border-none">
                                                Industries
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{route('industries.educatione')}}">Education</a></li>
                                                <li><a href="{{route('industries.ecommerces')}}">Ecommerce</a></li>
                                                <li><a href="{{route('industries.retailes')}}">Retail</a></li>
                                                <li><a href="{{route('industries.hospital')}}">Hospital</a></li>
                                                <li><a href="{{route('industries.automotives')}}">Automotive</a></li>
                                                <li><a href="{{route('industries.healthcares')}}">Healthcare</a></li>
                                                <li><a href="{{route('industries.recruitmente')}}">Recruitment</a></li>
                                                <li><a href="{{route('industries.it&saas')}}">IT&SaaS</a></li>
                                                <li><a href="{{route('industries.others')}}">Other</a></li>
                                            </ul>
                                        </li> --}}
                                        <li>
                                            <a href="#">
                                                Partnerships
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{route('partnerships.bitrix24')}}">  Bitirx24 Gold Partner</a></li>
                                                <li><a href="{{route('partnerships.respond')}}">Respond.io Gold Partner</a></li>                           
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Help Center
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                            
                                                <li><a href="{{route('help_center.about')}}">About</a></li>
                                                <li><a href="{{route('help_center.support')}}">Support</a></li>
                                                <li><a href="{{route('help_center.contact')}}">Contact Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    {{-- End --}}
                                </nav>
                            </div>
                        </div>
                        {{-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a> --}}
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                        <div class="header-button">
                            <a href="{{route('help_center.contact')}}" class="theme-btn">
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