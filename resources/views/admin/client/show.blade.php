<x-admin-layout>


    <x-slot name="header">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('dashboard') }}">لوحة التحكم</a>
            <a class="breadcrumb-item" href="{{ route('client.index') }}">إدارة العملاء</a>
            <span class="breadcrumb-item active">{{ $client->name_ar }}</span>
        </nav>
    </x-slot>
    <x-slot name="title">
        <i class="icon ion-ios-people-outline"></i>
        <div>
            <h4>{{ $client->name_ar }}</h4>
            <p class="mg-b-0">هنا يمكنك ادارة معلومات العملاء والتعديل عليها</p>
        </div>

    </x-slot>

    @include('notification.flash-message')

    <div class="card pd-25">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#basic-info" role="tab" aria-controls="home" aria-selected="true">البيانات الاساسية</a>
            </li>
        </ul>
        <div class="form-layout form-layout-1">
            <div class="tab-content" data-select2-id="31">
                <div id="basic-info" class="tab-pane fade show active " role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الاسم بالعربي</label>
                                <input readonly class="form-control" type="text" value="{{ $client->name_ar }}" placeholder="ادخل اسم العميل بالعربي">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الاسم بالانجليزي</label>
                                <input readonly class="form-control" type="text" value="{{ $client->name }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">رقم الهاتف</label>
                                <input readonly class="form-control" type="text" value="{{ $client->phone }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الايميل</label>
                                <input readonly class="form-control" type="text" value="{{ $client->email }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">المكان بالعربي</label>
                                <input readonly class="form-control" type="text" value="{{ $client->location }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">المكان بالانجليزي</label>
                                <input readonly class="form-control" type="text" value="{{ $client->location_ar }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الوصف بالعربي</label>
                                <textarea readonly rows="5" class="form-control">{{ $client->descr_ar }}</textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">الوصف بالانجليزي</label>
                                <textarea readonly rows="5" class="form-control">{{ $client->descr }}</textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-groub">
                                <label for="">اللوقو</label>
                                <img style="width: 200px;height: 200px;display: block" src="{{ asset($client->logo) }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="ckbox">
                                <input readonly disabled type="checkbox" name="is_featured" {{ $client->is_featured ? 'checked' : ''}} value="1"><span>العميل مميز ؟ </span>
                            </label>
                        </div><!-- col-8 -->
                    </div>
                </div><!-- tab-pane -->
            </div>
        </div>
    </div>

</x-admin-layout>