<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة المشاريع</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-stats-bars"></i>
    <div>
      <h4>إدارة المشاريع</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('project.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
    </div>
    
  </x-slot>

  @include('notification.flash-message');

  <div class="card pd-25">
    <!-- <h6 class="br-section-label">Basic Table</h6>
    <p class="br-section-text">Using the most basic table markup.</p> -->

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>الصورة</th>
            <th>الاسم العربي</th>
            <th>الحدمة</th>
            <th>العميل</th>
            <th>تاريخ البداية</th>
            <th>تاريخ النهاية</th>
            <th>المكان</th>
            <th>الحالة</th>
            <th>المشروع مميز</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($projects) > 0)
          @foreach($projects as $index => $project)
          <tr>
            <th scope="row">{{ $project->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($project->photo) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $project->name_ar }}</td>
            <td>{{ $project->service->name }}</td>
            <td>{{ $project->client->name_ar }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->finish_date }}</td>
            <td>{{ $project->location_ar }}</td>
            <td>
              @if($project->status == 'active')
              <a href="{{ route('project.change.status', ['project' => $project->id, 'status' => 'inactive']) }}" class="btn btn-success btn-icon mg-b-10" title="إخقاء"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @else
              <a href="{{ route('project.change.status', ['project' => $project->id, 'status' => 'active']) }}" class="btn btn-danger btn-icon mg-b-10" title="إظهار"><div><i class="icon ion-ios-eye-outline tx-22"></i></div></a>
              @endif
            </td>
            <td>
              @if($project->is_featured)
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
              <div style="display: flex;justify-content: space-evenly;">
                <a href="{{ route('project.show', ['project' => $project->id]) }}" class="btn btn-warning btn-icon " title="التفاصيل"><div><i class="icon ion-ios-information-outline tx-20"></i></div></a>
                <a href="{{ route('project.edit', ['project' => $project->id]) }}" class="btn btn-info btn-icon " title="تعديل"><div><i class="icon ion-android-create tx-20"></i></div></a>
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon" title="حذف"><div><i class="icon ion-android-remove-circle tx-20"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('project.destroy', ['project' => $project->id]) }}">
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
            <th>الحدمة</th>
            <th>العميل</th>
            <th>تاريخ البداية</th>
            <th>تاريخ النهاية</th>
            <th>المكان</th>
            <th>الحالة</th>
            <th>المشروع مميزة</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>