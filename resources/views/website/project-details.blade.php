<x-website-layout class="">

    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>{{ __('locale.Project Details') }}</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}">{{ __('locale.Project Details') }}</a>
                    </li>
                    <li>{{ $locale == 'ar' ? $project->name_ar : $project->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Projects Details Area -->
    <div class="projects-details-area ptb-100">
        <div class="container">
            <div class="projects-details-desc">
                <div class="article-projects-with-info">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="projects-info-image">
                                <img src="{{ asset($project->photo) }}" alt="image">

                                <div class="info-shape">
                                    <img src="{{ asset('assets/images/projects-details/circle-shape.png') }}" alt="image">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6">
                            <div class="projects-info-content">
                                <span>{{ __('locale.PROJECT DETAILS') }}</span>
                                <h3>Messaging App <span class="overlay"></span></h3>

                                <ul class="info-list">
                                    <li><span>{{ __('locale.Category') }}:</span> {{ $locale == 'ar' ? $project->service->name_ar : $project->service->name }}</li>
                                    <li><span>{{ __('locale.Client') }}:</span> {{ $locale == 'ar' ? $project->client->name_ar : $project->client->name }}</li>
                                    <li><span>{{ __('locale.Duration') }}:</span> {{ date('M Y', strtotime($project->start_date)) }} - {{ date('M Y', strtotime($project->finish_date)) }}</li>
                                    <li><span>{{ __('locale.Location') }}:</span> {{ $locale == 'ar' ? $project->location_ar : $project->location }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-projects-content">
                    {!! $project->descr !!}
                </div>
            </div>
        </div>

        <div class="projects-details-shape">
            <img src="{{ asset('assets/images/projects-details/line-shape.png') }}" alt="image">
        </div>
    </div>
    <!-- End Projects Details Area -->

    <!-- Start Gallery Area -->
    <section class="gallery-area pt-100 pb-75">
        <div class="container">
            <div class="row">
                @if(count($project->images) > 0)
                @foreach($project->images as $img)
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-gallery-item">
                        <a data-fancybox="gallery" href="{{ asset($img->path) }}">
                            <img src="{{ asset($img->path) }}" alt="{{ $img->title }}">
                        </a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End Gallery Area -->

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

</x-website-layout>