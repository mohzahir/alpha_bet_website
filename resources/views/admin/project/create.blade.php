<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('project.index') }}">إدارة المشاريع</a>
          <span class="breadcrumb-item active">إضافة مشروع</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-stats-bars"></i>
    <div>
      <h4>إضافة مشروع</h4>
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
    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name_ar" value="{{ old('name_ar') }}" placeholder="ادخل عنوان المشروع بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="ادخل عنوان المشروع بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">الخدمة <span class="tx-danger">*</span></label>
                  <select class="form-control" type="text" name="service_id" value="{{ old('service_id') }}" placeholder="ادخل عنوان المشروع بالعربي">
                    @foreach($services as $service)
                    <option {{ old('service_id') == $service->id ? 'checked' : ''}} value="{{ $service->id }}">{{ $service->name }} - {{ $service->name_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العميل: <span class="tx-danger">*</span></label>
                  <select class="form-control" type="text" name="client_id">
                    @foreach($clients as $client)
                    <option {{ old('client_id') == $client->id ? 'checked' : ''}} value="{{ $client->id }}">{{ $client->name }} - {{ $client->name_ar }}</option>
                    @endforeach
                  </select>                
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">زمن البداية: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="start_date" value="{{ old('start_date') }}" placeholder="ادخل عنوان المشروع بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">زمن النهاية<span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="finish_date" value="{{ old('finish_date') }}" placeholder="ادخل عنوان المشروع بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المكان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="location_ar" value="{{ old('location_ar') }}" placeholder="ادخل عنوان المشروع بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المكان بالانجليزي<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="location" value="{{ old('location') }}" placeholder="ادخل عنوان المشروع بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-groub">
                  <label for="">صورة المشروع <span class="tx-danger">*</span></label>
                  <img style="width: 200px;height: 200px;display: block" src="{{ asset('bracketplus1.4/app/img/img11.jpg') }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-group">
                  <input id="customFile" class="custom-file-input" type="file" name="photo" value="{{ old('photo') }}" placeholder="ادخل عنوان المشروع بالانجليزي">
                  <label style="top: 213px;width: 200px;" class="custom-file-label m-3" for="customFile"></label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="ckbox">
                  <input type="checkbox" name="is_featured" {{ old('is_featured') ? 'checked' : ''}} value="1"><span>المشروع مميزة ؟ <small>المشاريع المميزة سيتم عرضها على الصفحة الرئيسية</small></span>
                </label>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
    
  
          <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف القصير بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="short_descr_ar" placeholder="ادخل الوصف القصير بالعربي">{{ old('short_descr_ar') }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف القصير بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="short_descr" placeholder="ادخل الوصف القصير بالانجليزي">{{ old('short_descr') }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالعربي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="descr_ar" placeholder="ادخل الوصف الكامل بالعربي">{{ old('descr_ar') }}</textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">الوصف الكامل بالانجليزي: <span class="tx-danger">*</span></label>
                  <textarea class="form-control summernote" type="text" name="descr" placeholder="ادخل الوصف الكامل بالانجليزي">{{ old('descr') }}</textarea>
                </div>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">إضافة</button>
        <a href="{{ route('project.index') }}" class="btn btn-secondary">الغاء</a>
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