<x-website-layout>
    <!-- Start Main Banner Area -->
    <div class="main-banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-content">
                        <span data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">{{
                            __('locale.WE ARE LEADING TECHNOLOGY SOLUTIONS PROVIDING COMPANY') }}</span>
                        <h1 data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">{{
                            __('locale.We Make The Best IT Solutions') }} <span class="overlay"></span></h1>
                        <p data-aos="fade-right" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">{{
                            __('locale.overview.description') }}</p>

                        <div class="banner-btn" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700"
                            data-aos-once="true">
                            <a href="{{ route('contact') }}" class="default-btn">{{ __('locale.Get Started') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="main-banner-image">
                        <div style="width: 444px; height: 532px"></div>
                        <!-- <img style="width: 444px; height: 532px" src="{{ asset('assets/images/main-banner/banner.png') }}" alt="image" data-aos="fade-down"
                            data-aos-delay="70" data-aos-duration="700" data-aos-once="true"> -->

                        <div class="banner-circle">
                            <img src="{{ asset('assets/images/main-banner/banner-circle.png') }}" alt="image"
                                data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
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
                    @if(count($products) > 0)
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-once="true">
                        <div class="single-features-card" data-tilt>
                            <div class="features-image" data-tilt>
                                <a href="{{ route('products') }}"><img style="width: 90px; height: 96px"
                                        src="{{ asset($product->photo) }}" alt="image"></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{ route('products') }}">{{ $locale == 'ar' ? $product->name_ar :
                                        $product->name }}</a>
                                </h3>
                                <p>{{ $locale == 'ar' ? \Str::limit($product->descr_ar, '100') :
                                    \Str::limit($product->descr, '100') }}</p>
                            </div>
                            <div class="hover-content">
                                <h3>
                                    <a href="{{ route('products') }}">{{ $locale == 'ar' ? $product->name_ar :
                                        $product->name }}</a>
                                </h3>
                                <a href="{{ route('products') }}" class="features-btn" }}>{{__('locale.View More')
                                    }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->

    <!-- Start About Area -->
    @include('website.includes.about', ['about' => $about])
    <!-- End About Area -->

    <!-- Start Services Area -->
    @include('website.includes.services', ['services' => $services])
    <!-- End Services Area -->

    <!-- Start Choose Area -->
    <!-- <div class="choose-area pt-100 pb-75">
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
    </div> -->
    <!-- End Choose Area -->

    <!-- Start Choose Area -->
    @include('website.includes.choose', ['bg_class' => ''])
    <!-- End Choose Area -->

    <!-- Start Video Area -->
    @include('website.includes.video', ['about' => $about])
    <!-- End Video Area -->

    <!-- Start Testimonials Area -->
    <!-- <div class="testimonials-area ptb-100">
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
    </div> -->
    <!-- End Testimonials Area -->

    <!-- Start Team Area -->
    @include('website.includes.team', ['employees', $employees])
    <!-- End Team Area -->

    <!-- Start Partner Area -->
    @include('website.includes.partner', ['clients', $clients])
    <!-- End Partner Area -->

    <!-- Start Projects Area -->
    @include('website.includes.projects', ['projects' => $projects])
    <!-- End Projects Area -->

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

    <!-- Start Blog Area -->
    <!-- <div class="blog-area pt-100 pb-75">
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
    </div> -->
    <!-- End Blog Area -->
</x-website-layout>