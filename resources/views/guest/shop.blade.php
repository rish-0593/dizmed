<x-guest-layout>
    <div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
        <div class="custom-container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-75 pb-55">
        <div class="custom-container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-topbar-wrapper">
                        <div class="totall-product">
                            <p> We found <span>{{ $products->count() }}</span> products available for you</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-product-wrap">
                                <div class="sort-by">
                                    <span><i class="far fa-align-left"></i>Sort by:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span> Default <i class="far fa-angle-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">Default</a></li>
                                    <li><a href="#">Popularity</a></li>
                                    <li><a href="#">Average rating</a></li>
                                    <li><a href="#">Latest</a></li>
                                    <li><a href="#">Price: low to high</a></li>
                                    <li><a href="#">Price: high to low</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12 col-sm-6 wow tmFadeInUp">
                                    <div class="single-product-wrap mb-50">
                                        <div class="product-img-action-wrap mb-10">
                                            <div class="product-img product-img-zoom">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/images/product/product-4.jpg"
                                                        alt="">
                                                    <img class="hover-img" src="assets/images/product/product-4-2.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="red-2">{{ $product->brand->name }}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="">{{ $product->category->name }}</a>
                                            </div>
                                            <h2><a
                                                    href="{{ route('guest.product', [$product->slug]) }}">{{ $product->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="pro-pagination-style text-center mt-55">
                            <ul>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="next" href="#"><i class="far fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper sidebar-wrapper-mr1">
                        <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-1 mb-20">
                            <h4 class="sidebar-widget-title">Categories </h4>
                            <div class="sidebar-categories-list">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('guest.shop') }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-1 mb-20">
                            <h4 class="sidebar-widget-title">Brands </h4>
                            <div class="sidebar-brand-list">
                                <ul>
                                    @foreach ($brands as $brand)
                                        <li>
                                            <a href="{{ route('guest.shop') }}">{{ $brand->name }} <span></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-2 mb-20">
                            <h4 class="sidebar-widget-title">Filter by price </h4>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <div class="label-input">
                                        <input type="text" id="amount" name="price"
                                            placeholder="Add Your Price" />
                                    </div>
                                    <button type="button">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
