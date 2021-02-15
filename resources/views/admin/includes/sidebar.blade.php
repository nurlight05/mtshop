<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Навигация</li>
                <li>
                    <a href="{{ route('mtshop.home.index') }}" title="Перейти на сайт">
                        <i class="metismenu-icon pe-7s-back"></i>
                        Перейти на сайт
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.index') }}" class="@yield('active-main') text-truncate" title="Показатели">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Показатели
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.profile') }}" class="@yield('active-profile') text-truncate" title="Профиль">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Профиль
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.banners') }}" class="@yield('active-banners') text-truncate" title="Баннеры">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Баннеры
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.products') }}" class="@yield('active-products') text-truncate" title="Товары">
                        <i class="metismenu-icon pe-7s-box2"></i>
                        Товары
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.orders') }}" class="@yield('active-orders') text-truncate" title="Заказы">
                        <i class="metismenu-icon pe-7s-shopbag"></i>
                        Заказы
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.categories') }}" class="@yield('active-categories') text-truncate" title="Управление категориями">
                        <i class="metismenu-icon pe-7s-network"></i>
                        Управление категориями
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.attributes') }}" class="@yield('active-attributes') text-truncate" title="Управление характеристиками">
                        <i class="metismenu-icon pe-7s-edit"></i>
                        Управление характеристиками
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.measures') }}" class="@yield('active-measures') text-truncate" title="Управление измерениями">
                        <i class="metismenu-icon pe-7s-stopwatch"></i>
                        Управление измерениями
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('mtshop.admin.index') }}" class="text-truncate" title="Интеграция 1С">
                        <i class="metismenu-icon pe-7s-config"></i>
                        Интеграция 1С
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('mtshop.admin.integration') }}" class="@yield('active-integration') text-truncate" title="Интеграция Kaspi - Satu">
                        <i class="metismenu-icon pe-7s-cloud-download"></i>
                        Интеграция Kaspi - Satu
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>