<header class="site-header lonyo-header-section light-bg" id="sticky-menu">
  <div class="container">
    <div class="row gx-3 align-items-center justify-content-between">
      <div class="col-8 col-sm-auto ">
        <div class="header-logo1 ">
          <a href="{{ url('/') }}">
            <img src="{{ asset('frontend/images/logo/logo-dark.svg') }}" alt="logo">
          </a>
        </div>
      </div>
      <div class="col">
        <div class="lonyo-main-menu-item">
          <nav class="main-menu menu-style1 d-none d-lg-block menu-left">
            <ul>
              <li><a href="#">{{ __('Главная') }}</a></li>
              <li class="menu-item-has-children">
                <a href="#">{{ __('О компании') }}</a>
                <ul class="sub-menu">
                  <li><a href="#">{{ __('Компания') }}</a></li>
                  <li><a href="#">{{ __('Персонал') }}</a></li>
                </ul>
              </li>
              <li><a href="">{{ __('Сервис') }}</a></li>
              <li><a href="">{{ __('Портфолио') }}</a></li>
              <li><a href="">{{ __('Блог') }}</a></li>
              <li><a href="">{{ __('Контакты') }}</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
            @auth
              <div class="lonyo-header-info-content">
                <ul>
                  <li><a href="{{ route('dashboard') }}">{{ __('Панель') }}</a></li>
                </ul>
              </div>
              @else
              <div class="lonyo-header-info-content">
                <ul>
                  <li><a href="{{ route('login') }}">{{ __('Вход') }}</a></li>
                </ul>
              </div>
            @endauth
            
          </div>
          <div class="lonyo-header-menu">
          <nav class="navbar site-navbar justify-content-between">
            <button class="lonyo-menu-toggle d-inline-block d-lg-none">
              <span></span>
            </button>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>