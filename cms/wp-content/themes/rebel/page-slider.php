<?php get_header() ?>

<!-- Swiper -->
<div class="testimonials swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide client green col-3">
            <p class="text-lg">
                “The team’s seamless communication and quick turnarounds have allowed me to meet tight deadlines without compromising quality.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" />
                <p class="col-10">
                    Sarah H.,
                    <span class="font-800 d-block">Content Creator</span>
                </p>
            </div>
        </div>
        <div class="swiper-slide video horizontal">
            <div id="play-button-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#00f0fc" />
                            <stop offset="1" stop-color="#0ff7a4" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,15 80,50 20,85" />
                </svg>
            </div>
            <video>
                <source src="videos/horizontal-video.mp4">
            </video>
        </div>
        <div class="swiper-slide client blue">
            <p class="text-lg">
                “The team’s seamless communication and quick turnarounds have allowed me to meet tight deadlines without compromising quality.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" />
                <p class="col-10">
                    Sarah H.,
                    <span class="font-800 d-block">Content Creator</span>
                </p>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<?php get_footer() ?>