<div class="services-area margin-zero ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="services-section-content" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <div class="services-bg-text">SERVICES</div>
                    <span>{{ __('locale.SERVICES') }}</span>
                    <h3>{{ __('locale.We Provide the Best Quality') }} <b>{{ __('locale.SERVICES') }}</b> <span class="overlay"></span></h3>
                    <p>We are technology solutions providing company all over the world doing over 40 years.</p>
                    <div class="services-section-btn">
                        <a href="{{ route('services') }}" class="default-btn">{{ __('locale.Explore All Services') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div dir="ltr" class="services-slides owl-carousel owl-theme">
                    @if(count($services) > 0)
                    @foreach($services as $service)
                    <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="services-item">
                        <div class="services-image">
                            <a href="{{ route('service.details', ['service' => $service->id]) }}"><img style="width: 100%; height: 158.96px" src="{{ asset($service->photo) }}" alt="image"></a>
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
        </div>
    </div>
</div>