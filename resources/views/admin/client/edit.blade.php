<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('client.index') }}">إدارة العملاء</a>
          <span class="breadcrumb-item active">{{ $client->name_ar }}</span>
          <span class="breadcrumb-item active">تعديل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-star-outline"></i>
    <div>
      <h4>تعديل عميل</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    
  </x-slot>

  @include('notification.flash-message')

  <div class="card pd-25">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#descr-info" role="tab" aria-controls="profile" aria-selected="false">البيانات الوصفية</a>
      </li>
    </ul>
    <form action="{{ route('client.update', ['client' => $client->id]) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">الاسم بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name_ar" value="{{ $client->name_ar }}" placeholder="ادخل اسم العميل بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">الاسم بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="{{ $client->name }}" placeholder="ادخل اسم العميل بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">رقم الهاتف: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="tel" name="phone" value="{{ $client->phone }}" placeholder="ادخل رقم هاتف العميل">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">الايميل: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email" value="{{ $client->email }}" placeholder="ادخل ايميل العميل">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المكان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="location_ar" value="{{ $client->location_ar }}" placeholder="ادخل عنوان المشروع بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المكان بالانجليزي<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="location" value="{{ $client->location }}" placeholder="ادخل عنوان المشروع بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف  بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="descr_ar" placeholder="ادخل الوصف بالعربي">{{ $client->descr_ar }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="descr" placeholder="ادخل الوصف بالانجليزي">{{ $client->descr }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-groub">
                  <label for="">اللوقو <span class="tx-danger">*</span></label>
                  <img style="width: 200px;height: 200px;display: block" src="{{ asset($client->logo) }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-group">
                  <input id="customFile" class="custom-file-input" type="file" name="logo" value="{{ $client->logo }}">
                  <label style="top: 213px;width: 200px;" class="custom-file-label m-3" for="customFile"></label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="ckbox">
                  <input type="checkbox" name="is_featured" {{ $client->is_featured ? 'checked' : ''}} value="1"><span>العميل مميز ؟ <small>العملاء المميزون سيتم عرضها على الصفحة الرئيسية</small></span>
                </label>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
    
  
          <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف القصير بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="short_descr_ar" placeholder="ادخل الوصف القصير بالعربي">{{ $client->short_descr_ar }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف القصير بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="short_descr" placeholder="ادخل الوصف القصير بالانجليزي">{{ $client->short_descr }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="descr_ar" placeholder="ادخل الوصف الكامل بالعربي">{{ $client->descr_ar }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="descr" placeholder="ادخل الوصف الكامل بالانجليزي">{{ $client->descr }}</textarea>
                </div>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">تعديل</button>
        <a href="{{ route('client.index') }}" class="btn btn-secondary">الغاء</a>
      </div><!-- form-layout-footer -->
      
        
  
        
    </form>
  </div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
  $('.summernote').summernote({
    height: 150
  })
</script>
@endpush

</x-admin-layout>