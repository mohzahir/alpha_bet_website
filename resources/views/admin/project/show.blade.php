<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('project.index') }}">إدارة المشاريع</a>
            <span class="breadcrumb-item active">{{ $project->name_ar }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon ion-ios-star-outline"></i>
        <div>
            <h4>{{ $project->name_ar }}</h4>
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
        <div class="form-layout form-layout-1">
            <div class="tab-content" data-select2-id="31">
                <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالعربي</label>
                                <input readonly class="form-control" type="text" name="name_ar" value="{{ $project->name_ar }}" placeholder="ادخل عنوان المشروع بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">العنوان بالانجليزي</label>
                                <input readonly class="form-control" type="text" name="name" value="{{ $project->name }}" placeholder="ادخل عنوان المشروع بالانجليزي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-groub">
                                <label for="">صورة المشروع</label>
                                <img style="width: 200px;height: 200px;display: block" src="{{ asset($project->photo) }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="ckbox">
                                <input readonly disabled type="checkbox" name="is_featured" {{ $project->is_featured ? 'checked' : ''}} value="1"><span>المشروع مميزة ؟ </span>
                            </label>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->


                <div id="descr-info" class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف القصير بالعربي</label>
                                <textarea readonly class="form-control" type="text" name="short_descr_ar" placeholder="ادخل الوصف القصير بالعربي">{!! $project->short_descr_ar !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف القصير بالانجليزي</label>
                                <textarea readonly class="form-control" type="text" name="short_descr" placeholder="ادخل الوصف القصير بالانجليزي">{!! $project->short_descr !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالعربي</label>
                                <textarea readonly class="form-control summernote" type="text" name="descr_ar" placeholder="ادخل الوصف الكامل بالعربي">{!! $project->descr_ar !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">الوصف الكامل بالانجليزي</label>
                                <textarea readonly class="form-control summernote" type="text" name="descr" placeholder="ادخل الوصف الكامل بالانجليزي">{!! $project->descr !!}</textarea>
                            </div>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>