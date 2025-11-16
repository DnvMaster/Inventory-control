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
                <span> {{ __('Панель управления') }}</span>
            </a>
        </li>

        <li>
            <a href="#sidebarAuth" data-bs-toggle="collapse"><i data-feather="users"></i>
                <span> {{ __('Пользователи') }} </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAuth">
                <ul class="nav-second-level">
                    <li><a href="{{ route('all.review') }}" class="tp-link">{{ __('Все') }}</a></li>
                    <li><a href="{{ route('add.review') }}" class="tp-link">{{ __('Добавить') }}</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarError" data-bs-toggle="collapse">
                <i data-feather="alert-octagon"></i>
                <span>{{ __('Слайдер')}} </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarError">
                <ul class="nav-second-level">
                    <li><a href="{{ route('get.slider') }}" class="tp-link">{{ __('Слайды') }}</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>