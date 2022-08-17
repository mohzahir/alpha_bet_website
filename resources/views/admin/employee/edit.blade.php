<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('dashboard') }}">لوحة التحكم</a>
          <a class="breadcrumb-item" href="{{ route('employee.index') }}">إدارة الموظفين</a>
          <span class="breadcrumb-item active">{{ $employee->name_ar }}</span>
          <span class="breadcrumb-item active">تعديل</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-bag"></i>
    <div>
      <h4>تعديل موظف</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    
  </x-slot>

  @include('notification.flash-message')

  <div class="card pd-25">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
      </li>
    </ul>
    <form action="{{ route('employee.update', ['employee' => $employee->id]) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-layout form-layout-1">
        <div  class="tab-content" data-select2-id="31">
          <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name_ar" value="{{ $employee->name_ar }}" placeholder="ادخل عنوان الموظف بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العنوان بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="{{ $employee->name }}" placeholder="ادخل عنوان الموظف بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المسمى الوظيفي بالعربي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="job_title_ar" value="{{ $employee->job_title_ar }}" placeholder="ادخل المسمى الوظيفي بالعربي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">المسمى الوظيفي بالانجليزي: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="job_title" value="{{ $employee->job_title }}" placeholder="ادخل المسمى الوظيفي بالانجليزي">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">رابط الفيسبوك: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="facebook_link" value="{{ $employee->facebook_link }}" placeholder="ادخل رابط الفيسبوك">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">رابط لينكدان: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="linkedin_link" value="{{ $employee->linkedin_link}}" placeholder="ادخل رابط لينكدان">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">رابط تويتر: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="twitter_link" value="{{ $employee->twitter_link }}" placeholder="ادخل رابط تويتر">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-groub">
                  <label for="">صورة الموظف <span class="tx-danger">*</span></label>
                  <img style="width: 200px;height: 200px;display: block" src="{{ asset($employee->photo) }}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-group">
                  <input id="customFile" class="custom-file-input" type="file" name="photo" value="{{ $employee->photo }}">
                  <label style="top: 213px;width: 200px;" class="custom-file-label m-3" for="customFile"></label>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                <label class="ckbox">
                  <input type="checkbox" name="is_featured" {{ $employee->is_featured ? 'checked' : ''}} value="1"><span>الموظف مميز ؟ <small>الموظفين المميزة سيتم عرضها على الصفحة الرئيسية</small></span>
                </label>
              </div><!-- col-8 -->
            </div>
          </div><!-- tab-pane -->
        </div>
      </div>

      <div class="card-footer mt-2">
        <button class="btn btn-info">تعديل</button>
        <a href="{{ route('employee.index') }}" class="btn btn-secondary">الغاء</a>
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