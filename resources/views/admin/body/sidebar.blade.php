<div id="sidebar-menu">
    <div class="logo-box">
        <a href="{{ route('dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/images/logo-light.png') }}" alt="" height="24">
            </span>
        </a>
        <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/images/logo-dark.png') }}" alt="" height="24">
            </span>
        </a>
    </div>
    <ul id="side-menu">
        <li class="menu-title">Меню</li>
        <li>
            <a href="{{ route('dashboard') }}" class="tp-link">
                <i data-feather="home"></i>
                <span> Панель </span>
            </a>
        </li>
        <li class="menu-title">Страницы</li>
        <li>
            <a href="#sidebarAuth" data-bs-toggle="collapse"><i data-feather="users"></i>
                <span> Аутентификация </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAuth">
                <ul class="nav-second-level">
                    <li><a href="auth-logout.html" class="tp-link">Логин</a></li>
                    <li><a href="auth-register.html" class="tp-link">Регистрация</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarError" data-bs-toggle="collapse">
                <i data-feather="alert-octagon"></i>
                <span> Ошибки страниц </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarError">
                <ul class="nav-second-level">
                    <li><a href="error-404.html" class="tp-link">Ошибка 404</a></li>
                    <li><a href="error-500.html" class="tp-link">Ошибка 500</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>