<x-guest-layout>
    <div class="slider-banner-area padding-10-row-col">
        <div class="custom-container">
            <div class="row">
                <div class="custom-common-column custom-column-width-66 custom-padding-5">
                    <div class="slider-area">
                        <div class="hero-slider-active-1 nav-style-1 nav-style-1-position-1">
                            <div class="single-hero-slider single-animation-wrap slider-height-1 custom-d-flex custom-align-item-end bg-img"
                                style="background-image:url(img/slider/hm1-slider-1.jpg);">
                                <div class="hero-slider-content-1 slider-animated-1">
                                    <h1 class="animated">COVID-19 Prevention <br>& Care Supplies </h1>
                                    <p class="animated">Collection of products that help you to protect you and
                                        your beloved. Take a good deal TODAY </p>
                                    <div class="btn-style-1">
                                        <a class="animated" href="product-details.html"> Buy now </a>
                                    </div>
                                </div>
                                <div class="slider-product-price slider-product-position1 slider-animated-1 animated">
                                    <h3>
                                        <span>From</span>
                                        $5*
                                    </h3>
                                </div>
                            </div>
                            <div class="single-hero-slider single-animation-wrap slider-height-1 custom-d-flex custom-align-item-end"
                                style="background-image:url(img/slider/hm1-slider-2.jpg);">
                                <div class="hero-slider-content-1 slider-content-1-black slider-animated-1">
                                    <h4 class="animated">Best selling </h4>
                                    <h1 class="animated">COVID-19 Prevention <br>& Care Supplies </h1>
                                    <p class="animated">Backed by experience since 1950. One-stop Source for all
                                        your Hospital & Medical Needs. </p>
                                    <div class="btn-style-1">
                                        <a class="animated" href="product-details.html"> Buy now </a>
                                    </div>
                                </div>
                                <div class="slider-product-price slider-product-position1 slider-animated-1 animated">
                                    <h3>
                                        <span>From</span>
                                        $5*
                                    </h3>
                                </div>
                            </div>
                            <div class="single-hero-slider single-animation-wrap slider-height-1 custom-d-flex custom-align-item-end"
                                style="background-image:url(img/slider/hm1-slider-3.jpg);">
                                <div class="hero-slider-content-1 slider-animated-1">
                                    <div class="slider-product-offer-wrap animated">
                                        <div class="slider-product-offer">
                                            <span class="yellow">hot </span>
                                            <span class="red">-28% </span>
                                        </div>
                                        <p>3M 6000 Series </p>
                                    </div>
                                    <h1 class="animated">Fitted Face Mask N95<br> Group Pack of 3 </h1>
                                    <p class="animated">3M high-efficiency electrostatic filter cotton, non-oily
                                        particle filtration efficiency ≥ 90% </p>
                                    <div class="btn-style-1">
                                        <a class="animated" href="product-details.html"> Buy now </a>
                                    </div>
                                </div>
                                <div class="slider-product-price slider-product-position2 slider-animated-1 animated">
                                    <h3>
                                        <span>Only </span>
                                        $18
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-common-column custom-column-width-33 custom-padding-5">
                    <div class="banner-area banner-area-mt">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="banner-wrap wow tmFadeInUp mb-10">
                                    <div class="banner-img banner-img-zoom">
                                        <a href="product-details.html">
                                            <img src="{{ asset('guest/img/banner/banner-1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="banner-content-1">
                                        <span>Home Medical Supplies</span>
                                        <h2>Portable Mesh Atomizer</h2>
                                        <h3>$40.00</h3>
                                        <div class="btn-style-1">
                                            <a class="font-size-14 btn-1-padding-2" href="product-details.html">Shop
                                                now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6 col-12 col-sm-12">
                                <div class="banner-wrap wow tmFadeInUp mb-10">
                                    <div class="banner-img banner-img-zoom">
                                        <a href="product-details.html">
                                            <img src="{{ asset('guest/img/banner/banner-2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="banner-content-1">
                                        <span>Home Medical Supplies</span>
                                        <h2>Sanitizer Gel Alcohol</h2>
                                        <h3>$15.00</h3>
                                        <div class="btn-style-1">
                                            <a class="font-size-14 btn-1-padding-2" href="product-details.html">Shop
                                                now </a>
                                        </div>
                                    </div>
                                    <div class="banner-badge banner-badge-position1">
                                        <h3>
                                            <span>Best</span>
                                            Selling
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Category --}}
    <div class="categories-area pb-70">
        <div class="custom-container">
            <div class="section-title-1 mb-40">
                <h2>Shop by categories</h2>
            </div>

            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-1 g-3">
                @foreach ($categories as $category)
                    <div class="col">
                        <div class="product-plr-1">
                            <div class="categories-wrap">
                                {{-- <div class="categories-img categories-img-zoom">
                                    <a href="shop.html"><img src="img/product/categorie-1.jpg" alt=""></a>
                                </div> --}}
                                <div class="categories-content text-center">
                                    <h3><a href="{{ route('guest.shop') }}">{{ $category->name }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="banner-area pb-40">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="banner-wrap wow tmFadeInUp mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html">
                                <img src="{{ asset('guest/img/banner/banner-3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content-1">
                            <span>Personal</span>
                            <h2>Temperature Gun</h2>
                            <h3>$35.00</h3>
                            <div class="btn-style-1">
                                <a class="font-size-14 btn-1-padding-2" href="product-details.html">Shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="banner-wrap wow tmFadeInUp mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html">
                                <img src="{{ asset('guest/img/banner/banner-4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content-1">
                            <span>Home Medical Supplies</span>
                            <h2>Steam Vaporizer</h2>
                            <h3>$86.00</h3>
                            <div class="btn-style-1">
                                <a class="font-size-14 btn-1-padding-2" href="product-details.html">Shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="banner-wrap wow tmFadeInUp mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html">
                                <img src="{{ asset('guest/img/banner/banner-5.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content-1">
                            <span>Hospital Equipment</span>
                            <h2>Stainless Steel Scissors</h2>
                            <h3>$13.00</h3>
                            <div class="btn-style-1">
                                <a class="font-size-14 btn-1-padding-2" href="product-details.html">Shop now </a>
                            </div>
                        </div>
                        <div class="banner-badge banner-badge-position2">
                            <h3>
                                <span>19%</span>
                                Off
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-area pb-45">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-wrap wow tmFadeInUp mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html">
                                <img src="{{ asset('guest/img/banner/banner-6.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content-2">
                            <h2>Independent Living</h2>
                            <h3 class="d-none d-sm-block">Classic Personal Vaporizer</h3>
                            <h4>$35.00</h4>
                            <div class="btn-style-1">
                                <a class="font-size-14 btn-1-padding-2" href="product-details.html">Shop now </a>
                            </div>
                        </div>
                        <div class="banner-badge-2 banner-badge-2-position1">
                            <h3>
                                <span>Best</span>
                                Selling
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-wrap wow tmFadeInUp mb-30">
                        <div class="banner-img banner-img-zoom">
                            <a href="product-details.html">
                                <img src="{{ asset('guest/img/banner/banner-7.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content-3">
                            <span>Home Medical Supplies</span>
                            <h2>Digital Thermometer</h2>
                            <h4>$45.00 - $55.00</h4>
                            <div class="btn-style-1">
                                <a class="font-size-14 btn-1-padding-2" href="product-details.html">Shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Brand --}}
    <div class="brand-logo-area pb-35">
        <div class="custom-container">
            <div class="section-title-1 wow tmFadeInUp mb-30">
                <h2>Shop by brands</h2>
            </div>
            <div class="row align-items-center wow tmFadeInUp">
                @foreach ($brands as $brand)
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo mb-30">
                            {{-- <a href="shop.html"><img src="img/brand-logo/brand-logo-1.png" alt=""></a> --}}
                            <h3><a href="{{ route('guest.shop') }}">{{ $brand->name }}</a></h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="contact-area bg-gray-2">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-sm-6">
                    <div class="single-contact-wrap text-center wow tmFadeInUp">
                        <h4>Store location</h4>
                        <p> Jaypee klassic green wish town sector 134 tower A7, 303</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-sm-6">
                    <div class="single-contact-wrap text-center wow tmFadeInUp">
                        <h4>Work inquiries</h4>
                        <p> office@legit.com</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12 col-sm-6">
                    <div class="single-contact-wrap text-center wow tmFadeInUp">
                        <h4>Call us</h4>
                        <p> +91 8448418058</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
