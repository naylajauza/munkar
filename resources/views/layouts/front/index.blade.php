<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Ninico - Minimal eCommerce HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="front/assets/img/logo/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="front/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="front/assets/css/animate.css">
      <link rel="stylesheet" href="front/assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="front/assets/css/slick.css">
      <link rel="stylesheet" href="front/assets/css/nice-select.css">
      <link rel="stylesheet" href="front/assets/css/fontawesome.min.css">
      <link rel="stylesheet" href="front/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="front/assets/css/meanmenu.css">
      <link rel="stylesheet" href="front/assets/css/spacing.css">
      <link rel="stylesheet" href="front/assets/css/main.css">
   </head>
   <body>

      <!-- preloader -->
      <div id="preloader">
         <div class="preloader">
             <span></span>
             <span></span>
         </div>
     </div>
     <!-- preloader end  -->

      <!-- Scroll-top -->
         <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
         </button>
      <!-- Scroll-top-end-->
      @include('front.navbar')
      <!-- sidebar-menu-area -->
      @include('front.sidebar')
      <!-- sidebar-menu-area-end -->

      <!-- header-cart-start -->
      <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <div class="tpcart__product-list">
               <ul>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="front/assets/img/product/home-one/product-1.jpg" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Miko Wooden Bluetooth Speaker</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$162.80</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="front/assets/img/product/home-one/product-3.jpg" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$138.00</span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="tpcart__checkout">
               <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                  <span> Subtotal:</span>
                  <span class="heilight-price"> $300.00</span>
               </div>
               <div class="tpcart__checkout-btn">
                  <a class="tpcart-btn mb-10" href="cart.html">View Cart</a>
                  <a class="tpcheck-btn" href="checkout.html">Checkout</a>
               </div>
            </div>
         </div>
         <div class="tpcart__free-shipping text-center">
            <span>Free shipping for orders <b>under 10km</b></span>
         </div>
      </div>
      </div>
      <div class="cartbody-overlay"></div>
      <!-- header-cart-end -->

      <!-- main-area-start -->
      <main>
        @yield('content')
      </main>
      <!-- main-area-end -->

      <!-- footer-area-start -->
      @include('front.footer')
      <!-- footer-area-end -->



      <!-- JS here -->
      <script src="front/assets/js/jquery.js"></script>
      <script src="front/assets/js/waypoints.js"></script>
      <script src="front/assets/js/bootstrap.bundle.min.js"></script>
      <script src="front/assets/js/swiper-bundle.js"></script>
      <script src="front/assets/js/slick.js"></script>
      <script src="front/assets/js/magnific-popup.js"></script>
      <script src="front/assets/js/nice-select.js"></script>
      <script src="front/assets/js/counterup.js"></script>
      <script src="front/assets/js/wow.js"></script>
      <script src="front/assets/js/isotope-pkgd.js"></script>
      <script src="front/assets/js/imagesloaded-pkgd.js"></script>
      <script src="front/assets/js/countdown.js"></script>
      <script src="front/assets/js/ajax-form.js"></script>
      <script src="front/assets/js/meanmenu.js"></script>
      <script src="front/assets/js/jquery.knob.js"></script>
      <script src="front/assets/js/main.js"></script>
   </body>
</html>
