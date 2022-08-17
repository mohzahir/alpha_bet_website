<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة الموظفين</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-bag"></i>
    <div>
      <h4>إدارة الموظفين</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('employee.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
    </div>
    
  </x-slot>

  @include('notification.flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>الصورة</th>
            <th>الاسم</th>
            <th>المسمى الوظيفي</th>
            <th>رابط الفيسوبك</th>
            <th>رابط لينكدان</th>
            <th>رابط تويتر</th>
            <th>الحالة</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($employees) > 0)
          @foreach($employees as $index => $employee)
          <tr>
            <th scope="row">{{ $employee->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($employee->photo) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $employee->name_ar }}</td>
            <td>{{ $employee->job_title_ar }}</td>
            <td>{{ $employee->facebook_link }}</td>
            <td>{{ $employee->linkedin_link }}</td>
            <td>{{ $employee->twitter_link }}</td>
            <td>
              @if($employee->status == 'active')
              <a href="{{ route('employee.change.status', ['employee' => $employee->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('employee.change.status', ['employee' => $employee->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            
            <td>
              <div style="display: flex;justify-content: space-evenly;">
                <!-- <a href="{{ route('employee.show', ['employee' => $employee->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a> -->
                <a href="{{ route('employee.edit', ['employee' => $employee->id]) }}" class="btn btn-info btn-icon btn-sm" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('employee.destroy', ['employee' => $employee->id]) }}">
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
            <th>الاسم</th>
            <th>الوصف</th>
            <th>الحالة</th>
            <th>الموظف مميز</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>