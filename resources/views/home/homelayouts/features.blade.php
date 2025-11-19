<div class="lonyo-content-shape1">
    <img src="{{ asset('frontend/images/shape/shape1.svg') }}" alt="">
  </div>
  <div class="lonyo-section-padding2 position-relative">
    <div class="container">
      @php
       $title = App\Models\Title::find(1);   
      @endphp
      <div class="lonyo-section-title center">
         <h2 id="features-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $title->id }}">{{ $title->features }}</h2>
      </div>
      <div class="row">
        @php
          $features = App\Models\Feature::latest()->limit(6)->get();
        @endphp

        @foreach($features as $feature)
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-service-title">
              <h4>{{ $feature->title }}</h4>
              <img src="{{ asset('frontend/images') }}/v1/{{ $feature->icon }}" alt="{{ $feature->title }}">
            </div>
            <div class="lonyo-service-data">
              <p>{{ Str::limit($feature->description, 90,'...') }}</p>
            </div>
          </div>
        </div>
        @endforeach
       
        
      </div>
    </div>
    <div class="lonyo-feature-shape"></div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(){
      const titleElement = document.getElementById("features-title");
      function saveChanges(element) {
        let featuresId = element.dataset.id;
        let field = element.id === "features-title" ? "features" : "";
        let newValue = element.innerText.trim();
        fatch(`/edit-features/${featuresId}`,{
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
    });
   </script>