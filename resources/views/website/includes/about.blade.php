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
                            <a href="{{ route('about') }}" class="default-btn">{{ __('locale.Know More About Us') }}</a>
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