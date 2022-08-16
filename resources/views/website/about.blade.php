<x-website-layout>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>{{ __('locale.About') }}</h2>

                <ul>
                    <li>
                        <a href="index.html">{{ __('locale.Home') }}</a>
                    </li>
                    <li>{{ __('locale.About') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <div class="pt-100"></div>

    <!-- Start About Area -->
    @include('website.includes.about', ['about' => $about])
    <!-- End About Area -->
    
    <!-- Start Partner Area -->
    @include('website.includes.partner', ['clients', $clients])
    <!-- End Partner Area -->

    <!-- Start Video Area -->
    <!-- @include('website.includes.video') -->
    <!-- End Video Area -->

    <!-- Start Skill Area -->
    <div class="skill-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="skill-content">
                        <span>SKILLSET</span>
                        <h3>{{ __('locale.We Have A Set Of Skill With High Quality') }} <span class="overlay"></span></h3>
                    </div>

                    <div class="skill-bar" data-percentage="{{ $about->skill1_rate }}%" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">{{ $locale == 'ar' ? $about->skill1_name_ar : $about->skill1_name }}</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="{{ $about->skill2_rate }}%" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">{{ $locale == 'ar' ? $about->skill2_name_ar : $about->skill2_name }}</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter bg-D5158F">
                            <div class="progress-content bg-D5158F"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="{{ $about->skill3_rate }}%" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">{{ $locale == 'ar' ? $about->skill3_name_ar : $about->skill3_name }}</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter bg-FEB302">
                            <div class="progress-content bg-FEB302"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="{{ $about->skill4_rate }}%" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">{{ $locale == 'ar' ? $about->skill4_name_ar : $about->skill4_name }}</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter bg-A66BFF">
                            <div class="progress-content bg-A66BFF"></div>
                        </div>
                    </div>

                    <div class="skill-bar-btn" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                        <a href="#" class="default-btn">{{ __('locale.Explore More') }}</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="skill-image" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <img src="assets/images/skill/skill-1.png" alt="image" data-tilt>

                        <div class="skill-shape-1">
                            <img src="assets/images/skill/skill-shape-1.png" alt="image">
                        </div>
                        <div class="skill-shape-2">
                            <img src="assets/images/skill/skill-shape-2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="skill-bg-shape">
            <img src="assets/images/skill/skill-bg-shape.png" alt="image">
        </div>
    </div>
    <!-- End Skill Area -->

    <!-- Start Choose Area -->
    @include('website.includes.choose', ['bg_class' => 'bg-with-F5F5F5-color'])
    <!-- End Choose Area -->

    <!-- Start Team Area -->
    @include('website.includes.team')
    <!-- End Team Area -->

    
    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->
    
    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

</x-website-layout>