@extends('site.layout.app')
@section('title')
    Product Detail
@endsection
@section('content')
<div>
     <div class="container pt-sm-5">
          <div class="row pt-sm-5">
               <div class="col-lg-9">
                    <div class="product-single-container product-single-default">
                         <div class="row">
                              <div class="col-lg-7 col-md-6 product-single-gallery">
                                   <div class="product-slider-container product-item">
                                   <div class="product-single-carousel owl-carousel owl-theme">
                              @if ($images->count() > 0)
                                   @foreach ($images as $item)
                                        <div class="product-item ">
                                             <img class="product-single-image" src="{{asset('uploads/img/'.$item->image)}}" data-zoom-image="{{asset('uploads/img/'.$item->image)}}" style="width:400px;height:400px">
                                        </div>
                                   @endforeach
                              @else
                                   <div class="product-item ">
                                        <img class="product-single-image" src="{{asset('img/product-placeholder-1.jpg')}}" data-zoom-image="{{asset('img/product-placeholder-1.jpg')}}" style="width:400px;height:400px">
                                   </div>      
                                   <div class="product-item ">
                                        <img class="product-single-image" src="{{asset('img/product-placeholder-2.jpg')}}" data-zoom-image="{{asset('img/product-placeholder-2.jpg')}}" style="width:400px;height:400px">
                                   </div>      
                                   <div class="product-item ">
                                        <img class="product-single-image" src="{{asset('img/product-placeholder-3.jpg')}}" data-zoom-image="{{asset('img/product-placeholder-3.jpg')}}" style="width:400px;height:400px">
                                   </div>      
                              @endif
                                   </div>
                                   <!-- End .product-single-carousel -->
                                   <span class="prod-full-screen">
                                        <i class="fa fa-expand fa-2x icon-plus">

                                        </i>
                                   </span>
                                   </div>
                                   <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                              @if ($images->count() > 0)
                                   @foreach ($images as $item)
                                        <div class="col-3 owl-dot">
                                             <img src="{{asset('uploads/img/'.$item->image)}}" style="width:85px;height:85px">
                                        </div>
                                   @endforeach
                              @else 
                                   <div class="col-3 owl-dot">
                                        <img src="{{asset('img/product-placeholder-1.jpg')}}" style="width:85px;height:85px">
                                   </div>
                                   <div class="col-3 owl-dot">
                                        <img src="{{asset('img/product-placeholder-2.jpg')}}" style="width:85px;height:85px">
                                   </div>
                                   <div class="col-3 owl-dot">
                                        <img src="{{asset('img/product-placeholder-3.jpg')}}" style="width:85px;height:85px">
                                   </div>
                              @endif
                                   </div>
                              </div><!-- End .col-lg-7 -->

                              <div class="col-lg-5 col-md-6">
                                   <div class="product-single-details">
                                   <h1 class="product-title">
                                        {{
                                             $product->name
                                        }}
                                   </h1>

                                   {{-- <div class="ratings-container">
                                        <div class="product-ratings">
                                             <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->

                                        <a href="#" class="rating-link">( 6 Reviews )</a>
                                   </div><!-- End .product-container --> --}}

                                   <div class="price-box">
                                        @if (!is_null($special_category) && $special_category->sale == "1")
                                             <span class="old-price">
                                                  <i class="fa fa-euro-sign"></i>
                                                  {{
                                                       $product->variations()->first()['sell_price_inc_tax']
                                                  }}
                                             </span>
                                             <span class="product-price">
                                                  <i class="fa fa-euro-sign"></i>
                                                  {{
                                                       $special_category->after_discount
                                                  }}
                                             </span>
                                        @else
                                             <span class="product-price">
                                                  <i class="fa fa-euro-sign"></i>
                                                  {{
                                                       $product->variations()->first()['sell_price_inc_tax']
                                                  }}
                                             </span>
                                        @endif
                                        <p>
                                             Product Code:
                                             {{
                                                  $product->refference
                                             }}
                                        </p>
                                   </div><!-- End .price-box -->
                                   

                                   {{-- <div class="product-desc">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                   </div><!-- End .product-desc --> --}}

                                   <div class="product-filters-container">
                                        <div class="product-single-filter">
                                             <label>Sizes:</label>
                                             <select name="color" class="form-control col-6 select2">
                                                  <optgroup>
                                                       <option value="0">
                                                            Choose Size
                                                       </option>
                                                       @foreach ($sizes as $item)
                                                  <option value="{{$item->id}}">
                                                       {{$item->name}}
                                                  </option>
                                                       @endforeach
                                                  </optgroup>
                                             </select>
                                        </div><!-- End .product-single-filter -->
                                   </div>
                                   <div class="product-filters-container">
                                        <div class="product-single-filter">
                                             <label>Colors:</label>
                                             <select name="color" class="form-control col-6 select2">
                                                  <optgroup>
                                                       <option value="0">
                                                            Choose Color
                                                       </option>
                                                       @foreach ($colors as $item)
                                                  <option value="{{$item->id}}">
                                                       {{$item->name}}
                                                  </option>
                                                       @endforeach
                                                  </optgroup>
                                             </select>
                                             {{-- <ul class="config-swatch-list">
                                                  <li class="active">
                                                       <a href="#" style="background-color: #6085a5;"></a>
                                                  </li>
                                                  <li>
                                                       <a href="#" style="background-color: #ab6e6e;"></a>
                                                  </li>
                                                  <li>
                                                       <a href="#" style="background-color: #b19970;"></a>
                                                  </li>
                                                  <li>
                                                       <a href="#" style="background-color: #11426b;"></a>
                                                  </li>
                                             </ul> --}}
                                        </div><!-- End .product-single-filter -->
                                   </div>
                                   <!-- End .product-filters-container -->
                                   <strong class="@if ($web_product->sum('qty_available') < 3)
                                       text-danger 
                                   @endif">
                                        In Stock:
                                        {{
                                             $web_product->sum('qty_available')
                                        }} Items
                                   </strong>
                                   <div class="product-action product-all-icons pt-5">
                                        <div class="product-single-qty">
                                             <input class="horizontal-quantity form-control" type="text">
                                        </div><!-- End .product-single-qty -->

                                        <a href="#" class="paction add-cart" title="Add to Cart">
                                             <span>Add to Cart</span>
                                        </a>
                                   </div><!-- End .product-action -->
                                   {{-- @dd(Share::currentPage()->facebook()) --}}
                                   <div class="product-single-share">
                                        <label>Share:</label>
                                        <!-- www.addthis.com share plugin-->
                                        {{-- @dd(Share::currentPage()->twitter()->facebook()->pinterest()) --}}
                                        {{-- <p>
                                             Here
                                             {!! Share::page( url('/'), 'Message Content')->twitter()->facebook()->pinterest() !!}
                                        </p> --}}
                                        {{-- <div class="addthis_inline_share_toolbox">
                                             <i class="fab fa-facebook"></i>
                                             <p>{!!  Share::currentPage()!!}</p>
                                        </div> --}}
                                   </div><!-- End .product single-share -->
                                   </div><!-- End .product-single-details -->
                              </div><!-- End .col-lg-5 -->
                         </div><!-- End .row -->
                    </div><!-- End .product-single-container -->

                    @if (!is_null($special_category))
                        <div class="product-single-tabs">
                              <ul class="nav nav-tabs" role="tablist">
                                   <li class="nav-item">
                                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                                   </li>
                              </ul>
                              <div class="tab-content">
                                   <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                                        <div class="product-desc-content">
                                        {!!
                                             $special_category->description
                                        !!}
                                        </div><!-- End .product-desc-content -->
                                   </div><!-- End .tab-pane -->
                              </div><!-- End .tab-content -->
                         </div>
                    @endif<!-- End .product-single-tabs -->
               </div><!-- End .col-lg-9 -->

               <div class="sidebar-overlay"></div>
               <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
               <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                    <div class="sidebar-wrapper">
                         <div class="widget widget-brand">
                              @php
                                  $logo = App\Business::first()->logo;
                              @endphp
                              <a href="{{url('/')}}">
                                   <img src="{{asset('uploads/business_logos/'.$logo)}}" alt="brand name">
                              </a>
                         </div><!-- End .widget -->

                         <div class="widget widget-info">
                              <ul>
                                   <li>
                                   <i class="icon-shipping"></i>
                                   <h4>FREE<br>SHIPPING</h4>
                                   </li>
                                   <li>
                                   <i class="icon-us-dollar"></i>
                                   <h4>100% MONEY<br>BACK GUARANTEE</h4>
                                   </li>
                                   <li>
                                   <i class="icon-online-support"></i>
                                   <h4>ONLINE<br>SUPPORT 24/7</h4>
                                   </li>
                              </ul>
                         </div><!-- End .widget -->

                         <div class="widget widget-banner">
                              <div class="banner banner-image">
                                   <a href="#">
                                   <img src="assets/images/banners/banner-sidebar.jpg" alt="Banner Desc">
                                   </a>
                              </div><!-- End .banner -->
                         </div><!-- End .widget -->

                         <div class="widget widget-featured">
                              <h3 class="widget-title">Featured Products</h3>
                              
                              <div class="widget-body">
                                   <div class="owl-carousel widget-featured-products">
                                   <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                             <figure>
                                                  <a href="product.html">
                                                       <img src="assets/images/products/product-10.jpg">
                                                  </a>
                                             </figure>
                                             <div class="product-details">
                                                  <h2 class="product-title">
                                                       <a href="product.html">Product Short Name</a>
                                                  </h2>
                                                  <div class="ratings-container">
                                                       <div class="product-ratings">
                                                       <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                       <span class="tooltiptext tooltip-top"></span>
                                                       </div><!-- End .product-ratings -->
                                                  </div><!-- End .product-container -->
                                                  <div class="price-box">
                                                       <span class="product-price">$49.00</span>
                                                  </div><!-- End .price-box -->
                                             </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                             <figure>
                                                  <a href="product.html">
                                                       <img src="assets/images/products/product-11.jpg">
                                                  </a>
                                             </figure>
                                             <div class="product-details">
                                                  <h2 class="product-title">
                                                       <a href="product.html">Product Short Name</a>
                                                  </h2>
                                                  <div class="ratings-container">
                                                       <div class="product-ratings">
                                                       <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                       <span class="tooltiptext tooltip-top"></span>
                                                       </div><!-- End .product-ratings -->
                                                  </div><!-- End .product-container -->
                                                  <div class="price-box">
                                                       <span class="product-price">$49.00</span>
                                                  </div><!-- End .price-box -->
                                             </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                             <figure>
                                                  <a href="product.html">
                                                       <img src="assets/images/products/product-12.jpg">
                                                  </a>
                                             </figure>
                                             <div class="product-details">
                                                  <h2 class="product-title">
                                                       <a href="product.html">Product Short Name</a>
                                                  </h2>
                                                  <div class="ratings-container">
                                                       <div class="product-ratings">
                                                       <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                       <span class="tooltiptext tooltip-top"></span>
                                                       </div><!-- End .product-ratings -->
                                                  </div><!-- End .product-container -->
                                                  <div class="price-box">
                                                       <span class="product-price">$49.00</span>
                                                  </div><!-- End .price-box -->
                                             </div><!-- End .product-details -->
                                        </div>
                                   </div><!-- End .featured-col -->

                                   <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                             <figure>
                                                  <a href="product.html">
                                                       <img src="assets/images/products/product-13.jpg">
                                                  </a>
                                             </figure>
                                             <div class="product-details">
                                                  <h2 class="product-title">
                                                       <a href="product.html">Product Short Name</a>
                                                  </h2>
                                                  <div class="ratings-container">
                                                       <div class="product-ratings">
                                                       <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                       <span class="tooltiptext tooltip-top"></span>
                                                       </div><!-- End .product-ratings -->
                                                  </div><!-- End .product-container -->
                                                  <div class="price-box">
                                                       <span class="product-price">$49.00</span>
                                                  </div><!-- End .price-box -->
                                             </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                             <figure>
                                                  <a href="product.html">
                                                       <img src="assets/images/products/product-14.jpg">
                                                  </a>
                                             </figure>
                                             <div class="product-details">
                                                  <h2 class="product-title">
                                                       <a href="product.html">Product Short Name</a>
                                                  </h2>
                                                  <div class="ratings-container">
                                                       <div class="product-ratings">
                                                       <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                       <span class="tooltiptext tooltip-top"></span>
                                                       </div><!-- End .product-ratings -->
                                                  </div><!-- End .product-container -->
                                                  <div class="price-box">
                                                       <span class="product-price">$49.00</span>
                                                  </div><!-- End .price-box -->
                                             </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                             <figure>
                                                  <a href="product.html">
                                                       <img src="assets/images/products/product-8.jpg">
                                                  </a>
                                             </figure>
                                             <div class="product-details">
                                                  <h2 class="product-title">
                                                       <a href="product.html">Product Short Name</a>
                                                  </h2>
                                                  <div class="ratings-container">
                                                       <div class="product-ratings">
                                                       <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                       <span class="tooltiptext tooltip-top"></span>
                                                       </div><!-- End .product-ratings -->
                                                  </div><!-- End .product-container -->
                                                  <div class="price-box">
                                                       <span class="product-price">$49.00</span>
                                                  </div><!-- End .price-box -->
                                             </div><!-- End .product-details -->
                                        </div>
                                   </div><!-- End .featured-col -->
                                   </div><!-- End .widget-featured-slider -->
                              </div><!-- End .widget-body -->
                         </div><!-- End .widget -->
                    </div>
               </aside><!-- End .col-md-3 -->
          </div><!-- End .row -->
     </div><!-- End .container -->
     <div class="featured-section">
          <div class="container">
          <h2 class="carousel-title">Featured Products</h2>

               <div class="owl-carousel owl-theme new-products">
                    <div class="product-default inner-quickview inner-icon">
                         <figure>
                              <a href="product.html">
                              <img src="assets/images/products/sunglasses/product-1.jpg">
                              <img src="assets/images/products/sunglasses/product-1-2.jpg">
                              </a>
                              <div class="label-group">
                              <div class="product-label label-cut">-20%</div>
                              </div>
                              <div class="btn-icon-group">
                              <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                              </div>
                              <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
                         </figure>
                         <div class="product-details">
                              <div class="category-wrap">
                              <div class="category-list">
                                   <a href="category.html" class="product-category">category</a>
                              </div>
                              <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                              </div>
                              <h2 class="product-title">
                              <a href="product.html">Mens sunglass-yellow</a>
                              </h2>
                              <div class="ratings-container">
                              <div class="product-ratings">
                                   <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                   <span class="tooltiptext tooltip-top"></span>
                              </div><!-- End .product-ratings -->
                              </div><!-- End .product-container -->
                              <div class="price-box">
                              <span class="old-price">$90</span>
                              <span class="product-price">$70</span>
                              </div><!-- End .price-box -->
                         </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                         <figure>
                              <a href="product.html">
                              <img src="assets/images/products/sunglasses/product-2.jpg">
                              <img src="assets/images/products/sunglasses/product-2-2.jpg">
                              </a>
                              <div class="btn-icon-group">
                              <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                              </div>
                              <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
                         </figure>
                         <div class="product-details">
                              <div class="category-wrap">
                              <div class="category-list">
                                   <a href="category.html" class="product-category">category</a>
                              </div>
                              <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                              </div>
                              <h2 class="product-title">
                              <a href="product.html">Mens sunglass-black</a>
                              </h2>
                              <div class="ratings-container">
                              <div class="product-ratings">
                                   <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                   <span class="tooltiptext tooltip-top"></span>
                              </div><!-- End .product-ratings -->
                              </div><!-- End .product-container -->
                              <div class="price-box">
                              <span class="product-price">$60.00</span>
                              </div><!-- End .price-box -->
                         </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                         <figure>
                              <a href="product.html">
                              <img src="assets/images/products/sunglasses/product-3.jpg">
                              <img src="assets/images/products/sunglasses/product-3-2.jpg">
                              </a>
                              <div class="label-group">
                              <div class="product-label label-cut">-20%</div>
                              </div>
                              <div class="btn-icon-group">
                              <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                              </div>
                              <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
                         </figure>
                         <div class="product-details">
                              <div class="category-wrap">
                              <div class="category-list">
                                   <a href="category.html" class="product-category">category</a>
                              </div>
                              <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                              </div>
                              <h2 class="product-title">
                              <a href="product.html">Mens sunglass-silver</a>
                              </h2>
                              <div class="ratings-container">
                              <div class="product-ratings">
                                   <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                   <span class="tooltiptext tooltip-top"></span>
                              </div><!-- End .product-ratings -->
                              </div><!-- End .product-container -->
                              <div class="price-box">
                              <span class="old-price">$75</span>
                              <span class="product-price">$55</span>
                              </div><!-- End .price-box -->
                         </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                         <figure>
                              <a href="product.html">
                              <img src="assets/images/products/sunglasses/product-4.jpg">
                              <img src="assets/images/products/sunglasses/product-4-2.jpg">
                              </a>
                              <div class="label-group">
                              <div class="product-label label-cut">-20%</div>
                              </div>
                              <div class="btn-icon-group">
                              <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                              </div>
                              <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
                         </figure>
                         <div class="product-details">
                              <div class="category-wrap">
                              <div class="category-list">
                                   <a href="category.html" class="product-category">category</a>
                              </div>
                              <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                              </div>
                              <h2 class="product-title">
                              <a href="product.html">Mens sunglass-brown</a>
                              </h2>
                              <div class="ratings-container">
                              <div class="product-ratings">
                                   <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                   <span class="tooltiptext tooltip-top"></span>
                              </div><!-- End .product-ratings -->
                              </div><!-- End .product-container -->
                              <div class="price-box">
                              <span class="old-price">$60</span>
                              <span class="product-price">$50</span>
                              </div><!-- End .price-box -->
                         </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                         <figure>
                              <a href="product.html">
                              <img src="assets/images/products/sunglasses/product-5.jpg">
                              <img src="assets/images/products/sunglasses/product-5-2.jpg">
                              </a>
                              <div class="btn-icon-group">
                              <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                              </div>
                              <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
                         </figure>
                         <div class="product-details">
                              <div class="category-wrap">
                              <div class="category-list">
                                   <a href="category.html" class="product-category">category</a>
                              </div>
                              <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                              </div>
                              <h2 class="product-title">
                              <a href="product.html">Mens glass</a>
                              </h2>
                              <div class="ratings-container">
                              <div class="product-ratings">
                                   <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                   <span class="tooltiptext tooltip-top"></span>
                              </div><!-- End .product-ratings -->
                              </div><!-- End .product-container -->
                              <div class="price-box">
                              <span class="product-price">$80</span>
                              </div><!-- End .price-box -->
                         </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                         <figure>
                              <a href="product.html">
                              <img src="assets/images/products/sunglasses/product-6.jpg">
                              <img src="assets/images/products/sunglasses/product-6-2.jpg">
                              </a>
                              <div class="label-group">
                              <div class="product-label label-cut">-20%</div>
                              </div>
                              <div class="btn-icon-group">
                              <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                              </div>
                              <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a> 
                         </figure>
                         <div class="product-details">
                              <div class="category-wrap">
                              <div class="category-list">
                                   <a href="category.html" class="product-category">category</a>
                              </div>
                              <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                              </div>
                              <h2 class="product-title">
                              <a href="product.html">Mens sunglass-black</a>
                              </h2>
                              <div class="ratings-container">
                              <div class="product-ratings">
                                   <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                   <span class="tooltiptext tooltip-top"></span>
                              </div><!-- End .product-ratings -->
                              </div><!-- End .product-container -->
                              <div class="price-box">
                              <span class="old-price">$100</span>
                              <span class="product-price">$80</span>
                              </div><!-- End .price-box -->
                         </div><!-- End .product-details -->
                    </div>
               </div><!-- End .featured-products -->
          </div><!-- End .container -->
     </div><!-- End .featured-section -->
</div><!-- End .main -->
@endsection