<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item @yield('index')">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="la la-dashboard"></i>
                    <span class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span>
                </a>
            </li>

            <li class="nav-item has-sub @yield('settings')">
                <a href="/">
                    <i class="la la-cogs"></i>
                    <span class="menu-title" data-i18n="Form Wizard">إعدادات الموقع</span>
                </a>
                <ul class="menu-content" style="">
                    <li class="@yield('homepage')">
                        <a class="menu-item" href="{{ route('homepage') }}">
                            <i class="la la-home"></i><span data-i18n="Notification Style">الصفحة الرئيسية</span>
                        </a>
                    </li>
                    <li class="@yield('services')">
                        <a class="menu-item" href="{{ route('services') }}">
                            <i class="la la-bars"></i><span data-i18n="Notification Style">الخدمات</span>
                        </a>
                    </li>
                    <li class="@yield('contact')">
                        <a class="menu-item" href="{{ route('contact') }}">
                            <i class="la la-phone"></i><span data-i18n="Notification Style">معلومات التواصل</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @yield('profile')">
                <a href="{{ route('admin.profile') }}">
                    <i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">حسابي</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.logout') }}">
                    <i class="la la-power-off"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">تسجيل الخروج</span>
                </a>
            </li>

        </ul>
    </div>
</div>
