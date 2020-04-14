@extends('layouts.main')
@section('content')
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{asset('/img/eldohub/home.png')}}" width="" height="80%">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption" data-background="{{asset('/img/safe_industery/color_bg1.png')}}">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" >SUPPORTING RURAL WOMEN IN STEM!</h1>
                                    <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                        <a href="industries.html" class="btn hero-btn">Our Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Services Area Start -->
        <div class="services-area d-flex justify-content-lg-between">
            <div class="single-services s-bg mb-30">
                <div class="services-icon">
                    <img src="{{asset('/img/icon/service_outreach.png')}}" alt="" height="70px" width="70px" >
                </div>
                <div class="services-caption">
                    <h4>School Outreach</h4>
                    <p>Our School Outreach program informs girls and motivates them for a career in STEM by connecting the industry context with school.</p>
                </div>
                <div class="services-btn">
                    <a href="industries.html" class="arrow-btn"><img src="{{asset('/img/icon/arrow_icon.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-services mb-30">
                <div class="services-icon">
                    <img src="{{asset('/img/icon/service_training.png')}}" alt="" height="70px" width="70px">
                </div>
                <div class="services-caption">
                    <h4>Training Bootcamp</h4>
                    <p>Supports rural women and girls between the age of 18 to 35 with skills needed to gain entry into the emerging ICT industry.</p>
                </div>
                <div class="services-btn">
                    <a href="industries.html" class="arrow-btn"><img src="{{asset('/img/icon/arrow_icon.png')}}" alt=""></a>
                </div>
            </div>
            <div class="single-services s-bg mb-30">
                <div class="services-icon">
                    <img src="{{asset('/img/icon/service_mentor.png')}}" alt="" height="70px" width="70px">
                </div>
                <div class="services-caption">
                    <h4>Mentorship</h4>
                    <p>Inspiring, encouraging and supporting more women and girls in rural areas to pursue careers in STEM and excel in them.</p>
                </div>
                <div class="services-btn">
                    <a href="industries.html" class="arrow-btn"><img src="{{asset('/img/icon/arrow_icon.png')}}" alt=""></a>
                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!-- Safe Industery Start -->
        <div class="safe-industery-area section-padd-top30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md pr-0">
                        <div class="safe-caption pt-10 mb-40">
                            <h2>Northrift Women in STEM Inclusion Project!</h2>
                            <p class="safe-pera-one">This project encourages, supports and inspires girls and women to consider careers in STEM and help them to excel in the tech field .</p>
                            <p  class="safe-pera-two">These women and girls gains skills for meaniful emmployment; this enables them to earn a living, support themselves and eventually their families.</p>
                            <p  class="safe-pera-three"> We also look to demistify the myth that technology is a thing for the urban children and that STEM is a reserve for the boys.</p>
                            <!-- btn -->
                            <a href="industries.html" class="btn">Our Services</a>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 pl-0">
                        <div class="safe-caption-right">
                            <div class="safe-img">
                                <img src="{{asset('/img/eldohub/mission.png')}}" alt="">
                            </div>
                            <!-- img TOP caption -->
                            <div class="safe-alert-box">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 d-none d-sm-block">

                                        <div class="safe-alert" data-background="{{asset('/img/safe_industery/color_bg1.png')}}">
                                            <!-- <img src="{{asset('/img/icon/aleart_icon.png')}}" alt=""> -->
                                            <h4>Our Mission</h4>
                                            <p>Sensitize and increase the use of technology among rural and semi-rural girls in their activities.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Safe Industery End -->

        <!-- Gallery Start-->
        <div class="gallery-area">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('/img/gallery/gallery_11.png')}}" alt="" width="480px" height="750%">
                                </div>
                                <div class="g-caption1">
                                    <span>01.</span>
                                    <h4>A participant in in Endo, Elgeyo Marakwet</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>01.</span>
                                    <h4>A participant in in Endo, Elgeyo Marakwet</h4>
                                    <p>Caren(not her real name), pitching her idea during our day two(2).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('/img/gallery/gallery_10.png')}}" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>02.</span>
                                    <h4>Zipeta and Purity </h4>
                                </div>
                                <div class="g-caption2">
                                    <span>02.</span>
                                    <h4>Zipeta aand Purity</h4>
                                    <p> Our volunteers  posing for photo after Northrift women in STEM briefing in Eldhub. </p>
                                    <!-- <a href="work.html" class="read-btn">Read more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('/img/gallery/gallary_1.png')}}" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>03.</span>
                                    <h4>Annate, Paul and Magdaline</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>03.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p> Annate and Paul during their visit to Eldhub.</p>
                                    <!-- <a href="work.html" class="read-btn">Read more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="{{asset('/img/eldohub/lab.png')}}" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>04.</span>
                                    <h4>Participants in Kapsabet,Nandi county</h4>
                                    <!-- <h4>Floride Chemicals Factory</h4> -->
                                </div>
                                <div class="g-caption2">
                                    <span>04.</span>
                                    <h4>Participants in Kapsabet,Nandi county</h4>
                                    <p>VSO members participating in our day one HTML coding lesson in Kapsabet. </p>
                                    <!-- <a href="work.html" class="read-btn">Read more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End-->


        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
               <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">

                                        <p>our aim is to deflate the myth that women are not good in STEM by teaching women how ICT work, provide them with faundemental skills necessary to engage with technology, and teach the theoritical understanding they need to solve problems using ICT.</p>
                                    </div>
                                    <!-- founder -->

                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="{{asset('/img/icon/testimonial.png')}}" alt="">
                                        <p>Logisti Group is a representative logistics operator providing full range of ser
                                            of customs clearance and transportation worl.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="{{asset('/img/testmonial/Homepage_testi.png')}}" alt="">
                                        </div>
                                       <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Co Founder</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- David Droga start -->
        <div class="david-droga-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-david -->
                        <div class="single-david mb-30">
                            <div class="david-img">
                                <img src="{{asset('/img/Nandi/nandi_1.jpg')}}" alt="">
                            </div>
                            <div class="david-captoin">
                                <ul class="david-info">
                                    <li>November 24, 2020 </li>
                                    <li> Manufacturing</li>
                                </ul>
                                <h2><a href="single-blog.html">David Droga Still Has Faith Advertising Dorga</a></h2>
                                <a href="single-blog.html" class="d-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-david -->
                        <div class="single-david mb-30">
                            <div class="david-img">
                                <img src="{{asset('/img/iten/iten_2.jpg')}}" alt="">
                            </div>
                            <div class="david-captoin">
                                <ul class="david-info">
                                    <li>November 24, 2020 </li>
                                    <li> Manufacturing</li>
                                </ul>
                                <h2><a href="single-blog.html">David Droga Still Has Faith Advertising Dorga</a></h2>
                                <a href="single-blog.html" class="d-btn">Read more</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- David Droga End -->

        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption">
                            <h2>Want To Support<br> women/girls? Hit The Button.</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="#" class="white-btn">Support Us</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection