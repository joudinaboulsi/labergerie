<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('home')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="../assets/la-bergerie-logo.png" alt="" width="180px">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ (\Request::route()->getName() == 'seo') ? 'active' : '' }}">
            <a href="{{route('seo')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">SEO</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item {{ (\Request::route()->getName() == 'dataBook') ? 'active' : '' }}">
            <a href="{{route('dataBook')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Booking</div>
            </a>

         
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'HomePage') ? 'active' : '' }}">
            <a href="{{route('HomePage')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Home</div>
            </a>
       
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'slider') ? 'active' : '' }}">
            <a href="{{route('slider')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Slider</div>
            </a>

        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'AboutPage') ? 'active' : '' }}">
            <a href="{{route('AboutPage')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">About</div>
            </a>

      </li>
      <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Gallery</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ (\Request::route()->getName() == 'galleryPage') ? 'active' : '' }}">
                        <a href="{{Route('galleryPage')}}" class="menu-link">
                            <div data-i18n="Account">Gallery Page</div>
                        </a>
                    </li>
                    <li class="menu-item {{ (\Request::route()->getName() == 'galleryImage') ? 'active' : '' }}">
                        <a href="{{route('galleryImage')}}" class="menu-link">
                            <div data-i18n="Notifications">Gallery</div>
                        </a>
                    </li>
                  
                </ul>
         </li>
      <li class="menu-item {{ (\Request::route()->getName() == 'PracticalPage') ? 'active' : '' }}">
            <a href="{{route('PracticalPage')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Practical Information</div>
            </a>
        </li>

        <li class="menu-item {{ (\Request::route()->getName() == 'services') ? 'active' : '' }}">
                <a href="{{route('services')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Services</div>
                </a>
            </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'arrivePage') ? 'active' : '' }}">
            <a href="{{route('arrivePage')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">How to Arrive</div>
            </a>
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'BookPage') ? 'active' : '' }}">
            <a href="{{route('BookPage')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Book Now Page</div>
            </a>
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'BookContent') ? 'active' : '' }}">
            <a href="{{route('BookContent')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Book Now Content</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <!-- Cards -->
        <li class="menu-item {{ (\Request::route()->getName() == 'contactPage') ? 'active' : '' }}">
            <a href="{{route('contactPage')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Contact</div>
            </a>
        </li>
        <!-- User interface -->
        <li class="menu-item {{ (\Request::route()->getName() == 'settings') ? 'active' : '' }}">
                <a href="{{route('settings')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div data-i18n="Basic">Settings</div>
                </a>
        </li>
    <li class="menu-item {{ (\Request::route()->getName() == '') ? 'active' : '' }}">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Logout</div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
      
    </ul>
</aside>