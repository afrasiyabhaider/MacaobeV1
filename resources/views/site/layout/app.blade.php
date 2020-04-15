<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        @yield('title')
    </title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('site_assets/images/icons/favicon.ico')}}">
    
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'site_assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('site_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site_assets/fontawesome/css/all.min.css')}}">

    @stack('css')
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('site_assets/css/style.min.css')}}">
</head>
<body>
    <div class="page-wrapper">
        <header class="header header-transparent bg-dark">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="{{asset('site_assets/images/logo.png')}}" alt="{{config('app.site')}} Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="row header-row header-row-top">
                            <div class="header-dropdown dropdown-expanded">
                                <a href="#">Links</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="my-account.html">MY ACCOUNT </a></li>
                                        <li><a href="#">DAILY DEAL</a></li>
                                        <li><a href="#">MY WISHLIST </a></li>
                                        <li><a href="{{url('/login')}}">SIGN IN</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropown -->
                            <div class="header-search">
                                <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                                <div class="header-search-wrapper">
                                    <form action="#" method="get">
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                        <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div><!-- End .header-search-wrapper -->
                            </div><!-- End .header-search -->
                        </div><!-- End .header-row -->

                        <div class="row header-row header-row-bottom">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li>
                                        <a href="category.html" class="sf-with-ul">Categories</a>
                                        <div class="megamenu megamenu-fixed-width">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="menu-title">
                                                                <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                                            </div>
                                                            <ul>
                                                                <li><a href="category.html">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                                                <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                                                <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                                                <li><a href="category.html">Left Sidebar</a></li>
                                                                <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                                <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                                                <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                                                <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                                            </ul>
                                                        </div><!-- End .col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="menu-title">
                                                                <a href="#">Variations 2</a>
                                                            </div>
                                                            <ul>
                                                                <li><a href="#">Product List Item Types</a></li>
                                                                <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                                                <li><a href="category.html">3 Columns Products</a></li>
                                                                <li><a href="category-4col.html">4 Columns Products <span class="tip tip-new">New</span></a></li>
                                                                <li><a href="category-5col.html">5 Columns Products</a></li>
                                                                <li><a href="category-6col.html">6 Columns Products</a></li>
                                                                <li><a href="category-7col.html">7 Columns Products</a></li>
                                                                <li><a href="category-8col.html">8 Columns Products</a></li>
                                                            </ul>
                                                        </div><!-- End .col-lg-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .col-lg-8 -->
                                                <div class="col-lg-4">
                                                    <div class="banner">
                                                        <a href="#">
                                                            <img src="{{asset('site_assets/images/menu-banner-2.jpg')}}" alt="Menu banner">
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-lg-4 -->
                                            </div>
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li class="megamenu-container">
                                        <a href="product.html" class="sf-with-ul">Products</a>
                                        <div class="megamenu">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="menu-title">
                                                                <a href="#">Variations</a>
                                                            </div>
                                                            <ul>
                                                                <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                                <li><a href="product.html">Inner Zoom</a></li>
                                                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                                            </ul>
                                                        </div><!-- End .col-lg-4 -->
                                                        <div class="col-lg-4">
                                                            <div class="menu-title">
                                                                <a href="#">Variations</a>
                                                            </div>
                                                            <ul>
                                                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                                <li><a href="product-simple.html">Simple Product</a></li>
                                                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                                            </ul>
                                                        </div><!-- End .col-lg-4 -->
                                                        <div class="col-lg-4">
                                                            <div class="menu-title">
                                                                <a href="#">Product Layout Types</a>
                                                            </div>
                                                            <ul>
                                                                <li><a href="product.html">Default Layout</a></li>
                                                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                                            </ul>
                                                        </div><!-- End .col-lg-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .col-lg-8 -->
                                                <div class="col-lg-4">
                                                    <div class="banner">
                                                        <a href="#">
                                                            <img class="product-promo" src="{{asset('site_assets/images/menu-banner.jpg')}}" alt="Menu banner">
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-lg-4 -->
                                            </div>
                                        </div><!-- End .megamenu -->
                                    </li>
                                    <li>
                                        <a href="#" class="sf-with-ul">Pages</a>

                                        <ul>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="#">Checkout</a>
                                                <ul>
                                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Dashboard</a>
                                                <ul>
                                                    <li><a href="dashboard.html">Dashboard</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single.html">Blog Post</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="#" class="login-link">Login</a></li>
                                            <li><a href="forgot-password.html">Forgot Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="sf-with-ul">Features</a>
                                        <ul>
                                            <li><a href="#">Header Types</a></li>
                                            <li><a href="#">Footer Types</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                                </ul>
                            </nav>
                        
                            <button class="mobile-menu-toggler" type="button">
                                <i class="icon-menu"></i>
                            </button>

                            <div class="header-dropdowns">
                                <div class="header-dropdown">
                                    <a href="#">USD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropown -->

                                <div class="header-dropdown">
                                    <a href="#">ENG</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">ENG</a></li>
                                            <li><a href="#">SPA</a></li>
                                            <li><a href="#">FRE</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropown -->
                            </div><!-- End .header-dropdowns -->

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <span class="dropdown-cart-icon">
                                        <span class="cart-count">2</span>
                                    </span>
                                    <span class="dropdown-cart-text">Items</span>
                                </a>

                                <div class="dropdown-menu" >
                                    <div class="dropdownmenu-wrapper">
                                        <div class="dropdown-cart-products">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{asset('site_assets/images/products/cart/product-1.jpg')}}" alt="product">
                                                    </a>
                                                </figure>

                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Men Sunglasses</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $60.00
                                                    </span>
                                                </div><!-- End .product-details -->

                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </div><!-- End .product -->

                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{asset('site_assets/images/products/cart/product-2.jpg')}}" alt="product">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-title">
                                                        <a href="product.html">Woman Fashion Blue</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">1</span>
                                                        x $80.00
                                                    </span>
                                                </div><!-- End .product-details -->
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </div><!-- End .product -->
                                        </div><!-- End .cart-product -->

                                        <div class="dropdown-cart-total">
                                            <span>SubTotal:</span>

                                            <span class="cart-total-price">$140.00</span>
                                        </div><!-- End .dropdown-cart-total -->

                                        <div class="dropdown-cart-action">
                                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                                            <a href="checkout-shipping.html" class="btn btn-outline-primary">Checkout</a>
                                        </div><!-- End .dropdown-cart-total -->
                                    </div><!-- End .dropdownmenu-wrapper -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .dropdown -->
                        </div><!-- End .header-row -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        {{-- Main Content starts Here --}}
        <main class="main">
            @yield('content')
        </main>
        {{-- Main Content ends Here --}}

    
   <footer class="footer">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Contact Us</h4>
                                <ul class="contact-info">
                                    <li>
                                        <i class="icon-direction"></i>
                                        <span class="contact-info-label">Address:</span>123 Street Name, City, England
                                    </li>
                                    <li>
                                        <i class="icon-phone-1"></i>
                                        <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123) 456-7890</a>
                                    </li>
                                    <li>
                                        <i class="icon-envolope"></i>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock-1"></i>
                                        <span class="contact-info-label">Working Days/Hours:</span>
                                        Mon - Sun / 9:00AM - 8:00PM
                                    </li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="widget">
                                        <h4 class="widget-title">My Account</h4>

                                        <ul class="links">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="#">Orders History</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-3 -->

                                <div class="col-md-5">
                                    <div class="widget">
                                        <h4 class="widget-title">Main Features</h4>
                                        <ul class="links">
                                            <li><a href="#">Super Fast Magento Theme</a></li>
                                            <li><a href="#">1st Fully working Ajax Theme</a></li>
                                            <li><a href="#">20 Unique Homepage Layouts</a></li>
                                            <li><a href="#">Powerful Admin Panel</a></li>
                                            <li><a href="#">Mobile & Retina Optimized</a></li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-md-4">
                                    <div class="widget widget-newsletter">
                                        <h4 class="widget-title">BE THE FIRST TO KNOW</h4>

                                        <p>Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.</p>

                                        <form action="#">
                                            <input type="email" class="form-control" placeholder="Email address" required>

                                            <input type="submit" class="btn" value="Go">
                                        </form>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->

                            <div class="footer-bottom">
                                <img src="{{asset('site_assets/images/payments.png')}}" alt="payment methods" class="footer-payments">
                                <p class="footer-copyright">
                                    {{now()->year}} &copy; Copyright<br> 
                                     All Rights Reserved by {{config('app.site')}}. <br>
                                     Developed by <a class="text-warning" href="https://www.linkedin.com/in/afrasiyab-haider-8bab20135/" target="__blank">Afrasiyab Haider</a>
                                </p>

                                <div class="social-icons">
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .footer-bottom -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    {{-- News Letter --}}
    {{-- <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup --> --}}
    
    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body add-cart-box text-center">
            <p>You've just added this product to the<br>cart:</p>
            <h4 id="productTitle"></h4>
            <img src="" id="productImage" width="100" height="100" alt="adding cart image">
            <div class="btn-actions">
                <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{asset('site_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('site_assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('site_assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('site_assets/fontawesome/js/all.min.js')}}"></script>

    @stack('scripts')
    <!-- Main JS File -->
    <script src="{{asset('site_assets/js/main.min.js')}}"></script>
</body>
</html>