<x-admin-layout>


  @push('links')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
  <!-- the fileinput plugin styling CSS file -->
  <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
  <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css">
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
      <li class="nav-item">
        <a class="nav-link" id="images" data-toggle="tab" href="#project-imgs" role="tab" aria-controls="profile" aria-selected="false">صور المشروع</a>
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
                  <select class="form-control" type="text" name="service_id">
                    @foreach($services as $service)
                    <option {{ old('service_id') == $service->id ? 'selected' : ''}} value="{{ $service->id }}">{{ $service->name }} - {{ $service->name_ar }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">العميل: <span class="tx-danger">*</span></label>
                  <select class="form-control" type="text" name="client_id">
                    @foreach($clients as $client)
                    <option {{ old('client_id') == $client->id ? 'selected' : ''}} value="{{ $client->id }}">{{ $client->name }} - {{ $client->name_ar }}</option>
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
                <div class="form-group ">
                  <label class="d-block" for="photo">أختر الصورة <span class="text-danger">* الحجم المناسب (1000 * (*))</span></label>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview fileinput-exists thumbnail"></div>
                      <div>
                          <span class="btn default btn-file">
                              <input type="file" name="photo" id="photo" value="{{ old('photo') }}" class="file" data-initial-preview="">
                              @error('photo')
                              <div class="alert alert-danger">
                                  {{ $message }}
                              </div>
                              @enderror
                          </span>
                      </div>
                  </div>
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
          <div id="project-imgs" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
            <div class="row mg-b-25">
              <div class="col-sm-12">
                  <div class="form-group">
                    <input id="file-1" type="file" name="project_imgs[]" data-overwrite-initial="false" multiple class="file" data-show-upload="false" data-msg-placeholder="اسقط الصور هنا" data-browse-on-zone-click="true" data-min-file-count="1">
                  </div>
              </div>
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
<!-- buffer.min.js and filetype.min.js are necessary in the order listed for advanced mime type parsing and more correct
preview. This is a feature available since v5.5.0 and is needed if you want to ensure file mime type is parsed 
correctly even if the local file's extension is named incorrectly. This will ensure more correct preview of the
selected file (note: this will involve a small processing overhead in scanning of file contents locally). If you 
do not load these scripts then the mime type parsing will largely be derived using the extension in the filename
and some basic file content parsing signatures. -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js" type="text/javascript"></script>
<!-- the main fileinput plugin script JS file -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
<script>
  $('.summernote').summernote({
    height: 150
  })
</script>
<script>
  $(".file").fileinput({
      theme: 'fa',
      language: 'ar',
      uploadUrl: '/test',
      rtl: true,
      showUpload: false,
      fileActionSettings: {
          showUpload: false,
      },
      dropZoneTitle: 'افلت الصور هنا <br/>',
      dropZoneClickTitle: 'أو اضغط لتحديد الصور <br/>',
      showRemove: true,
      allowedFileExtensions: ['jpg', 'gif', 'jpeg'],
      overwriteInitial: false,
      maxFileSize: 4000,
      maxFileCount: " 10 ",
      msgFilesTooMany: 'عدد الصور المحددة <b>({n})</b> تخطى الحد الأقصى <b>{m}</b>!',
      msgPlaceholder: 'اختر الصورة',
      slugCallback: function (filename) {
          return filename.replace('(', '_').replace(']', '_');
      },
      browseLabel: 'تصفح',
      browseClass: 'btn btn-teal',
      removeLabel: 'حذف',

  });
  
</script>
@endpush

</x-admin-layout>