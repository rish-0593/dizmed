<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{ route('guest.welcome') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-menu-wrap mobile-header-border">
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="{{ route('guest.welcome') }}">Home</a></li>
                        <li><a href="{{ route('guest.shop') }}">Products</a></li>
                        <li><a href="{{ route('guest.welcome') }}">About Us</a></li>
                        <li><a href="{{ route('guest.welcome') }}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
