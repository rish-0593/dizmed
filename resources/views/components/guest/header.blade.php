<header class="header-area header-height-1">
    <div class="header-bottom sticky-bar sticky-white-bg">
        <div class="custom-container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1">
                    <a href="{{ route('guest.welcome') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="logo">
                    </a>
                </div>

                <div class="main-menu main-menu-padding-1 main-menu-lh-1 d-none d-lg-block hover-boder">
                    <nav>
                        <ul>
                            <li><a href="{{ route('guest.welcome') }}">Home</a></li>
                            <li><a href="{{ route('guest.shop') }}">Shop</a></li>
                            <li><a href="{{ route('guest.welcome') }}">About Us</a></li>
                            <li><a href="{{ route('guest.welcome') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-action-right">
                    <div class="header-action">
                        <div class="header-action-icon">
                            <a class="search-active" href="#"><i class="far fa-search"></i></a>
                        </div>
                        <div class="header-action-icon d-block d-lg-none">
                            <div class="burger-icon">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
