<x-website-layout>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-4 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>{{ __('locale.Service Details') }}</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">{{ __('locale.Services') }}</a>
                    </li>
                    <li>{{ $locale == 'ar' ? $service->name_ar : $service->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
    
    <!-- Start Services Details Area -->
    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="services-details-desc">
                <div class="article-services-image">
                    <img src="{{ asset($service->photo) }}" style="width: 1050px; height: 410.15px" alt="image">
                </div>
                <div class="article-services-content">
                    <h3>{{ $locale == 'ar' ? $service->name_ar : $service->name }}</h3>
                    
                    {!! $locale == 'ar' ? $service->descr_ar : $service->descr !!}
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Services Area -->
    @include('website.includes.services', ['services' => $services])
    <!-- End Services Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

</x-website-layout>
