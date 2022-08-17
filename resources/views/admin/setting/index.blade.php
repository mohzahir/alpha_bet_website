<x-admin-layout>

  <x-slot name="header">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
      <span class="breadcrumb-item active">إدارة الإعدادات</span>
    </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-settings"></i>
    <div>
      <h4>إدارة الإعدادات</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    <div class="text-left w-100">
    </div>

  </x-slot>

  @include('notification.flash-message');
  <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card bd-0">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>اعدادات الموقع</h3>
        </div>
      </div><!-- card-header -->
      <div class="card-body">
        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم الشركة بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="company_name"value="{{ $setting->company_name }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم الشركة بالانجليزي
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="company_name_ar"value="{{ $setting->company_name_ar }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اللوقو
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <div class="row">
                <div class="col-sm-6">
                  <img width="100" class="thumbnail" height="100" src="{{ asset($setting->logo) }}" alt="">
                </div>
                <div class="col-sm-6">
                  <label for=""><small class="text-danger">الابعاد المناسبة هي (132*50)</small></label>
                  <input type="file" class="form-control" name="logo"value="{{ $setting->logo }}" placeholder="قم بادخال اسم الشركة العربي">
                </div>
              </div>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اللوقو باللون الاسود
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <div class="row">
                <div class="col-sm-6">
                  <img width="100" class="thumbnail" height="100" src="{{ asset($setting->logo_black) }}" alt="">
                </div>
                <div class="col-sm-6">
                  <label for=""><small class="text-danger">الابعاد المناسبة هي (132*50)</small></label>
                  <input type="file" class="form-control" name="logo_black"value="{{ $setting->logo_black }}" placeholder="قم بادخال اسم الشركة العربي">
                </div>
              </div>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رقم الهاتف 1
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="phone1"value="{{ $setting->phone1 }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رقم الهاتف 2
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="phone2"value="{{ $setting->phone2 }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              ايميل الشركة
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="email"value="{{ $setting->email }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              موقع الشركة بالانجليزي
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="location"value="{{ $setting->location }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              موقع الشركة بالعربي
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="location_ar"value="{{ $setting->location_ar }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط موقع الشركة على قوقل ماب
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="google_map_link"value="{{ $setting->google_map_link }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط الفيسبوك
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="facebook_link"value="{{ $setting->facebook_link }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط تويتر
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="twitter_link"value="{{ $setting->twitter_link }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط لينكدان
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="linkedin_link"value="{{ $setting->linkedin_link }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط يوتيوب
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="youtube_link"value="{{ $setting->youtube_link }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط انستقرام
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="instagram_link"value="{{ $setting->instagram_link }}" placeholder="قم بادخال اسم الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
        </div>
      </div><!-- card-body -->
      <div class="card-footer">
        <div class="text-right">
          <button class="btn btn-primary">حفظ البيانات</button>
        </div>
      </div>

    </div>
  </form>



</x-admin-layout>