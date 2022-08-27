<div class="team-area pt-100 pb-75">
    <div class="container">
        <div class="section-title section-style-two">
            <div class="section-bg-text">TEAM</div>
            <span>{{ __('locale.TEAM MEMBER') }}</span>
            <h2>{{ __('locale.Our Expert IT Consultants') }} <span class="overlay"></span></h2>
            <p>{{ __('locale.team.descr') }}</p>
        </div>

        <div class="row justify-content-center">
            @if(count($employees) > 0)
            @foreach($employees as $employee)
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card">
                    <div class="team-image" data-tilt>
                        <img style="width: 100%; height: 231.15px" src="{{ asset($employee->photo) }}" alt="image">

                        <ul class="team-social">
                            <li>
                                <a href="{{ $employee->facebook_link }}" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $employee->twitter_link }}" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ $employee->linkedin_link }}" target="_blank">
                                    <i class="ri-linkedin-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3>{{ $locale == 'ar' ? $employee->name_ar : $employee->name }}</h3>
                        <span>{{ $locale == 'ar' ? $employee->job_title_ar : $employee->job_title }}</span>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>