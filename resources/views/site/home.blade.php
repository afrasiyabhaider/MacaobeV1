@extends('site.layout.app')
@section('title')
    Home | {{config('app.site')}}
@endsection
@section('content')
    <main class="main">
            <section class="section section-bg section-parallax section-1" style="background-image: url('../../site_assets/images/bg-1.jpg');">
                <div class="container">
                    <div class="section-header text-light">
                        <h1 class="section-title text-light">FASHION</h1>
                        {{-- <h2 class="section-subtitle">50% Off</h2> --}}

                        <a href="category.html" class="btn btn-primary">Get the Offer</a>
                    </div><!-- End .section-header -->
                </div><!-- End .container -->
            </section><!-- End .section -->

            <section class="section section-big section-bg section-parallax section-2" style="background-image: url('../../site_assets/images/bg-2.jpg');">
                <div class="container text-right">
                    <div class="title-group">
                        <h3>New Arrivals</h3>
                        <h2>Fresh In Store<a href="category.html" class="btn btn-primary">Get the Offer</a></h2>
                    </div><!-- .End .title-group -->
                </div><!-- End .container -->

                <div class="container">
                    <div class="section-products-carousel owl-carousel owl-theme">
                        @foreach ($new_variation as $item)
                            @if ($loop->iteration <= 40)
                                <div class="product-default">
                                    <figure>
                                        <a href="#">
                                            @if ($item->products()->first()->image != null)
                                                <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="width:206px;height:206px">
                                            @else
                                                <img src="{{asset('img/default.png')}}" style="width:206px;height:206px">	    
                                            @endif
                                            {{-- <img src="{{asset('assets/images/products/home/product-1.jpg')}}"> --}}
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            {{-- <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings --> --}}
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.html">
                                                {{
                                                    $item->products()->first()->name
                                                }}
                                            </a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">
                                                &euro;
                                                {{
                                                    $item->products()->first()->variations()->first()->sell_price_inc_tax
                                                }}
                                            </span>
                                        </div><!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                        </div>
                                    </div><!-- End .product-details -->
                                </div>
                            @endif
                        @endforeach
                    </div><!-- End .section-products-carousel -->
                </div><!-- End .container -->
            </section><!-- End .section -->

            <section class="section section-big section-bg section-parallax section-3" style="background-image: url('../../site_assets/images/bg-3.jpg');">
                <div class="container">
                    <div class="title-group">
                        <h3>New Arrivals</h3>
                        <h2>Fashion Sunglasses<a href="category.html" class="btn btn-primary">Get the Offer</a></h2>
                    </div><!-- .End .title-group -->
                </div><!-- End .container -->

                <div class="container">
                    <div class="section-products-carousel owl-carousel owl-theme">
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/home/product-7.jpg">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/home/product-8.jpg">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/home/product-9.jpg">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/home/product-10.jpg">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/home/product-11.jpg">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/home/product-12.jpg">
                                </a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$9.00</span>
                                </div><!-- End .price-box -->
                                <div class="product-action">
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                                </div>
                            </div><!-- End .product-details -->
                        </div>
                    </div><!-- End .section-products-carousel -->
                </div><!-- End .container -->
            </section><!-- End .section -->

            <section class="section section-bg section-parallax section-4" style="background-image: url('../../site_assets/images/bg-4.jpg');">
                <div class="container text-right">
                    <div class="section-header">
                        <h2 class="section-title"><span>Up to 70% OFF</span>Connect with</h2>
                        <h3 class="section-subtitle">the best tech!</h3>

                        <a href="category.html" class="btn btn-primary">Get the Offer</a>
                    </div><!-- End .section-header -->
                </div><!-- End .container -->
            </section><!-- End .section -->
       
@endsection