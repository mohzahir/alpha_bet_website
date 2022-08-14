<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
      <li class="br-menu-item">
        <a href="{{ route('dashboard') }}" class="br-menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">لوحة التحكم</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub {{ request()->is('admin/service/*') ? 'active' : '' }}">
          <i class="menu-item-icon icon ion-ios-star-outline tx-22"></i>
          <span class="menu-item-label">الخدمات</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('service.index') }}" class="sub-link {{ request()->routeIs('service.index') ? 'active' : '' }}">عرض الخدمات</a></li>
          <li class="sub-item"><a href="{{ route('service.create') }}" class="sub-link {{ request()->routeIs('service.create') ? 'active' : '' }}">إضافة خدمة</a></li>
        </ul>
      </li><!-- br-menu-item -->
      
    </ul><!-- br-sideleft-menu -->

    <br>
  </div><!-- br-sideleft -->