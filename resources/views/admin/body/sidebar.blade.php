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
        <li>
            <a href="{{ route('dashboard') }}" class="tp-link" style="font-size: 16px;">
                <i data-feather="home"></i>
                <span><b>{{ __('Панель управления') }}</b></span>
            </a>
        </li>
        <li>
            <a href="#sidebarReview" data-bs-toggle="collapse"><i data-feather="users"></i>
                <span> {{ __('Пользователь') }} </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarReview">
                <ul class="nav-second-level">
                    <li><a href="{{ route('all.review') }}" class="tp-link">{{ __('Все') }}</a></li>
                    <li><a href="{{ route('add.review') }}" class="tp-link">{{ __('Добавить') }}</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarSlider" data-bs-toggle="collapse">
                <i data-feather="alert-octagon"></i>
                <span>{{ __('Настройки слайдера')}} </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarSlider">
                <ul class="nav-second-level">
                    <li><a href="{{ route('get.slider') }}" class="tp-link">{{ __('Слайдер') }}</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarFeatures" data-bs-toggle="collapse">
                <i data-feather="alert-octagon"></i>
                <span> {{ __('Настройки функций') }} </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarFeatures">
                <ul class="nav-second-level">
                    <li><a href="{{ route('all.feature') }}" class="tp-link">{{ __('Все') }}</a></li>
                    <li><a href="{{ route('add.feature') }}" class="tp-link">{{ __('Добавить') }}</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarClarifies" data-bs-toggle="collapse">
                <i data-feather="alert-octagon"></i>
                <span> {{ __('Секция стратегия') }} </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarClarifies">
                <ul class="nav-second-level">
                    <li><a href="{{ route('all.clarifies') }}" class="tp-link">{{ __('Все') }}</a></li>
                    <li><a href="{--{ route('add.clarifies') }--}" class="tp-link">{{ __('Добавить') }}</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>