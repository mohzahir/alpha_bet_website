<header class="main-header-area">
    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-two-with-color">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/black-logo.png') }}" style="width: 132px; height: 50px" class="black-logo" alt="image">
                            <img src="{{ asset('assets/images/logo.png') }}" style="width: 132px; height: 50px" class="white-logo" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/black-logo.png') }}" style="width: 132px; height: 50px" class="black-logo" class="black-logo" alt="image">
                        <img src="{{ asset('assets/images/logo.png') }}" class="white-logo" alt="image">
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
                                <a href="#" class="nav-link">
                                    {{ __('locale.Contract') }}  
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

                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    About 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about-style-1.html" class="nav-link">About Style One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-style-2.html" class="nav-link">About Style Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about-style-3.html" class="nav-link">About Style Three</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.html" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services-style-1.html" class="nav-link">Services Style One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-style-2.html" class="nav-link">Services Style Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-details.html" class="nav-link">Services Details</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Events
                                            <i class="ri-arrow-right-s-line"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.html" class="nav-link">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="events-details.html" class="nav-link">Events Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Career
                                            <i class="ri-arrow-right-s-line"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="career.html" class="nav-link">Career</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="career-details.html" class="nav-link">Career Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Courses
                                            <i class="ri-arrow-right-s-line"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="courses.html" class="nav-link">Courses Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="courses-right-sidebar.html" class="nav-link">Courses Right Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="courses-details.html" class="nav-link">Courses Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="profile-authentication.html" class="nav-link">Profile Authentication</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="membership-levels.html" class="nav-link">Membership Levels</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="purchase-guide.html" class="nav-link">Purchase Guide</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="error-404.html" class="nav-link">404 Error</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Projects 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="projects.html" class="nav-link">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="projects-details.html" class="nav-link">Projects Details</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Shop 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="products.html" class="nav-link">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.html" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.html" class="nav-link">Wishlist</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.html" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="my-account.html" class="nav-link">My Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="products-details.html" class="nav-link">Products Details</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-style-1.html" class="nav-link">Blog Style One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-style-2.html" class="nav-link">Blog Style Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="author.html" class="nav-link">Author</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="categories.html" class="nav-link">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tags.html" class="nav-link">Tags</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="search-page.html" class="nav-link">Search Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Single Post 
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="single-blog-1.html" class="nav-link">Default</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-blog-2.html" class="nav-link">With Video</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-blog-3.html" class="nav-link">With Image Slider</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Pricing</a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li> -->
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