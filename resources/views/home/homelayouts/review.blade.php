<div class="lonyo-section-padding position-relative overflow-hidden">
    <div class="container">
      <div class="lonyo-section-title">
        <div class="row">
          @php
            $title = App\Models\Title::find(1);
          @endphp
          <div class="col-xl-8 col-lg-8">
            <h2 id="review-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $title->id }}">{{ $title->reviews }}</h2>
          </div>
          <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="lonyo-title-btn">
              <a class="lonyo-default-btn t-btn" href="contact-us.html">Read Customer Stories</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lonyo-testimonial-slider-init">
      @php
        $allReview = App\Models\Review::latest()->get();    
      @endphp
      @foreach($allReview as $all_review)
        <div class="lonyo-t-wrap wrap2 light-bg">
        <div class="lonyo-t-ratting">
          <img src="{{ asset('frontend/images/shape/star.svg') }}" alt="">
        </div>
        <div class="lonyo-t-text">
          <p>{{ $all_review->message }}</p>
        </div>
        <div class="lonyo-t-author">
          <div class="lonyo-t-author-thumb">
            <img src="{{ asset($all_review->image) }}" alt="">
          </div>
          <div class="lonyo-t-author-data">
            <p>{{ $all_review->name }}</p>
            <span>{{ $all_review->position }}</span>
          </div>
        </div>
        </div>
      @endforeach
    </div>
    <div class="lonyo-t-overlay2">
      <img src="{{ asset('frontend/images/v2/overlay.png') }}" alt="">
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(){
      const titleElement = document.getElementById("review-title");
      function saveChanges(element) {
        let reviewId = element.dataset.id;
        let field = element.id === "review-title" ? "reviews" : "";
        let newValue = element.innerText.trim();
        fatch(`/edit-reviews/${reviewsId}`,{
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