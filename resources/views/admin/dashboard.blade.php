<x-admin-layout>

  @push('links')
  <link href="{{ asset('bracketplus1.4/app/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
  @endpush

  <x-slot name="header">

  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>لوحة التحكم</h4>
      <p class="mg-b-0">مرحبا بك في لوحة التحكم الخاصة بك</p>
    </div>
  </x-slot>


  <div class="row row-sm">
    <div class="col-sm-6 col-xl-3">
      <div class="bg-info rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-ios-star-outline tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-r-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">عدد الخدمات</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $services_count }}</p>
            <!-- <span class="tx-11 tx-roboto tx-white-8">24% مقارنة بالامس</span> -->
          </div>
        </div>
        <div id="ch1" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
      <div class="bg-purple rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-stats-bars tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-r-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">عدد المشاريع</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $projects_count }}</p>
            <!-- <span class="tx-11 tx-roboto tx-white-8">$390,212 before tax</span> -->
          </div>
        </div>
        <div id="ch3" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
      <div class="bg-teal rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-r-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">عدد المنتجات</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $products_count }}</p>
            <!-- <span class="tx-11 tx-roboto tx-white-8">23% average duration</span> -->
          </div>
        </div>
        <div id="ch2" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
      <div class="bg-primary rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-ios-people-outline tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-r-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">عدد العملاء</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{ $clients_count }}</p>
            <!-- <span class="tx-11 tx-roboto tx-white-8">65.45% on average time</span> -->
          </div>
        </div>
        <div id="ch4" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
  </div><!-- row -->

@push('scripts')
<script src="{{ asset('bracketplus1.4/app/lib/rickshaw/vendor/d3.min.js') }}"></script>
<script src="{{ asset('bracketplus1.4/app/lib/rickshaw/vendor/d3.layout.min.js') }}"></script>
<script src="{{ asset('bracketplus1.4/app/lib/rickshaw/rickshaw.min.js') }}"></script>
<!-- <script src="{{ asset('bracketplus1.4/app/js/dashboard.js') }}"></script> -->
@endpush

</x-admin-layout>