<!--
  ~ Copyright (c), Onnorokom Web Services Ltd (OWSL) and/or its affiliates. All rights reserved.
  ~ OWSL PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
  -->

  <!DOCTYPE html>
  <html lang="en">
  
  
  <!-- Mirrored from techshopbd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 13:23:57 GMT -->
  <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="canonical" href="index.html" />
      <meta name="description" content="The First &amp; Largest Online Shop in Bangladesh for Robotic and Electronic Components. Buy products with warranty &amp; get free tech support and Print pcb in BD">
      <meta name="keywords" content="Robotics, Sensor, Arduino, raspberry pi, Component, Microcontroller, Miscellaneous, Accessories, Development Board, Display, General IC, Home Automation, Kits, Wireless, Pcb Print Bangladesh">
      <meta name="google-site-verification" content="5qRc4qaWQyr7bU-ombFDxDqMPM4fKGdTHOhvHKk2K7Q">
      <title>TechShopbd.com | Largest Robotics-Electronics Shop in Bangladesh</title>
      <link rel="stylesheet" href="{{ asset('assets/frontend/css/common-desktop.bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.rateyo.min.css') }}">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
          var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
          (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/6058a375067c2605c0bb0a9a/1f1h70vsp';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
          })();
      </script>
      <!--End of Tawk.to Script-->
      <!-- Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40929689-5"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-40929689-5');
      </script>
      <!-- End Google Analytics -->
      <!-- Facebook Pixel Code -->
      <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,"script",
          "{{ asset('assets/frontend/js/fbevents.js') }}");
          fbq('init', '912426599590419');
          fbq('track', 'PageView');
      </script>
      <!-- <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=912426599590419&ev=PageView&noscript=1"
      /></noscript> -->
      <!-- End Facebook Pixel Code -->
  </head>
  
  <body>
  


    <header class="header-section">
        <section class="header-section-fixed">
           <div class="content-section">
              <div class="d-flex justify-content-between align-items-center">
                 <a href="/" class="ml-0"><img src="{{ asset('image/frontLogos/logo.png') }}" alt="logo" class="img-fluid"></a>
                 <form class="search-input w-50">
                    <div class="input-group">
                       <!-- <div class="input-group-prepend">
                          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Categories</button>
                          </div>
                          <div role="separator" class="dropdown-divider separator"></div> -->
                       <input autocomplete="off" type="search" id="js--search-option" placeholder="Search by product name" value="" class="form-control">
                       <button type="button" class="btn btn-search" id="go-to-search-page"><i class="fa fa-search text-light"></i></button>
                       <div class="search-option position-absolute d-none" id="js--search-autocomplete"></div>
                    </div>
                 </form>
                 <div class="user mr-0">
                    <a href="login.html" class="user-login">
                    <span class="icon-wrapper">
                    <img src="{{ asset('image/frontLogos/user-icon.png') }}" alt="user_icon" class="img-fluid">
                    </span>
                    <span >Login</span>
                    </a>
                 </div>
              </div>
           </div>
        </section>
        <div class="navbar-section">
           <div class="content-section">
              <nav class="navbar navbar-expand">
                 <ul class="navbar-nav">
                    <li class="nav-item active">
                       <a href="/" class="nav-link text-uppercase">Home</a>
                    </li>
                    <li class="nav-item">
                       <a href="login.html" class="nav-link text-uppercase">PCB</a>
                    </li>
                    <li class="nav-item">
                       <a href="training" class="nav-link text-uppercase">Training</a>
                    </li>
                    <!--<li class="nav-item">
                       <a href="" class="nav-link text-uppercase">Corporate Order</a>
                       </li>
                       <li class="nav-item">
                       <a href="" class="nav-link text-uppercase">International Sourcing</a>
                       </li> -->
                    <li class="nav-item">
                       <a href="https://blog.techshopbd.com/" class="nav-link text-uppercase" target="_blank">Blog</a>
                    </li>
                 </ul>
              </nav>
           </div>
        </div>
     </header>
     
     
  
  
  @yield('content')

  <section class="help-section">
    <div class="content-section">
        <div class="d-flex justify-content-between align-items-center">
            <div class="media">
                <img src="{{ asset('image/frontLogos/call-icon.png') }}" alt="icon" class="img-fluid" width="40px">
                <div class="media-body ml-3">
                    <p class="title text-uppercase mb-0">Help: <span>09678110110</span></p>
                    <p class="small">09.00am - 08.00pm (7 days a week)</p>
                </div>
            </div>
            <div class="media">
                <img src="{{ asset('image/frontLogos/cash-icon.png') }}" alt="icon" class="img-fluid" width="45px">
                <div class="media-body ml-3">
                    <p class="title text-uppercase mb-0">Pay cash on delivery</p>
                    <p class="small">Pay cash at your doorstep</p>
                </div>
            </div>
            <div class="media">
                <img src="{{ asset('image/frontLogos/service-icon.png') }}" alt="icon" class="img-fluid" width="45px">
                <div class="media-body ml-3">
                    <p class="title text-uppercase mb-0">Service</p>
                    <p class="small">All over Bangladesh</p>
                </div>
            </div>
            <div class="media">
                <img src="{{ asset('image/frontLogos/return-icon.png') }}" alt="icon" class="img-fluid" width="">
                <div class="media-body ml-3">
                    <p class="title text-uppercase mb-0">Warranty and Replacement</p>
                    <p class="small">Up to 1 Year</p>
                </div>
            </div>
        </div>
    </div>
    </section>
  
      <footer class="footer-section">
      <div class="content-section">
          <div class="d-flex text-left">
              <div class="footer-contact ml-0">
                  <img src="{{ asset('image/frontLogos/logo.png') }}" alt="logo" class="img-fluid">
                  <div class="d-flex pt-4">
                      <img src="{{ asset('image/frontLogos/phone-icon.png') }}" alt="icon" class="mr-0 ml-0">
                      <span class="ml-2">+88 09678110110</span>
                  </div>
                  <div class="d-flex pt-4">
                      <img src="{{ asset('image/frontLogos/mail-icon.png') }}" alt="icon" class="mr-0 ml-0">
                      <span class="ml-2"><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="6f090a0a0b0d0e0c042f1b0a0c071c07001f0d0b410c0002">[email&#160;protected]</a></span>
                  </div>
                  <div class="d-flex pt-4">
                      <img src="{{ asset('image/frontLogos/address-icon.png') }}" alt="icon" class="mr-0 ml-0">
                      <span class="ml-2">Techshopbd<br/>
                      ARA Bhaban, 39, Kazi Nazrul Islam Avenue<br/>
                      Karwan Bazar, Dhaka-1215<br/>
                      Bangladesh</span>
                  </div>
                  <div class="social-section">
                      <p class="title">Stay Connected</p>
                      <div class="social-icon">
                          <a href="https://www.facebook.com" target="_blank">
                              <i class="fa fa-facebook-square"></i>
                          </a>
                          <a href="https://www.linkedin.com/in/rahemul-islam" target="_blank">
                              <i class="fa fa-linkedin-square"></i>
                          </a>
                          <a href="https://www.youtube.com" target="_blank">
                              <i class="fa fa-youtube-square" style="color: #D5452D;"></i>
                          </a>
                          <a href="https://instagram.com" target="_blank">
                              <i class="fa fa-instagram"></i>
                          </a>
                          <!--<a href="">
                              <i class="fa fa-twitter-square"></i>
                          </a>
                          <a href="">
                              <i class="fa fa-google-plus-square"></i>
                          </a>
                          <a href="">
                              <i class="fa fa-linkedin-square"></i>
                          </a>
                          <a href="">
                              <i class="fa fa-pinterest-square"></i>
                          </a> -->
                      </div>
                  </div>
              </div>
              <div class="footer-menu">
                  <p class="title">Home</p>
                  <ul class="footer-menu-item">
                      <li><a href="login.html"><i class="fa fa-circle-o"></i>PCB</a></li>
                      <li><a href="training.html"><i class="fa fa-circle-o"></i>Training</a></li>
                      <li><a href="https://blog.techshopbd.com/"><i class="fa fa-circle-o"></i>Blog</a></li>
                  </ul>
  
              </div>
              <div class="footer-menu">
                  <p class="title">Policies</p>
                  <ul class="footer-menu-item">
                      <li><a href="terms-conditions"><i class="fa fa-circle-o"></i>Terms & conditions</a></li>
                      <li><a href="privacy-policy"><i class="fa fa-circle-o"></i>Privacy policy</a></li>
                      <li><a href="warranty-and-replacement"><i class="fa fa-circle-o"></i>Warranty & replacement</a></li>
                  </ul>
                  <p class="title mt-3">Get to Know Us</p>
                  <ul class="footer-menu-item">
                      <li><a href="about-us"><i class="fa fa-circle-o"></i>About us</a></li>
                  </ul>
              </div>
              <div class="footer-menu">
                  <p class="title">Support</p>
                  <ul class="footer-menu-item">
                      <li><a href="contact-us.html"><i class="fa fa-circle-o"></i>Contact us</a></li>
                      <li><a href="order-place"><i class="fa fa-circle-o"></i>How to place order</a></li>
                      <li><a href="sourcing-product"><i class="fa fa-circle-o"></i>Sourcing new product</a></li>
                      <li><a href="technical-assistance"><i class="fa fa-circle-o"></i>Technical assistance</a></li>
                      <li><a href="faq"><i class="fa fa-circle-o"></i>FAQ</a></li>
                  </ul>
              </div>
              <div class="fb-page mr-0" data-href="https://www.facebook.com/TechShop-BD" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
          </div>
      </div>
  <!--    <hr />-->
  <!--    <div class="content-section payment-option">-->
  <!--        <div class="d-flex align-items-center">-->
  <!--            <p class="title text-uppercase mr-0">Payment options</p>-->
  <!--            <div class="options ml-5">-->
  <!--                <img th:src="@{/dist/common/images/payment-icon-1.png}" alt="payment_icon" class="img-fluid">-->
  <!--                <img th:src="@{/dist/common/images/payment-icon-2.png}" alt="payment_icon" class="img-fluid pl-3">-->
  <!--                <img th:src="@{/dist/common/images/payment-icon-3.png}" alt="payment_icon" class="img-fluid pl-3">-->
  <!--                <img th:src="@{/dist/common/images/payment-icon-4.png}" alt="payment_icon" class="img-fluid pl-3">-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--    <hr />-->
  <!--    <div class="content-section footer-info text-center">-->
  <!--        <p class="">Techshopbd is one sort of your constant helping hand on whom you can rely, with no doubt, for any technological support and related assistance. To be more precise, it is an online retail store that sells the electronic bits and pieces needed for a competent electronic project. We don't discriminate among the bits and pieces on their sizes and range of use. Everything, that has even a minimum use at the project, is also considered with equal significance. </p>-->
  <!--    </div>-->
      <div class="text-center copyright-text">
          <p>&copy; 2012-21 Techshop Bangladesh - <a href="terms-conditions.html">Terms</a> - <a href="privacy-policy.html">Privacy</a></p>
      </div>
  </footer>
  
      <div id="fb-root"></div>
  
      <script data-cfasync="false" src="{{ asset('assets/frontend/js/email-decode.min.js') }}"></script><script async defer crossorigin="anonymous" src="{{ asset('assets/frontend/js/sdk.js') }}"></script>
      <script src="{{ asset('assets/frontend/js/common-desktop.bundle.js') }}"></script>
      <script src="{{ asset('assets/frontend/js/home-desktop.bundle.js') }}"></script>
  
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
          var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
          (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/6058a375067c2605c0bb0a9a/1f1h70vsp';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
          })();
      </script>
      
      <!--End of Tawk.to Script-->
  
  </body>
  
  <!-- Mirrored from techshopbd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2022 13:25:33 GMT -->
  </html>