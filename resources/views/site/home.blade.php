@extends('site.layout.app')
@section('title')
    Home | {{config('app.site')}}
@endsection
@section('content')
    <div class="home-slider-container">
        <div class="home-slider owl-carousel owl-theme owl-theme-light">
            <div class="home-slide">
                <div class="slide-bg owl-lazy" data-src="{{asset('site_assets/images/bg-2.jpg')}}" style="background-position:32% center;"></div><!-- End .slide-bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 offset-md-7">
                            <div class="home-slide-content slide-content-big">
                                <h1>Dresses</h1>
                                <h3>
                                    <span>up to </span>
                                    <strong>30%</strong>
                                    <span>OFF in the<br>collection</span>
                                </h3>
                                <a href="category.html" class="btn btn-primary">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-slide -->

            <div class="home-slide">
                <div class="slide-bg owl-lazy" data-src="{{asset('site_assets/images/bg-1.jpg')}}" style="background-position:64% center;"></div><!-- End .slide-bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <div class="home-slide-content slide-content-big">
                                <h1>Fashion</h1>
                                <h3>
                                    <span>up to </span>
                                    <strong>70%</strong>
                                    <span>OFF in the<br>collection</span>
                                </h3>
                                <a href="category.html" class="btn btn-primary">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-slide -->

            <div class="home-slide">
                <div class="slide-bg owl-lazy" data-src="{{asset('site_assets/images/bg-4.jpg')}}" style="background-position:64% center;"></div><!-- End .slide-bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 offset-md-1">
                            <div class="home-slide-content slide-content-big">
                                <h1>Fashion</h1>
                                <h3>
                                    <span>up to </span>
                                    <strong>70%</strong>
                                    <span>OFF in the<br>collection</span>
                                </h3>
                                <a href="category.html" class="btn btn-primary">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-slide -->
        </div><!-- End .home-slider -->
    </div><!-- End .home-slider-container -->

    <div class="banners-container mb-4 mb-lg-6 mb-xl-8">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="banner">
                        <div class="banner-content">
                            <h3 class="banner-title">Sunglasses</h3>

                            <a href="category.html" class="btn">Shop now</a>
                        </div><!-- End .banner-content -->
                        <a href="#">
                            <img src="{{asset('site_assets/images/banners/banner-1.jpg')}}" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->
                <div class="col-md-4">
                    <div class="banner">
                        <div class="banner-content">
                            <h3 class="banner-title">Woman Shoes</h3>

                            <a href="category.html" class="btn">Shop now</a>
                        </div><!-- End .banner-content -->
                        <a href="">
                            <img src="{{asset('site_assets/images/banners/banner-2.jpg')}}" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->
                <div class="col-md-4">
                    <div class="banner">
                        <div class="banner-content">
                            <h3 class="banner-title">Woman Bags</h3>

                            <a href="category.html" class="btn">Shop now</a>
                        </div><!-- End .banner-content -->
                        <a href="#">
                            <img src="{{asset('site_assets/images/banners/banner-3.jpg')}}" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .banners-container -->

    <div class="container mb-2 mb-lg-4 mb-xl-5">
        <hr>
            <h2 class="title text-center mb-3">Featured Products</h2>
        <hr>
        <div class="owl-carousel owl-theme featured-products">
            @if ($featured->count() > 0)
                @foreach ($featured as $item)
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">
                                @if ($item->products()->first()->image)
                                    <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                    <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                @else
                                    <img src="{{asset('img/default.png')}}" id="preview1" alt="Image 1 Preview Here" style="height:300px;width:300px" class="img-thumbnail">
                                @endif
                            </a>
                            {{-- <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div> --}}
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}" class="btn-quickview" title="Detail View">
                                View Details
                            </a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}" class="product-category">{{$item->products()->first()->category()->first()['name']}}</a>
                                </div>
                            </div>
                            <h2>
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">{{$item->products()->first()->name}}</a>
                            </h2>
                            <span>
                                Product Code:
                                {{
                                    $item->products()->first()->refference
                                }}
                            </span>
                            <div class="price-box">
                                <span class="product-price">
                                    <i class="fa fa-euro-sign"></i>
                                    {{
                                        $item->products()->first()->variations()->first()['sell_price_inc_tax']
                                    }}
                                </span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endforeach
            @else
                @foreach ($data as $item)
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="#">
                                @if ($item->products()->first()->image)
                                    <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                    <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                @else
                                    <img src="{{asset('img/default.png')}}" id="preview1" alt="Image 1 Preview Here" style="height:300px;width:300px" class="img-thumbnail">
                                @endif
                            </a>
                            {{-- <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div> --}}
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}" class="btn-quickview" title="Detail View">
                                View Details
                            </a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            {{-- <h2 class="product-title">
                                <a href="#">Women Fashion-Black</a>
                            </h2> --}}
                             <h2>
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">{{$item->products()->first()->name}}</a>
                            </h2>
                            <span>
                                Product Code:
                                {{
                                    $item->products()->first()->refference
                                }}
                            </span>
                            <div class="price-box">
                                <span class="product-price">
                                    <i class="fa fa-euro-sign"></i>
                                    {{
                                        $item->products()->first()->variations()->first()['sell_price_inc_tax']
                                    }}
                                </span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endforeach
            @endif
        </div><!-- End .featured-products -->
    </div><!-- End .container -->

    <div class="promo-section" style="background-image: url(site_assets/images/promo-bg.jpg)">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="promo-slider owl-carousel owl-theme owl-theme-light">
                            <div class="promo-content">
                                <h3>Up to <span>40%</span> Off<br> <strong>Special Promo</strong></h3>
                                <a href="#" class="btn btn-primary">Purchase Now</a>
                            </div><!-- Endd .promo-content -->

                            <div class="promo-content">
                                <h3>Up to <span>58%</span> Off<br> <strong>Holiday Promo</strong></h3>
                                <a href="#" class="btn btn-primary">Purchase Now</a>
                            </div><!-- Endd .promo-content -->
                        </div><!-- End .promo-slider -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .container -->
    </div><!-- End .promo-section -->

    <div class="container mb-2 mb-lg-4 mb-xl-5">
        <hr>
            <h2 class="title text-center mb-3">New Arrivals</h2>
        <hr>
        <div class="owl-carousel owl-theme new-products">
            @foreach ($new_arrival as $item)
                @if ($loop->iteration <= 50)
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">
                                @if ($item->products()->first()->image)
                                         <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                        <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                   @else
                                        <img src="{{asset('img/default.png')}}" id="preview1" alt="Image 1 Preview Here" style="height:300px;width:300px" class="img-thumbnail">
                                   @endif
                            </a>
                            {{-- <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div> --}}
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}" class="btn-quickview" title="Quick View">View Details</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">{{$item->products()->first()->category()->first()['name']}}</a>
                                </div>
                                {{-- <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a> --}}
                            </div>
                            {{-- <h2 class="product-title">
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">
                                    {{$item->products()->first()->name}}
                                </a>
                            </h2> --}}
                             <h2>
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">{{$item->products()->first()->name}}</a>
                            </h2>
                            <span>
                                Product Code:
                                {{
                                    $item->products()->first()->refference
                                }}
                            </span>
                            <div class="price-box">
                                <span class="product-price">
                                    <i class="fa fa-euro-sign"></i>
                                    {{
                                        $item->products()->first()->variations()->first()['sell_price_inc_tax']
                                    }}
                                </span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endif
            @endforeach
        </div><!-- End .featured-products -->
    </div><!-- End .container -->

    @if ($sale->count() > 0)
    <div class="container mb-2 mb-lg-4 mb-xl-5">
        <hr>
        <h2 class="title text-center mb-3">On Sale Products</h2>
        <hr>
        <div class="owl-carousel owl-theme featured-products">
                @foreach ($sale as $item)
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">
                                @if ($item->products()->first()->image)
                                    <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                    <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                @else
                                    <img src="{{asset('img/default.png')}}" id="preview1" alt="Image 1 Preview Here" style="height:300px;width:300px" class="img-thumbnail">
                                @endif
                            </a>
                            {{-- <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div> --}}
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}" class="btn-quickview" title="Detail View">
                                View Details
                            </a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">{{$item->products()->first()->category()->first()['name']}}</a>
                                </div>
                                {{-- <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a> --}}
                            </div>
                            {{-- <h2 class="product-title">
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">{{$item->products()->first()->name}}</a>
                            </h2> --}}
                             <h2>
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">{{$item->products()->first()->name}}</a>
                            </h2>
                            <span>
                                Product Code:
                                {{
                                    $item->products()->first()->refference
                                }}
                            </span>
                            <div class="price-box">
                                <span class="product-price">
                                    <i class="fa fa-euro-sign"></i>
                                    {{
                                        $item->products()->first()->variations()->first()['sell_price_inc_tax']
                                    }}
                                </span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endforeach
            </div><!-- End .featured-products -->
        </div><!-- End .container -->
    @endif
    {{-- <div class="blog-section">
        <div class="container">
            <h2 class="title text-center mb-3">From the Blog</h2>

            <div class="blog-carousel owl-carousel owl-theme">
                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="{{asset('site_assets/images/blog/home/post-1.jpg')}}" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <h2 class="entry-title">
                            <a href="single.html">Fashion news</a>
                        </h2>
                        <div class="entry-date">08-May-2018</div><!-- End .entry-date -->
                        <div class="entry-content">
                            <p>Lorem Ipsum is simply dummy text the printing and type setting unknown... </p>

                            <a href="single.html" class="read-more">Read More <i class="icon-angle-right"></i></a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="{{asset('site_assets/images/blog/home/post-2.jpg')}}" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <h2 class="entry-title">
                            <a href="single.html">Trends of Spring</a>
                        </h2>
                        <div class="entry-date">04-May-2018</div><!-- End .entry-date -->
                        <div class="entry-content">
                            <p>Lorem Ipsum is simply dummy text the printing and type setting unknown... </p>

                            <a href="single.html" class="read-more">Read More <i class="icon-angle-right"></i></a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="{{asset('site_assets/images/blog/home/post-3.jpg')}}" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <h2 class="entry-title">
                            <a href="single.html">Women News</a>
                        </h2>
                        <div class="entry-date">22-Mar-2018</div><!-- End .entry-date -->
                        <div class="entry-content">
                            <p>Lorem Ipsum is simply dummy text the printing and type setting unknown... </p>

                            <a href="single.html" class="read-more">Read More <i class="icon-angle-right"></i></a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->
            </div><!-- End .blog-carousel -->
        </div><!-- End .container -->
    </div><!-- End .blog-section --> --}}
    {{-- All Products --}}
    <div class="promo-section" style="background-image: url(site_assets/images/promo-bg.jpg)">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="promo-slider owl-carousel owl-theme owl-theme-light">
                            <div class="promo-content">
                                <h3>Up to <span>40%</span> Off<br> <strong>Special Promo</strong></h3>
                                <a href="#" class="btn btn-primary">Purchase Now</a>
                            </div><!-- Endd .promo-content -->

                            <div class="promo-content">
                                <h3>Up to <span>58%</span> Off<br> <strong>Holiday Promo</strong></h3>
                                <a href="#" class="btn btn-primary">Purchase Now</a>
                            </div><!-- Endd .promo-content -->
                        </div><!-- End .promo-slider -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .container -->
    </div><!-- End .promo-section -->

    <div class="container mb-2 mb-lg-4 mb-xl-5">
        <hr>
            <h2 class="title text-center mb-3">All Products</h2>
        <hr>
        <div class="owl-carousel owl-theme new-products">
            @foreach ($data as $item)
                @if ($loop->iteration <= 50)
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">
                                @if ($item->products()->first()->image)
                                         <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                        <img src="{{asset('uploads/img/'.$item->products()->first()->image)}}" style="height:300px;width:300px" class="img-thumbnail">
                                   @else
                                        <img src="{{asset('img/default.png')}}" id="preview1" alt="Image 1 Preview Here" style="height:300px;width:300px" class="img-thumbnail">
                                   @endif
                            </a>
                            {{-- <div class="label-group">
                                <div class="product-label label-cut">-20%</div>
                            </div> --}}
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}" class="btn-quickview" title="Quick View">View Details</a> 
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">{{$item->products()->first()->category()->first()['name']}}</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            {{-- <h2 class="product-title">
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">{{$item->products()->first()->name}}</a>
                            </h2> --}}
                             <h2>
                                <a href="{{url('product/'.encrypt($item->products()->first()->id).'/detail')}}">{{$item->products()->first()->name}}</a>
                            </h2>
                            <span>
                                Product Code:
                                {{
                                    $item->products()->first()->refference
                                }}
                            </span>
                            {{-- <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container --> --}}
                            <div class="price-box">
                                <span class="product-price">
                                    <i class="fa fa-euro-sign"></i>
                                    {{
                                        $item->products()->first()->variations()->first()['sell_price_inc_tax']
                                    }}
                                </span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                @endif
            @endforeach
        </div><!-- End .featured-products -->
    </div><!-- End .container -->
@endsection