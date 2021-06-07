@extends('layouts.home')
@section('content')
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="laundry/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="/"><img src="laundry/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li class="active"><a href="about">About</a></li>
                                    <li><a href="/services">Treatment</a></li>
                                    {{-- <li><a href="blog.html">Blog</a> --}}
                                        {{-- <ul class="submenu">
                                            {{-- <li><a href="blog.html">Blog</a></li> --}}
                                            {{-- <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                     @auth
                    <div class="header-btn2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                        </form>
                    </div>
                    @else
                    <a href="#" class="header-btn1"><img src="laundry/img/icon/call.png" alt="">+62 896-8536-6681</a>
                    <a href="/login" class="header-btn2">Login</a>
                    @endauth
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="laundry/img/hero/hero2.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Tentang Kik.Kinclong</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area  -->
        <section class="about-area2 section-padding40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="laundry/img/gallery/about1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>About company</h2>
                            </div>
                            <p class="mb-20">
                                The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!
                            </p>
                            <p class="mb-30">The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>

                            <a href="about" class="btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Our Process</span>
                            <h2>This is how we work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="laundry/img/icon/cleaningg.jpeg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="ordertreatment">cleaning</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="laundry/img/icon/polishing.jpeg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="ordertreatment">polishing</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="laundry/img/icon/reglue.jpeg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="oerdertreatment">re-Glue</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Want To work -->
        <!-- <section class="container">
            <section class="wantToWork-area" data-background="laundry/img/gallery/section_bg01.png">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="laundry/img/icon/call2.png" alt=""> Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
        </section> -->
        <!-- Want To work End -->
        <!--? Testimonials_start -->
        <section class="testimonials-area testimonials-overly  position-relative">
            <div class="container">
                <div class="border-bottom section-padding40 ">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <!-- testmonial-image -->
                            <div class="testmonial-nav text-center">
                                <div class="testmonial-thumb">
                                    <img src="laundry/img/gallery/testimonila1.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="laundry/img/gallery/testimonila2.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="laundry/img/gallery/testimonila3.png" alt="">
                                </div>
                                <div class="testmonial-thumb">
                                    <img src="laundry/img/gallery/testimonila2.png" alt="">
                                </div>
                            </div>
                            <div class="testmonial-item-active text-center">
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                                <!-- testimonial-single-items -->
                                <div class="testmonial-item ">
                                    <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p> - Rupaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
        <!-- <section class="services-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Fun Fact</span>
                            <h2>Company achievement</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>4000</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>300+</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>95%</span>
                                <p>The automated process starts as soon as your clothes go into the machine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-bt">
                                <img src="laundry/img/gallery/company-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Company achievement End -->
        <!--?  Map Area start  -->
        <div class="Map-area">
            <img src="laundry/img/gallery/Map.png" alt="" class="w-100">
        </div>
        <!-- Map Area End -->
    </main>
    <!-- <footer>
         Footer Start-->
        <!-- <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-footer-caption mb-50">
                       <div class="single-footer-caption mb-30">
                         logo -->
                        <!-- <div class="footer-logo mb-35">
                            <a href="index.html"><img src="laundry/img/logo/logo2_footer.png" alt=""></a> -->
                        <!-- </div>
                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                            </div>
                        </div>
                        social -->
                        <!-- <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div> --> -->
            <!-- <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Services </h4>
                        <ul>
                            <li><a href="#">- Dry Cleaning</a></li>
                            <li><a href="#">- Dry Clean</a></li>
                            <li><a href="#">- Ironing Services</a></li>
                            <li><a href="#">- Laundry Service London</a></li>
                            <li><a href="#">- Laundry App</a></li> -->
                        <!-- </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Get in touch</h4>
                        <ul> -->
                            <!-- <li class="number"><a href="#">(90) 898 789-8957</a></li> --> -->
                            <!-- <li><a href="#">laundry@567.com</a></li>
                            <li><a href="#">789/A, Green road NYC-9089</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --> 
</div>
<!-- footer-bottom area -->
<div class="footer-bottom-area section-bg2" data-background="laundry/img/gallery/footer-bg.png">
    <div class="container">
        <div class="footer-border">
           <div class="row d-flex align-items-center">
               <div class="col-xl-12 ">
                   <div class="footer-copy-right text-center">
                       <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
@endsection
