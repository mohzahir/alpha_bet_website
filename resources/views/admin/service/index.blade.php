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

  <div class="card pd-25">
    <!-- <h6 class="br-section-label">Basic Table</h6>
    <p class="br-section-text">Using the most basic table markup.</p> -->
      <a href="{{ route('service.create') }}" class="btn btn-success">إضافة خدمة</a>

    <div class=" table-responsive">
      <table class="table display responsive nowrap dataTable no-footer dtr-inline collapsed">
        <thead class="">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>$320,800</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>$170,750</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>$86,000</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>$433,060</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>$162,700</td>
          </tr>
        </tbody>
        <tfoot class="">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- bd -->
  </div>



</x-admin-layout>