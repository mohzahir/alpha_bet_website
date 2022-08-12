<x-website-layout class="">

    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>{{ __('locale.Our Services') }}</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                    </li>
                    <li>{{ __('locale.Our Services') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Choose Area -->
    <div class="choose-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>{{ __('locale.KEY FEATURES') }}</span>
                <h2>{{ __('locale.We Help You To') }} <b>{{ __('locale.Increase') }}</b> {{ __('locale.Your Sale Through Solutions') }} <span class="overlay"></span></h2>
                <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
            </div>

            <div class="row">
                @if(count($featured_services) > 0)
                @foreach($featured_services as $service)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="{{ route('service.details', ['service' => $service->id]) }}"><img style="width: 140px; height: 150px" src="{{ asset($service->photo) }}" alt="image"></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="{{ route('service.details', ['service' => $service->id]) }}">{{ $locale == 'ar' ? $service->name_ar : $service->name}}</a>
                            </h3>
                            <p>{{ Str::limit($locale == 'ar' ? $service->short_descr_ar : $service->short_descr, 80) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>

        <div class="choose-shape-1">
            <img src="{{ asset('assets/images/choose/choose-shape.png') }}" alt="image">
        </div>
        <div class="choose-shape-2">
            <img src="{{ asset('assets/images/choose/choose-shape-2.png') }}" alt="image">
        </div>
    </div>
    <!-- End Choose Area -->
    
    <!-- Start Services Area -->
    <div class="services-area-style-two ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <span>{{ __('locale.SERVICES') }}</span>
                <h2>{{ __('locale.We Provide the Best Quality') }} <b>{{ __('locale.Services') }}</b> <span class="overlay"></span></h2>
                <p>We are technology solutions providing company all over the world doing over 40 years. lorem ipsum dolor sit amet.</p>
            </div>
            
            <div dir="ltr" class="services-slides-two owl-carousel owl-theme">
                @if(count($services) > 0)
                @foreach($services as $service)
                <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="services-item">
                    <div class="services-image">
                        <a href="{{ route('service.details', ['service' => $service->id]) }}"><img src="{{ asset($service->photo) }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="{{ route('service.details', ['service' => $service->id]) }}">{{ $locale == 'ar' ? $service->name_ar : $service->name}}</a>
                        </h3>
                        <p>{{ Str::limit($locale == 'ar' ? $service->short_descr_ar : $service->short_descr, 50)}}</p>
                        <a href="{{ route('service.details', ['service' => $service->id]) }}" class="services-btn">View More</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>

        <div class="services-shape-1">
            <img src="assets/images/services/services-shape-1.png" alt="image">
        </div>
        <div class="services-shape-2">
            <img src="assets/images/services/services-shape-2.png" alt="image">
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

</x-website-layout>