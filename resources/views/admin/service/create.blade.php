<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('service.index') }}">إدارة الخدمات</a>
          <span class="breadcrumb-item active">إضافة خدمة</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-star-outline"></i>
    <div>
      <h4>إضافة خدمة</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    
  </x-slot>

  <div class="card pd-25">
    <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
      <div class="form-layout form-layout-1" data-select2-id="31">
        <div class="row mg-b-25" data-select2-id="30">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
              <input class="form-control" type="text" name="name_ar" value="{{ old('name_ar') }}" placeholder="ادخل عنوان الخدمة بالعربي">
            </div>
          </div><!-- col-4 -->
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
              <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="ادخل عنوان الخدمة بالانجليزي">
            </div>
          </div><!-- col-4 -->
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
            <div class="form-group">
              <input id="customFile" class="custom-file-input" type="file" name="photo" value="{{ old('photo') }}" placeholder="ادخل عنوان الخدمة بالانجليزي">
              <label class="custom-file-label custom-file-label-primary m-3" for="customFile">صورة الخدمة: <span class="tx-danger">*</span></label>
            </div>
          </div><!-- col-4 -->
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
          <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <label class="ckbox">
              <input type="checkbox" checked=""><span>الخدمة مميزة ؟ <small>الخدمات المميزة سيتم عرضها على الصفحة الرئيسية</small></span>
            </label>
          </div><!-- col-8 -->
        </div><!-- row -->
  
        <div class="form-layout-footer">
          <button class="btn btn-info">إضافة</button>
          <button class="btn btn-secondary">الغاء</button>
        </div><!-- form-layout-footer -->
      </div>
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