<x-admin-layout>

  <x-slot name="header">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
      <span class="breadcrumb-item active">إدارة معلومات الشركة</span>
    </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-information-outline"></i>
    <div>
      <h4>إدارة معلومات الشركة</h4>
      <p class="mg-b-0">هنا يمكنك ادارة معلومات الشركة والتعديل عليها</p>
    </div>
    <div class="text-left w-100">
    </div>

  </x-slot>

  @include('notification.flash-message');
  <form action="{{ route('about.store') }}" method="post">
    @csrf
    <div class="card bd-0">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>المعلومات الوصفية</h3>
        </div>
      </div><!-- card-header -->
      <div class="card-body">
        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              نبذة عن الشركة بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <textarea class="form-control" name="descr_ar" rows="4" placeholder="قم بادخال نبذة عن الشركة العربي">{{ $about->descr_ar }}</textarea>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              نبذة عن الشركة بالانجليزي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <textarea class="form-control" name="descr" rows="4" placeholder="قم بادخال نبذة عن الشركة الانجليزي">{{ $about->descr }}</textarea>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              مهمة الشركة بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <textarea class="form-control" name="mission_ar" rows="4" placeholder="قم بادخال مهمة الشركة العربي">{{ $about->mission_ar }}</textarea>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              مهمة الشركة بالانجليزي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <textarea class="form-control" name="mission" rows="4" placeholder="قم بادخال مهمة الشركة الانجليزي">{{ $about->mission }}</textarea>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رؤية الشركة بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <textarea class="form-control" name="vision_ar" rows="4" placeholder="قم بادخال رؤية الشركة العربي">{{ $about->vision_ar }}</textarea>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رؤية الشركة بالانجليزي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <textarea class="form-control" name="vision" rows="4" placeholder="قم بادخال رؤية الشركة الانجليزي">{{ $about->vision }}</textarea>
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
    <div class="card bd-0 mt-5">
      <div class="card-header">
        <div class="hidden-xs-down">
          <h3>المعلومات العامة</h3>
        </div>
      </div><!-- card-header -->
      <div class="card-body ">
        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الاولى بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill1_name_ar" value="{{ $about->skill1_name_ar }}" rows="4" placeholder="قم بادخال اسم المهارة الاولى العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الاولى بالانجليزي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill1_name" rows="4" value="{{ $about->skill1_name }}" placeholder="قم بادخال اسم المهارة الاولى الانجليزي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              التقييم من 100:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill1_rate" rows="4" value="{{ $about->skill1_rate }}" placeholder="قم بادخال مهمة الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
        </div>
        <div class="form-layout form-layout-7 mt-3">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الثانية بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill2_name_ar" value="{{ $about->skill2_name_ar }}" rows="4" placeholder="قم بادخال اسم المهارة الثانية العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الثانية بالانجليزي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill2_name" rows="4" value="{{ $about->skill2_name }}" placeholder="قم بادخال اسم المهارة الثانية الانجليزي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              التقييم من 100:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill2_rate" rows="4" value="{{ $about->skill2_rate }}" placeholder="قم بادخال مهمة الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
        </div>
        <div class="form-layout form-layout-7 mt-3">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الثالثة بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill3_name_ar" value="{{ $about->skill3_name_ar }}" rows="4" placeholder="قم بادخال اسم المهارة الثالثة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الثالثة بالانجليزي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill3_name" rows="4" value="{{ $about->skill3_name }}" placeholder="قم بادخال اسم المهارة الثالثة الانجليزي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              التقييم من 100:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill3_rate" rows="4" value="{{ $about->skill3_rate }}" placeholder="قم بادخال مهمة الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
        </div>
        <div class="form-layout form-layout-7 mt-3">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الرابعة بالعربي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill4_name_ar" value="{{ $about->skill4_name_ar }}" rows="4" placeholder="قم بادخال اسم المهارة الرابعة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              اسم المهارة الرابعة بالانجليزي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill4_name" rows="4" value="{{ $about->skill4_name }}" placeholder="قم بادخال اسم المهارة الرابعة الانجليزي">
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              التقييم من 100:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="skill4_rate" rows="4" value="{{ $about->skill4_rate }}" placeholder="قم بادخال مهمة الشركة العربي">
            </div><!-- col-8 -->
          </div><!-- row -->
        </div>
        <div class="form-layout form-layout-7 mt-3">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              رابط الفيديو التعريفي:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" name="video_url" value="{{ $about->video_url }}" rows="4" placeholder="قم بادخال اسم المهارة الرابعة العربي">
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