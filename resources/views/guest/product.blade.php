<x-guest-layout>
    <div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Product</a>
                    </li>
                    <li class="active">{{ $product->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area padding-30-row-col pt-75 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="product-details-wrap">
                        <div class="product-details-wrap-top">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-details-slider-wrap">
                                        <div class="pro-dec-big-img-slider">
                                            <div class="single-big-img-style">
                                                <div class="pro-details-big-img">
                                                    <a class="img-popup"
                                                        href="assets/images/product-details/pro-details-b-large-1.jpg">
                                                        <img src="assets/images/product-details/pro-details-large-1.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pro-details-badges product-badges-position">
                                                    <span class="red">Sale !</span>
                                                </div>
                                            </div>
                                            <div class="single-big-img-style">
                                                <div class="pro-details-big-img">
                                                    <a class="img-popup"
                                                        href="assets/images/product-details/pro-details-b-large-2.jpg">
                                                        <img src="assets/images/product-details/pro-details-large-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pro-details-badges product-badges-position">
                                                    <span class="red">Sale !</span>
                                                </div>
                                            </div>
                                            <div class="single-big-img-style">
                                                <div class="pro-details-big-img">
                                                    <a class="img-popup"
                                                        href="assets/images/product-details/pro-details-b-large-3.jpg">
                                                        <img src="assets/images/product-details/pro-details-large-3.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pro-details-badges product-badges-position">
                                                    <span class="red">Sale !</span>
                                                </div>
                                            </div>
                                            <div class="single-big-img-style">
                                                <div class="pro-details-big-img">
                                                    <a class="img-popup"
                                                        href="assets/images/product-details/pro-details-b-large-4.jpg">
                                                        <img src="assets/images/product-details/pro-details-large-4.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pro-details-badges product-badges-position">
                                                    <span class="red">Sale !</span>
                                                </div>
                                            </div>
                                            <div class="single-big-img-style">
                                                <div class="pro-details-big-img">
                                                    <a class="img-popup"
                                                        href="assets/images/product-details/pro-details-b-large-2.jpg">
                                                        <img src="assets/images/product-details/pro-details-large-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="pro-details-badges product-badges-position">
                                                    <span class="red">Sale !</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-dec-slider-small product-dec-small-style1">
                                            <div class="product-dec-small active">
                                                <img src="assets/images/product-details/pro-details-small-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-dec-small">
                                                <img src="assets/images/product-details/pro-details-small-2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-dec-small">
                                                <img src="assets/images/product-details/pro-details-small-3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-dec-small">
                                                <img src="assets/images/product-details/pro-details-small-4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="product-dec-small">
                                                <img src="assets/images/product-details/pro-details-small-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-details-content pro-details-content-pl">
                                        <div class="pro-details-category">
                                            <ul>
                                                <li><a href="">{{ $product->category->name }}</a></li>
                                            </ul>
                                        </div>
                                        <h1> {{ $product->title }}</h1>
                                        <div class="pro-details-brand-review">
                                            <div class="pro-details-brand">
                                                <span> Brand:
                                                    <a href="">{{ $product->brand->name }}</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-details-price-short-description pt-2">
                                            <div class="pro-details-short-description">
                                                @foreach ($product->tags ?? [] as $tag)
                                                    <p>{{ $tag->name }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-details-wrap-bottom">
                            <div class="product-details-description">
                                <div class="entry-product-section-heading">
                                    <h2>Description</h2>
                                </div>
                                {!! $product->description !!}
                            </div>
                            <div class="pro-details-additional-information pro-details-mrg-tb">
                                <div class="entry-product-section-heading">
                                    <h2>Additional information</h2>
                                </div>
                                <div class="additional-information">
                                    <ul>
                                        @foreach ($product->attributes ?? [] as $attribute)
                                            <li><span>{{ $attribute->name }}</span> {{ $attribute->pivot->value }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
