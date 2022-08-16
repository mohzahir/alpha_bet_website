<x-admin-layout>

  <x-slot name="header">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">لوحة التحكم</a>
          <span class="breadcrumb-item active">إدارة العملاء</span>
      </nav>
  </x-slot>
  <x-slot name="title">
    <i class="icon ion-ios-star-outline"></i>
    <div>
      <h4>إدارة العملاء</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
    <div class="text-left w-100">
      <a href="{{ route('client.create') }}" class="btn btn-teal btn-icon rounded-circle" title="إضافة"> <div><i class="icon ion-ios-plus-outline" style="font-size: 25px; color: #fff"></i></div></a>
    </div>
    
  </x-slot>

  @include('notification.flash-message');

  <div class="card pd-25">

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>اللوقو</th>
            <th>الاسم العربي</th>
            <th>رقم الهاتف</th>
            <th>الايميل</th>
            <th>المكان</th>
            <th>العميل مميز</th>
            <th>التحكم</th>
          </tr>
        </thead>
        <tbody>
          @if(count($clients) > 0)
          @foreach($clients as $index => $client)
          <tr>
            <th scope="row">{{ $client->id }}</th>
            <td><img style="width: 50px;height: 50px;" src="{{ asset($client->logo) }}" class="img-fluid img-thumbnail" alt=""></td>
            <td>{{ $client->name_ar }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->location_ar }}</td>
            <td>
              @if($client->is_featured)
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
                <a href="{{ route('client.show', ['client' => $client->id]) }}" class="btn btn-warning btn-icon btn-sm" title="التفاصيل"><div><i class="icon ion-ios-information-outline"></i></div></a>
                <a href="{{ route('client.edit', ['client' => $client->id]) }}" class="btn btn-info btn-icon btn-sm" title="تعديل"><div><i class="icon ion-android-create"></i></div></a>
                <button onclick="x = confirm('هل انت متأكد ؟'); if(x){ $('.form-delete{{ $index }}').submit() }" class="btn btn-danger btn-icon btn-sm" title="حذف"><div><i class="icon ion-android-remove-circle"></i></div></button>
              </div>
              <form class="form-delete{{ $index }}" method="post" action="{{ route('client.destroy', ['client' => $client->id]) }}">
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
            <th>العميل مميز</th>
            <th>التحكم</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>