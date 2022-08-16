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
    @include('website.includes.choose', ['bg_class' => ''])
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
                        <a href="{{ route('service.details', ['service' => $service->id]) }}"><img style="width: 100%; height: 256.33px" src="{{ asset($service->photo) }}" alt="image"></a>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="{{ route('service.details', ['service' => $service->id]) }}">{{ $locale == 'ar' ? $service->name_ar : $service->name}}</a>
                        </h3>
                        <p>{{ Str::limit($locale == 'ar' ? $service->short_descr_ar : $service->short_descr, 50)}}</p>
                        <a href="{{ route('service.details', ['service' => $service->id]) }}" class="services-btn">{{ __('locale.View More') }}</a>
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