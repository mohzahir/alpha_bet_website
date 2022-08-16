<div class="partner-area ptb-100">
    <div class="container">
        <div dir="ltr" class="partner-slides owl-carousel owl-theme">
            @if(count($clients))
            @foreach($clients as $client)
            <div @if(app()->getLocale() == 'ar') dir="rtl" @endif class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                <a href="#">
                    <img style="width: 150px; height: 150px" src="{{ asset($client->logo) }}" alt="partner">
                    <img style="width: 150px; height: 150px" src="{{ asset($client->logo) }}" alt="partner">
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>