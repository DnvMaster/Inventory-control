@php
  $slider = App\Models\Slider::find(1);    
@endphp
<div class="lonyo-hero-section light-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-hero-content" data-aos="fade-up" data-aos-duration="700">
            <h1 id="slider-title" contenteditable="{{ auth()->check() ? 'true':'false' }}" data-id="{{ $slider->id }}" class="hero-title">{{ $slider->title }}</h1>
            <p id="slider-description" contenteditable="{{ auth()->check() ? 'true':'false' }}" data-in="{{ $slider->id }}">{{ $slider->description }}</p>
            <div class="mt-50" data-aos="fade-up" data-aos-duration="900">
              <a href="{{ $slider->link }}" class="lonyo-default-btn hero-btn">{{ __('GitHub') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="lonyo-hero-thumb" data-aos="fade-left" data-aos-duration="700">
            <img src="assets/images/v1/hero-thumb.png" alt="">
            <div class="lonyo-hero-shape">
              <img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(){
      const titleElement = document.getElementById("slider-title");
      const descElement = document.getElementById("slider-description");
      function saveChanges(element) {
        let sliderId = element.dataset.id;
        let field = element.id === "slider-title" ? "title" : "description";
        let newValue = element.innerText.trim();
        fatch(`/edit-slider/${sliderId}`,{
          method: "POST",
          headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),"Content-Type": "application/json"
          },
          body: JSON.stringify({ [field]:newValue })
        })
        .then(response => response.json())
        .then(data => {
          if(data.success) {
            console.log(`${field} Обновлено успешно`);
          }
        })
        .catch(error => console.error("Error:", error)); 
      }
      document.addEventListener("keydown", function(e){
        if (e.key === "Enter") {
          e.preventDefault();
          saveChanges(e.target);
        }
      });
      titleElement.addEventListener("blur", function () {
        saveChanges(titleElement);
      });
      descElement.addEventListener("blur", function() {
        saveChanges(descElement);
      });
    });
   </script>