<header class="header-section-1">
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ url('/') }}" class="header-logo">
                                <img src="assets/img/logo/logogogogogoggogo.png" alt="logo-img" height="70px">
                            </a>
                            <a href="{{ url('/') }}" class="header-logo-2">
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
                                            <a href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('product.bitrix24') }}">
                                                Bitrix24
                                            </a>
                                        </li>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('product.respond') }}">
                                                Respond.io

                                            </a>

                                        </li>

                                        {{-- navigation for mobile-menu --}}
                                        <li class="has-dropdown active d-xl-none">
                                            <a href="{{ url('/') }}" class="border-none">
                                                Home
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">

                                            <a href="{{ route('product.bitrix24') }}" class="border-none">
                                                Bitrix24
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <a href="{{ route('product.respond') }}" class="border-none">
                                                Respond.io
                                                <i class="fas fa-angle-down"></i>
                                            </a>

                                        </li>

                                        <li>
                                            <a href="#">
                                                Partnerships
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('partnerships.bitrix24') }}">Bitirx24 
                                                        Partner</a></li>
                                                <li><a href="{{ route('partnerships.respond') }}">Respond.io
                                                        Partner</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Help Center
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                {{-- <li><a href="{{ route('help_center.faq') }}">Faq</a></li> --}}
                                                <li><a href="{{ route('help_center.about') }}">About</a></li>
                                                <li><a href="{{ route('help_center.support') }}">Support</a></li>
                                                <li><a href="{{ route('help_center.contact') }}">Contact Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    {{-- End --}}
                                </nav>
                            </div>
                        </div>
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                        <div class="header-button">
                            <a href="{{ route('help_center.contact') }}" class="theme-btn">
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
