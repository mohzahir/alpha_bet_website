<div class="talk-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="talk-image" data-tilt>
                    <img src="{{ asset('assets/images/talk/talk.png') }}" alt="image">

                    <div class="talk-circle">
                        <img src="{{ asset('assets/images/talk/talk-circle.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="talk-content">
                    <div class="talk-bg-text">LETS TALK</div>
                    <span>{{ __('locale.LETS TALK') }}</span>
                    <h3>{{ __('locale.We Would Like To Hear From You Any Question') }} <span class="overlay"></span></h3>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.</p>

                    <form id="contactFormTwo">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="{{ __('locale.Your name') }}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="{{ __('locale.Your email address') }}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="{{ __('locale.Write your message') }}"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">{{ __('locale.Send message') }}<span></span></button>
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