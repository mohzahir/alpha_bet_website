<div class="overview-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>{{ __('locale.Call Us') }}</h3>
                    <span>
                        <a href="{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                    </span>

                    <div class="overview-shape">
                        <img src="{{ asset('assets/images/overview/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>{{ __('locale.Email Us') }}</h3>
                    <span>
                        <a href="#">{{ $setting->email }}</a>
                    </span>

                    <div class="overview-shape">
                        <img src="{{ asset('assets/images/overview/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>{{ __('locale.Tech Support') }}</h3>
                    <span>
                        <a href="{{ $setting->phone2 }}">{{ $setting->phone2 }}</a>
                    </span>

                    <div class="overview-shape">
                        <img src="{{ asset('assets/images/overview/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="overview-card">
                    <h3>{{ __('locale.Visit Us') }}</h3>
                    <span>{{ $locale == 'ar' ? $setting->location_ar : $setting->location }}</span>

                    <div class="overview-shape">
                        <img src="{{ asset('assets/images/overview/overview-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>