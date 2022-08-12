<x-website-layout class="">

    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>{{ __('locale.Our Projects') }}</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                    </li>
                    <li>{{ __('locale.Our Projects') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Projects Area -->
    <div class="projects-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>{{ __('locale.PROJECTS') }}</span>
                <h2>{{ __('locale.Our Latest') }} <b>{{ __('locale.Incredible') }}</b> {{ __('locale.Clients Projects') }} <span class="overlay"></span></h2>
            </div>

            <ul class="projects-filter-menu"> 
                <li class="filter" data-filter="all">{{ __('locale.All') }}</li>
                @if(count($services) > 0)
                @foreach($services as $service)
                <li class="filter" data-filter=".{{ Str::slug($service->name) }}">{{ $locale == 'ar' ? $service->name_ar : $service->name }}</li>
                @endforeach
                @endif
            </ul>  

            <div id="Container" class="row justify-content-center">
                @foreach($projects as $index => $project)
                <div class="col-lg-4 col-md-6 mix  {{ $services_classes }} ">
                    <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                            <a href="{{ route('project.details', ['project' => $project->id]) }}"><img src="{{ asset($project->photo) }}" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="{{ route('project.details', ['project' => $project->id]) }}">{{ $locale == 'ar' ? $project->name_ar : $project->name}}</a>
                            </h3>
                            <a href="{{ route('project.details', ['project' => $project->id]) }}" class="projects-btn">{{ __('locale.View More') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="projects-bg-shape-1">
            <img src="{{ asset('assets/images/projects/projects-bg-shape.png') }}" alt="image">
        </div>
    </div>
    <!-- End Projects Area -->

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

</x-website-layout>