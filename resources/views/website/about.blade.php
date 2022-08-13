<x-website-layout>

    <!-- Start Page Banner Area -->
    <div class="page-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>{{ __('locale.About') }}</h2>

                <ul>
                    <li>
                        <a href="index.html">{{ __('locale.Home') }}</a>
                    </li>
                    <li>{{ __('locale.About') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <div class="pt-100"></div>

    <!-- Start About Area -->
    @include('website.includes.about', ['about' => $about])
    <!-- End About Area -->
    
    <!-- Start Partner Area -->
    @include('website.includes.partner')
    <!-- End Partner Area -->

    <!-- Start Skill Area -->
    <div class="skill-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="skill-content">
                        <span>SKILLSET</span>
                        <h3>We Have A Set Of Skill With High Quality <span class="overlay"></span></h3>
                    </div>

                    <div class="skill-bar" data-percentage="92%" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">Software Development</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="80%" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">App Development</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter bg-D5158F">
                            <div class="progress-content bg-D5158F"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="70%" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">Artificial Intelligence</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter bg-FEB302">
                            <div class="progress-content bg-FEB302"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="45%" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <p class="progress-title-holder">
                            <span class="progress-title">Cyber Security</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </p>
                        <div class="progress-content-outter bg-A66BFF">
                            <div class="progress-content bg-A66BFF"></div>
                        </div>
                    </div>

                    <div class="skill-bar-btn" data-aos="fade-up" data-aos-delay="90" data-aos-duration="900" data-aos-once="true">
                        <a href="#" class="default-btn">Explore More</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="skill-image" data-aos="fade-left" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <img src="assets/images/skill/skill-1.png" alt="image" data-tilt>

                        <div class="skill-shape-1">
                            <img src="assets/images/skill/skill-shape-1.png" alt="image">
                        </div>
                        <div class="skill-shape-2">
                            <img src="assets/images/skill/skill-shape-2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="skill-bg-shape">
            <img src="assets/images/skill/skill-bg-shape.png" alt="image">
        </div>
    </div>
    <!-- End Skill Area -->

    <!-- Start Choose Area -->
    <div class="choose-area bg-with-F5F5F5-color pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>WHY CHOOSE US</span>
                <h2>We Help You To <b>Increase</b> Your Sale Through Solutions <span class="overlay"></span></h2>
                <p>We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="assets/images/choose/choose-1.png" alt="image"></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="services-details.html">Mobile Apps</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="assets/images/choose/choose-2.png" alt="image"></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="services-details.html">Branding Strategy</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="assets/images/choose/choose-3.png" alt="image"></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="services-details.html">Graphic Design</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <a href="services-details.html"><img src="assets/images/choose/choose-4.png" alt="image"></a>
                        </div>
                        <div class="choose-content">
                            <h3>
                                <a href="services-details.html">Search Optimization</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet conset sadipscing elitr sed diam nonumy eirm od tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="choose-shape-1">
            <img src="assets/images/choose/choose-shape.png" alt="image">
        </div>
        <div class="choose-shape-2">
            <img src="assets/images/choose/choose-shape-2.png" alt="image">
        </div>
    </div>
    <!-- End Choose Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

    <!-- Start Talk Area -->
    <div class="talk-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="talk-image" data-tilt>
                        <img src="assets/images/talk/talk-2.png" alt="image">

                        <div class="talk-circle">
                            <img src="assets/images/talk/talk-circle.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="talk-content margin-zero">
                        <span>LET'S TALK</span>
                        <h3>We Would Like To Hear From You Any Question <span class="overlay"></span></h3>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.</p>

                        <form id="contactFormTwo">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message<span></span></button>
                                    <div id="msgSubmitTwo" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Talk Area -->


</x-website-layout>