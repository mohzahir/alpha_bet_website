<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

            <div class="modal-body">
                <a href="index.html">
                    <img src="{{ asset('assets/images/black-logo.png') }}" class="black-logo" alt="image">
                    <img src="{{ asset('assets/images/logo.png') }}" class="white-logo" alt="image">
                </a>
                <div class="sidebar-content">
                    <h3>{{ __('locale.About Us') }}</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <div class="sidebar-btn">
                        <a href="{{ route('contact') }}" class="default-btn">{{ __('locale.Lets Talk') }}</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>{{ __('locale.Contact Information') }}</h3>

                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a></li>
                        
                        <li><i class="ri-mail-line"></i><span class="__cf_email__" >{{ $setting->email }}</span></li>

                        <li><i class="ri-map-pin-line"></i> {{ $locale == 'ar' ? $setting->location_ar : $setting->location }}</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li><a href="{{ $setting->facebook_link }}" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="{{ $setting->twitter_link }}" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="{{ $setting->linkedin_link }}" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="{{ $setting->instagram_link }}" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                </ul>
                <div class="contact-form">
                    <h3>{{ __('locale.Ready to Get Started?') }}</h3>

                    <form id="contactForm" action="{{ route('contact.submit') }}" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required data-error="Please enter your name" placeholder="{{ __('locale.Your name') }}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required data-error="Please enter your email" placeholder="{{ __('locale.Your email address') }}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="{{ __('locale.Write your message') }}">{{ old('message') }}</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">{{ __('locale.Send message') }}<span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>