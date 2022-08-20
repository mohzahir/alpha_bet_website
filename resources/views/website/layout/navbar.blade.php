@if(request()->routeIs('home'))
<header class="main-header-area">
    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-two-with-color">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset($setting->logo_black) }}" style="width: 132px; height: 50px" class="black-logo" alt="image">
                            <img src="{{ asset($setting->logo) }}" style="width: 132px; height: 50px" class="white-logo" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset($setting->logo_black) }}" style="width: 132px; height: 50px" class="black-logo" class="black-logo" alt="image">
                        <img src="{{ asset($setting->logo) }}" style="width: 132px; height: 50px" class="white-logo" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                    {{ __('locale.Home') }} 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                                    {{ __('locale.About') }} 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') || request()->routeIs('service.details') ? 'active' : '' }}">
                                    {{ __('locale.Services') }} 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') || request()->routeIs('project.details') ? 'active' : '' }}">
                                    {{ __('locale.Projects') }} 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">
                                    {{ __('locale.Products') }}  
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">
                                    {{ __('locale.Contact') }}  
                                </a>
                            </li>
                            @if(app()->getLocale() == 'en')
                            <li class="nav-item">
                                <a href="{{ route('set.locale', ['locale' => 'ar']) }}" class="nav-link">
                                    العربية 
                                </a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('set.locale', ['locale' => 'en']) }}" class="nav-link">
                                    English 
                                </a>
                            </li>
                            @endif
                        </ul>

                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" placeholder="Search..." type="text">

                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu" style="top: -50px;">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" placeholder="Search..." type="text">

                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>

@else

<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset($setting->logo) }}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar navbar-with-black-color">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset($setting->logo) }}" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                    <ul class="navbar-nav ms-auto">
                        
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                {{ __('locale.Home') }} 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                                {{ __('locale.About') }} 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') || request()->routeIs('service.details') ? 'active' : '' }}">
                                {{ __('locale.Services') }} 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') || request()->routeIs('project.details') ? 'active' : '' }}">
                                {{ __('locale.Projects') }} 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">
                                {{ __('locale.Products') }}  
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">
                                {{ __('locale.Contact') }}  
                            </a>
                        </li>
                        @if(app()->getLocale() == 'en')
                        <li class="nav-item">
                            <a href="{{ route('set.locale', ['locale' => 'ar']) }}" class="nav-link">
                                العربية 
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('set.locale', ['locale' => 'en']) }}" class="nav-link">
                                English 
                            </a>
                        </li>
                        @endif

                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class="search-box">
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">

                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class="search-box">
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">

                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif