<div class="lonyo-menu-wrapper">
    <div class="lonyo-menu-area text-center">
      <div class="lonyo-menu-mobile-top">
        <div class="mobile-logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('frontend/images/logo/logo-dark.svg') }}" alt="logo">
          </a>
        </div>
        <button class="lonyo-menu-toggle mobile">
          <i class="ri-close-line"></i>
        </button>
      </div>
      <div class="lonyo-mobile-menu">
       <ul>
        <li><a href="#">{{ __('Главная') }}</a></li>
        <li class="menu-item-has-children"><a href="#">{{ __('О компании') }}</a>
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
      </div>
      <div class="lonyo-mobile-menu-btn">
        <a class="lonyo-default-btn sm-size" href="contact-us.html" data-text="Get in Touch"><span class="btn-wraper">Get in Touch</span></a>
        <a class="lonyo-default-btn sm-size" href="contact-us.html" data-text="Get in Touch"><span class="btn-wraper">Get in Touch</span></a>
      </div>
    </div>
  </div>