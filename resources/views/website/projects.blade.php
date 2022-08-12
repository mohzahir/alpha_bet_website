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

    

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

</x-website-layout>