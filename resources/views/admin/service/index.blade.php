<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة الخدمات</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>إدارة الخدمات</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    
  </x-slot>

  @include('notification.flash-message');

  <div class="card pd-25">
    <!-- <h6 class="br-section-label">Basic Table</h6>
    <p class="br-section-text">Using the most basic table markup.</p> -->
      <a href="{{ route('service.create') }}" class="btn btn-teal">إضافة خدمة</a>

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>الصورة</th>
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>الحالة</th>
            <th>الخدمة مميزة</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($services) > 0)
          @foreach($services as $index => $service)
          <tr>
            <th scope="row">{{ $service->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($service->photo) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $service->name_ar }}</td>
            <td>{{ $service->name }}</td>
            <!-- <td>{{ $service->short_descr_ar }}</td>
            <td>{{ $service->short_descr }}</td>
            <td>{{ $service->descr_ar }}</td>
            <td>{{ $service->descr }}</td> -->
            <td>
              @if($service->status == 'active')
              <a href="{{ route('service.change.status', ['service' => $service->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline"></i></div></a>
              @else
              <a href="{{ route('service.change.status', ['service' => $service->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline"></i></div></a>
              @endif
            </td>
            <td>
              @if($service->is_featured)
              <div class="text-center tx-bold tx-success">
                <i class="icon ion-ios-checkmark-outline tx-22"></i>
              </div>
              @else
              <div class="text-center tx-bold tx-danger">
                <i class="icon ion-ios-close-outline tx-22"></i>
              </div>
              @endif
            </td>
            <td>
              <a href="{{ route('service.show', ['service' => $service->id]) }}" class="btn btn-warning btn-icon mg-b-10" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a>
              <a href="{{ route('service.edit', ['service' => $service->id]) }}" class="btn btn-info btn-icon mg-b-10" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
              <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon mg-b-10" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('service.destroy', ['service' => $service->id]) }}">
                @csrf
                @method('DELETE')
              </form>
            </td>
          </tr>
          @endforeach
          @else
          <tr>
            <td colspan="10">لا يوجد بيانات لعرضها</td>
          </tr>
          @endif
        </tbody>
        <tfoot class="">
          <tr>
            <th>ID</th>
            <th>الصورة</th>
            <th>الاسم العربي</th>
            <th>الاسم الانجليزي</th>
            <th>الحالة</th>
            <th>الخدمة مميزة</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>