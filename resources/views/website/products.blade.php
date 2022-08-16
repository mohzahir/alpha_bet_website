<x-website-layout class="">

    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>{{ __('locale.Our Products') }}</h2>

                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ __('locale.Home') }}</a>
                    </li>
                    <li>{{ __('locale.Our Products') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <!-- <span>{{ __('locale.Our Products') }}</span> -->
                <!-- <h2> List Of Featured Products We Maid With <b>Love</b> <span class="overlay"></span></h2> -->
                <h2> {{ __('locale.Our Products') }}</h2>
            </div>

            <!-- <div class="blog-grid-sorting row align-items-center">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form class="search-form">
                            <input type="search" class="search-field" placeholder="Search your products">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="select-box">
                            <select>
                                <option>Sort By Date</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <div class="row justify-content-center">
                @if(count($products) > 0)
                @foreach($products as $product)
                <div class="col-lg-12 col-md-12">
                    <div class="p-3" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="" style="height: 170px;">
                                    <a href="#" style="width: 100%; height:100%"><img style="width: 100%; height:100%" src="{{ asset($product->photo) }}" alt="image"></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="blog-content">
                                    <!-- <div class="date">9th July, 2022</div> -->
                                    <h3>
                                        {{ $locale == 'ar' ? $product->name_ar : $product->name }}
                                    </h3>
                                    <p>{{ $locale == 'ar' ? $product->descr_ar : $product->descr }}</p>
                                    <!-- <a href="#" class="blog-btn">View More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>

        <div class="blog-shape-1">
            <img src="assets/images/blog/blog-shape-1.png" alt="image">
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Talk Area -->
    @include('website.includes.talk')
    <!-- End Talk Area -->

    <!-- Start Overview Area -->
    @include('website.includes.overview')
    <!-- End Overview Area -->

</x-website-layout>


