<section class="swiper-img-scroll">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/images/swiper-2.webp" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/images/swiper-2.webp" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/images/swiper-2.webp" alt="">
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
    </section>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        
        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper(".mySwiper", {
            autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });
        </script>