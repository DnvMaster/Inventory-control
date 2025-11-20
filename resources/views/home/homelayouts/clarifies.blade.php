@php
  $clarifie = App\Models\Clarifie::find(1);
@endphp
<section class="lonyo-section-padding6">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="lonyo-content-thumb" data-aos="fade-up" data-aos-duration="700">
            <img src="{{ asset($clarifie->image) }}" alt="{{ $clarifie->title }}">
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-default-content pl-50" data-aos="fade-up" data-aos-duration="700">
            <h2>{{ $clarifie->title }}</h2>
            <p class="data">{{ $clarifie->description }}</p>
            <div class="lonyo-faq-wrap1 mt-50">
              <div class="lonyo-faq-item open" data-aos="fade-up" data-aos-duration="500">
                <div class="lonyo-faq-header">
                  <h4>Что такое Route в Laravel</h4>
                  <div class="lonyo-active-icon">
                    <img class="plasicon" src="{{ asset('frontend/images/v1/mynus.svg') }}" alt="">
                    <img class="mynusicon" src="{{ asset('frontend/images/v1/plas.svg') }}" alt="">
                  </div>
                </div>
                <div class="lonyo-faq-body">
                  <p>Route — это путь, по которому Laravel получает HTTP-запрос и решает, какой код выполнить в ответ.
                     Route::get() — для получения данных (например, страницы).
                     Route::post() — для отправки форм.
                     Route::put(), Route::delete() — для обновления и удаления.
                     Route::match() — для нескольких методов.
                     Route::any() — принимает любой HTTP-метод.</p>
                </div>
              </div>
              <div class="lonyo-faq-item" data-aos="fade-up" data-aos-duration="700">
                <div class="lonyo-faq-header">
                  <h4>Что такое Model в Laravel</h4>
                  <div class="lonyo-active-icon">
                    <img class="plasicon" src="{{ asset('frontend/images/v1/mynus.svg') }}" alt="">
                    <img class="mynusicon" src="{{ asset('frontend/images/v1/plas.svg') }}" alt="">
                  </div>
                </div>
                <div class="lonyo-faq-body">
                  <p>Model — это класс, который представляет таблицу в базе данных и управляет её данными. Он отвечает за: Получение, создание, обновление и удаление записей. Связи между таблицами (отношения). Локальные и глобальные scopes (фильтры). Кастомные методы для бизнес-логики.</p>
                </div>
              </div>
              <div class="lonyo-faq-item" data-aos="fade-up" data-aos-duration="900">
                <div class="lonyo-faq-header">
                  <h4>Что такое Controller в Laravel</h4>
                  <div class="lonyo-active-icon">
                    <img class="plasicon" src="{{ asset('frontend/images/v1/mynus.svg') }}" alt="">
                    <img class="mynusicon" src="{{ asset('frontend/images/v1/plas.svg') }}" alt="">
                  </div>
                </div>
                <div class="lonyo-faq-body">
                  <p>Контроллер — это класс, который обрабатывает HTTP-запросы, управляет логикой приложения и возвращает ответ, например, HTML-страницу, JSON или редирект.
                    Получает запрос от маршрута (Route). Обращается к модели (Model) за данными. Передаёт данные в представление (View). Возвращает результат пользователю.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>