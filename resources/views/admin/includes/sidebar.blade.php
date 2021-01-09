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
                    <a href="{{ route('mtshop.admin.index') }}" class="@yield('active-main')">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Показатели
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.banners') }}" class="@yield('active-banners')">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Баннеры
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.products') }}" class="@yield('active-products')">
                        <i class="metismenu-icon pe-7s-box2"></i>
                        Товары
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.orders') }}" class="@yield('active-orders')">
                        <i class="metismenu-icon pe-7s-shopbag"></i>
                        Заказы
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.categories') }}" class="@yield('active-categories')">
                        <i class="metismenu-icon pe-7s-network"></i>
                        Управление категориями
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.index') }}">
                        <i class="metismenu-icon pe-7s-config"></i>
                        Интеграция 1С
                    </a>
                </li>
                <li>
                    <a href="{{ route('mtshop.admin.index') }}">
                        <i class="metismenu-icon pe-7s-cloud-download"></i>
                        Интеграция Kaspi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>