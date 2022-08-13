<x-website-layout>
    <!-- Start Main Banner Area -->
    <div class="main-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-content">
                        <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">{{ __('locale.WE ARE LEADING TECHNOLOGY SOLUTIONS PROVIDING COMPANY') }}</span>
                        <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">{{ __('locale.We Make The Best IT Solutions') }}  <span class="overlay"></span></h1>
                        <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">{{  __('locale.overview.description') }}</p>
                        
                        <div class="banner-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                            <a href="contact.html" class="default-btn">{{ __('locale.Get Started') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-image">
                        <img src="{{ asset('assets/images/main-banner/banner.png') }}" alt="image" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">

                        <div class="banner-circle">
                            <img src="{{ asset('assets/images/main-banner/banner-circle.png') }}" alt="image" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-shape-1">
            <img src="{{ asset('assets/images/main-banner/banner-shape-1.png') }}" alt="image">
        </div>
        <div class="banner-shape-2">
            <img src="{{ asset('assets/images/main-banner/banner-shape-2.png') }}" alt="image">
        </div>
        <div class="banner-dot-shape-1">
            <img src="{{ asset('assets/images/main-banner/dot-1.png') }}" alt="image">
        </div>
        <div class="banner-dot-shape-2">
            <img src="{{ asset('assets/images/main-banner/dot-2.png') }}" alt="image">
        </div>
        <div class="banner-dot-shape-3">
            <img src="{{ asset('assets/images/main-banner/dot-3.png') }}" alt="image">
        </div>
        <div class="banner-dot-shape-4">
            <img src="{{ asset('assets/images/main-banner/dot-4.png') }}" alt="image">
        </div>
        <div class="banner-dot-shape-5">
            <img src="{{ asset('assets/images/main-banner/dot-5.png') }}" alt="image">
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Features Area -->
    <div class="features-area pb-75">
        <div class="container">
            <div class="features-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        <div class="single-features-card" data-tilt>
                            <div class="features-image" data-tilt>
                                <a href="services-details.html"><img src="{{ asset('assets/images/features/features-1.png') }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="services-details.html">{{ __('locale.Branding Strategy') }}</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr</p>
                            </div>
                            <div class="hover-content">
                                <h3>
                                    <a href="services-details.html">{{ __('locale.Branding Strategy') }}</a>
                                </h3>
                                <a href="services-details.html" class="features-btn">{{__('locale.View More') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        <div class="single-features-card" data-tilt>
                            <div class="features-image" data-tilt>
                                <a href="services-details.html"><img src="{{ asset('assets/images/features/features-2.png') }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="services-details.html">{{ __('locale.Mobile Apps') }}</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr</p>
                            </div>
                            <div class="hover-content">
                                <h3>
                                    <a href="services-details.html">{{ __('locale.Mobile Apps') }}</a>
                                </h3>
                                <a href="services-details.html" class="features-btn">{{__('locale.View More') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                        <div class="single-features-card" data-tilt>
                            <div class="features-image" data-tilt>
                                <a href="services-details.html"><img src="{{ asset('assets/images/features/features-3.png') }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="services-details.html">{{ __('locale.Graphic Design') }}</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr</p>
                            </div>
                            <div class="hover-content">
                                <h3>
                                    <a href="services-details.html">{{ __('locale.Graphic Design') }}</a>
                                </h3>
                                <a href="services-details.html" class="features-btn">{{ __('locale.View More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start About Area -->
    <div class="about-area pb-75">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-image" data-tilt>
                        <img src="{{ asset('assets/images/about/about-3.jpg') }}" alt="image" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="about-bg-text">ABOUT US</div>
                        <span>{{ __('locale.WHO WE ARE') }}</span>
                        <h3>{{ __('locale.about.title') }} <span class="overlay"></span></h3>
                        <p>{{ $locale == 'ar' ? $about->descr_ar : $about->descr }}</p>
                    </div>
                </div>
            </div>

            <div class="about-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                            <h3>{{ __('locale.Our Vision') }}</h3>
                            <p>{{ $locale == 'ar' ? $about->vision_ar : $about->vision }}</p>
                            
                            <div class="about-btn">
                                <a href="about-style-1.html" class="default-btn">{{ __('locale.Know More About Us') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                            <h3>{{ __('locale.Our Mission') }}</h3>
                            <p>{{ $locale == 'ar' ? $about->mission_ar : $about->mission }}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                            <div class="card-image" data-tilt>
                                <img src="{{ asset('assets/images/about/about-4.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-circle-shape">
            <img src="{{ asset('assets/images/about/about-circle.png') }}" alt="image">
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Services Area -->
    @include('website.includes.services', ['services' => $services])
    <!-- End Services Area -->

    <!-- Start Choose Area -->
    <div class="choose-area pt-100 pb-75">
        <div class="container">
            <div class="section-title section-style-two">
                <div class="section-bg-text">PROCESS</div>
                <span>{{ __('locale.WORK PROCESS') }}</span>
                <h2>{{ __('locale.We Follow Four Simple Steps') }} <span class="overlay"></span></h2>
                <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="{{ asset('assets/images/choose/choose-1.png') }}" alt="image"></a>

                            <div class="number">1</div>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="#">Discussion</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="{{ asset('assets/images/choose/choose-2.png') }}" alt="image"></a>

                            <div class="number">2</div>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="#">Testing & Trying</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="{{ asset('assets/images/choose/choose-3.png') }}" alt="image"></a>

                            <div class="number">3</div>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="#">Ideas & Concept</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="{{ asset('assets/images/choose/choose-4.png') }}" alt="image"></a>

                            <div class="number">4</div>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="#">Execute & Install</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Area -->

    <!-- Start Video Area -->
    <div class="video-area-box">
        <div class="container">
            <div class="video-view-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <div class="video-image">
                    <img src="{{ asset('assets/images/video/video.jpg') }}" alt="image">
                </div>

                <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                    <i class="ri-play-mini-fill"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Video Area -->

    <!-- Start Testimonials Area -->
    <div class="testimonials-area ptb-100">
        <div class="container-fluid">
            <div class="section-title section-style-two">
                <div class="section-bg-text">FEEDBACK</div>
                <span>{{ __('locale.TESTIMONIALS') }}</span>
                <h2>{{ __('locale.Our Clients Feedback') }} <span class="overlay"></span></h2>
            </div>
            
            <div dir="ltr" class="testimonials-slides owl-carousel owl-theme">
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="single-testimonials-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <p>We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</p>

                    <div class="info-item-box">
                        <img src="{{ asset('assets/images/testimonials/testimonials-4.jpg') }}" class="rounded-circle" alt="image">
                        <h4>Bradly Doe, <span>Founder of Medizo</span></h4>
                        <ul class="rating-list">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-line"></i></li>
                        </ul>
                    </div>
                </div>

                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif  class="single-testimonials-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <p>The professionalism, collaboration and the design they come up with is pheno-menal. Thanks a lot the Coze Team.</p>

                    <div class="info-item-box">
                        <img src="{{ asset('assets/images/testimonials/testimonials-5.jpg') }}" class="rounded-circle" alt="image">
                        <h4>Daniel John, <span>Solit Team</span></h4>
                        <ul class="rating-list">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-line"></i></li>
                        </ul>
                    </div>
                </div>

                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif  class="single-testimonials-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <p>We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</p>

                    <div class="info-item-box">
                        <img src="{{ asset('assets/images/testimonials/testimonials-6.jpg') }}" class="rounded-circle" alt="image">
                        <h4>Jennifer Smith, <span>Spix Team</span></h4>
                        <ul class="rating-list">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-line"></i></li>
                        </ul>
                    </div>
                </div>

                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif  class="single-testimonials-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <p>The professionalism, collaboration and the design they come up with is pheno-menal. Thanks a lot the Coze Team.</p>

                    <div class="info-item-box">
                        <img src="{{ asset('assets/images/testimonials/testimonials-7.jpg') }}" class="rounded-circle" alt="image">
                        <h4>Sarp Karahan, <span>Benzo Team</span></h4>
                        <ul class="rating-list">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-line"></i></li>
                        </ul>
                    </div>
                </div>

                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif  class="single-testimonials-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                    <p>We look and sound so good! I am still in shock at how smooth this process was. The professionalism, collaboration and the design they come up is great.</p>

                    <div class="info-item-box">
                        <img src="{{ asset('assets/images/testimonials/testimonials-8.jpg') }}" class="rounded-circle" alt="image">
                        <h4>Jane Ronan, <span>Lebu Team</span></h4>
                        <ul class="rating-list">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-line"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Projects Area -->
    @include('website.includes.projects', ['projects' => $projects])
    <!-- End Projects Area -->

    <!-- Start Partner Area -->
    @include('website.includes.partner')
    <!-- End Partner Area -->

    <!-- Start Team Area -->
    <div class="team-area pt-100 pb-75">
        <div class="container">
            <div class="section-title section-style-two">
                <div class="section-bg-text">TEAM</div>
                <span>{{ __('locale.TEAM MEMBER') }}</span>
                <h2>{{ __('locale.Our Expert IT Consultants') }} <span class="overlay"></span></h2>
                <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt>
                            <img src="{{ asset('assets/images/team/team-1.png') }}" alt="image">

                            <ul class="team-social">
                                <li>
                                    <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/?lang=en" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>Johny Smith</h3>
                            <span>President & CEO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt>
                            <img src="{{ asset('assets/images/team/team-2.png') }}" alt="image">

                            <ul class="team-social">
                                <li>
                                    <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/?lang=en" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>Jennifer Walter</h3>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt>
                            <img src="{{ asset('assets/images/team/team-3.png') }}" alt="image">

                            <ul class="team-social">
                                <li>
                                    <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/?lang=en" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>Jems Rodrigez</h3>
                            <span>UI UX Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt>
                            <img src="{{ asset('assets/images/team/team-4.png') }}" alt="image">

                            <ul class="team-social">
                                <li>
                                    <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/?lang=en" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>Deren Bravoo</h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>{{ __('locale.ARTICLE') }}</span>
                <h2>{{ __('locale.Read Our Latest Blog') }} <span class="overlay"></span></h2>
            </div>

            <div dir="ltr" class="blog-slides owl-carousel owl-theme">
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">9th July, 2022</div>
                                <h3>
                                    <a href="single-blog-1.html">How Technology Dominate In The new World In 2022</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">{{ __('locale.View More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="blog-card" data-aos="fade-up" data-aos-delay="890" data-aos-duration="900" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">7th July, 2022</div>
                                <h3>
                                    <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2022</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">{{ __('locale.View More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="blog-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">9th July, 2022</div>
                                <h3>
                                    <a href="single-blog-1.html">How Technology Dominate In The new World In 2022</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">{{ __('locale.View More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="blog-card" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blog-image">
                                <a href="single-blog-1.html"><img src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt="image"></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-content">
                                <div class="date">7th July, 2022</div>
                                <h3>
                                    <a href="single-blog-1.html">Top 10 Most Famous Technology Trend In 2022</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eir m od tempor invidunt ut labore.</p>
                                <a href="single-blog-1.html" class="blog-btn">{{ __('locale.View More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->
</x-website-layout>
