<footer class="footer-area with-black-background margin-zero pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="widget-logo">
                        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="image"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consetetur sadi scing elitr sed diam nonumy.</p>

                    <ul class="widget-social">
                        <li>
                            <a href="{{ $setting->facebook_link }}" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->twitter_link }}" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ $setting->youtube_link }}" target="_blank">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ $setting->linkedin_link }}" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ $setting->instagram_link }}" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <h3>{{ __('locale.Links') }}</h3>

                    <ul class="quick-links">
                        <li><a href="{{ route('about') }}">{{ __('locale.About Us') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ __('locale.Services') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('locale.Contact Us') }}</a></li>
                        <li><a href="{{ route('products') }}">{{ __('locale.Products') }}</a></li>
                        <li><a href="{{ route('projects') }}">{{ __('locale.Projects') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <h3>{{ __('locale.Pages') }}</h3>

                    <ul class="quick-links">
                        <li><a href="contact.html">{{ __('locale.Contact Us') }}</a></li>
                        <li><a href="purchase-guide.html">Purchase Guide</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="terms-of-service.html">Terms of Service</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <h3>{{ __('locale.Subscribe Newsletter') }}</h3>

                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="{{ __('locale.Enter your email') }}" name="EMAIL" required autocomplete="off">

                        <button type="submit" class="default-btn">{{ __('locale.Subscribe') }}</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright @<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> All Rights Reserved by
                    <a href="https://alpha-beta.com/" target="_blank"> {{ $locale == 'ar' ? $setting->company_name_ar : $setting->company_name }}</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1">
        <img src="{{ asset('assets/images/footer/footer-shape-1.png') }}" alt="image">
    </div>
    <div class="footer-shape-2">
        <img src="{{ asset('assets/images/footer/footer-shape-2.png') }}" alt="image">
    </div>
    <div class="footer-shape-3">
        <img src="{{ asset('assets/images/footer/footer-shape-3.png') }}" alt="image">
    </div>
</footer>