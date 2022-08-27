<div class="projects-area style-two-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="projects-section-content" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="projects-bg-text">WORK</div>
                    <span>{{ __('locale.PROJECTS') }}</span>
                    <h3>{{ __('locale.Our Latest Incredible Clients Project') }} <span class="overlay"></span></h3>
                    <p>{{ __('locale.projects.descr') }}</p>
                    <div class="projects-section-btn">
                        <a href="projects.html" class="default-btn">{{ __('locale.Explore All Projects') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div dir="ltr" class="projects-slides-two owl-carousel owl-theme">
                    @if(count($projects) > 0)
                    @foreach($projects as $project)
                    <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="projects-item bg-F2F1F3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="projects-image">
                            <a href="{{ route('project.details', ['project' => $project->id]) }}"><img style="width: 100%; height: 252.28px" src="{{ asset($project->photo) }}" alt="image"></a>
                        </div>
                        <div class="projects-content">
                            <h3>
                                <a href="{{ route('project.details', ['project' => $project->id]) }}">{{ $locale == 'ar' ? $project->name_ar : $project->name}}</a>
                            </h3>
                            <a href="{{ route('project.details', ['project' => $project->id]) }}" class="projects-btn">{{ __('locale.View More') }}</a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>