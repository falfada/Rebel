<?php get_header() ?>

<section class="mt-120">
    <div class="container">
        <div class="d-flex justify-between">
            <div class="col-7 col-md-12">
                <h1 class="text-5xl">
                    Schedule a Free Strategy
                    <span class="mark gradient"><span>Video Call</span></span>
                </h1>
                <p class="text-lg mt-40 line-2">
                    We’ll analyze your current post-production workflow, understand
                    your video requirements, and explore if REBEL is a fit with your
                    team’s needs.
                </p>
                <div id="play-button-container" class="showVideo video col-10 m-auto mt-64" data-video-url="videos/vertical-video.mp4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon" class="top-left">
                        <defs>
                            <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#00f0fc" />
                                <stop offset="1" stop-color="#0ff7a4" />
                            </linearGradient>
                        </defs>
                        <polygon points="20,15 80,50 20,85" />
                    </svg>
                    <img src="https://placehold.co/600x400" alt="" class="col-12">
                </div>
            </div>
            <div class="col-5 col-md-12 mt-md-24">
                <div class="calendly-inline-widget" data-url="https://calendly.com/daniel-rebel/30min?hide_event_type_details=1&hide_gdpr_banner=1&primary_color=00ffcc"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            </div>
        </div>
    </div>
</section>
<!--How it works -->
<section class="darkgrey-bg mt-56">
    <div class="container">
        <h2 class="col-8 col-lg-12 text-white text-5xl">
            Turn Your Raw Footage Into <span class="mark gradient"><span>Amazing Stories</span></span>
        </h2>
        <div class="d-grid grid-col-3 grid-lg-col-1 gap-16 mt-72">
            <div class="grain green text-lg-center" data-aos="fade-up">
                <div class="d-flex gap-16 justify-lg-center align-center">
                    <div class="round-number black text-md">1</div>
                    <h3 class="text-lg font-800">Send us your footage</h3>
                </div>
                <img src="<?= get_template_directory_uri() ?>/img/home/step1.png" alt="" class="mt-16" style="width: 90%; margin: auto; display: block;">
                <p class="text-md mt-40">
                    Provide us the necessary project details and assets.
                </p>
            </div>
            <div class="grain blue text-lg-center" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex gap-16 justify-lg-center align-center">
                    <div class="round-number black text-md">2</div>
                    <h3 class="text-lg font-800">Review your first draft</h3>
                </div>
                <img src="<?= get_template_directory_uri() ?>/img/home/step2.png" alt="" class="mt-16" style="width: 90%; margin: auto; display: block;">
                <p class="text-md mt-40">
                    Within 24-48 hours, you will receive the initial draft of your video. You can make unlimited changes!
                </p>
            </div>
            <div class="grain lightblue text-lg-center" data-aos="fade-up" data-aos-delay="180">
                <div class="d-flex gap-16 justify-lg-center align-center">
                    <div class="round-number black text-md">3</div>
                    <h3 class="text-lg font-800">Get your perfect video</h3>
                </div>
                <img src="<?= get_template_directory_uri() ?>/img/home/step3.png" alt="" class="mt-16" style="width: 90%; margin: auto; display: block;">
                <p class="text-md mt-40">
                    Once it’s ready, you can easily download your kick-Ass video.
                </p>
            </div>
        </div>
        <div class="d-flex mt-120">
            <h2 class="text-4xl font-800 text-white col-7 col-md-12">
                Expert Editing Team, No Contracts, No Hassle. <span class="mark gradient"><span>Focus On Your Growth</span></span>
            </h2>
            <img src="<?= get_template_directory_uri() ?>/img/getstarted/boy.png" alt="" class="position-absolute bottom right d-md-none col-5">
        </div>
    </div>
</section>
<!-- Clients Slider 1 -->
<section class="testimonials one swiper-container swiper-container-free-mode mt-64">
    <div class="swiper-wrapper">
        <div class="swiper-slide client green col-3">
            <p class="text-lg font-700">
                “The team’s seamless communication and quick turnarounds have allowed me to meet tight deadlines without compromising quality.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Sarah H.,
                    <span class="font-800 d-block">Content Creator</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video vertical" data-video-url="videos/portfolio1.mp4">
            <div id="play-button-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon" width="100%" height="100%">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#00f0fc" />
                            <stop offset="1" stop-color="#0ff7a4" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,15 80,50 20,85" />
                </svg>
            </div>
            <img src="videos/portfolio1.png" alt="" />
        </div>

        <div class="swiper-slide client blue col-3">
            <p class="text-lg font-700">
                “Their in-house editors took my raw footage and transformed it into visually stunning and engaging videos that perfectly captured my brand.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial2.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Mark T.,
                    <span class="font-800 d-block">Digital Marketer.</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video horizontal" data-video-url="videos/portfolio2.mp4">
            <div id="play-button-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon" width="100%" height="100%">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#00f0fc" />
                            <stop offset="1" stop-color="#0ff7a4" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,15 80,50 20,85" />
                </svg>
            </div>
            <img src="videos/portfolio2.png" alt="">
        </div>

        <div class="swiper-slide client lightblue col-3">
            <p class="text-lg font-700">
                “The dedication and skill of Rebel’s editors truly shine through in the polished and professional videos they produced for my business.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Laura M.,
                    <span class="font-800 d-block">Small Business Owner.</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video vertical" data-video-url="videos/portfolio3.mp4">
            <div id="play-button-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon" width="100%" height="100%">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#00f0fc" />
                            <stop offset="1" stop-color="#0ff7a4" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,15 80,50 20,85" />
                </svg>
            </div>
            <img src="videos/portfolio3.png" alt="">
        </div>



    </div>
</section>
<!-- Clients Slider 2 -->
<section class="testimonials two swiper-container swiper-container-free-mode mt-16" data-direction="horizontal-reversed">
    <div class="swiper-wrapper">
        <div class="swiper-slide client green">
            <p class="text-lg font-700">
                “Their attention to detail and creative approach have elevated my videos to new heights. I highly recommend Rebel to fellow content creators .”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Sarah H.,
                    <span class="font-800 d-block">Content Creator</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video horizontal" data-video-url="videos/portfolio1.mp4">
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
            <img src="videos/portfolio4.png" alt="">
        </div>

        <div class="swiper-slide client blue">
            <p class="text-lg font-700">
                “The revision process was effortless, and the team was receptive to my feedback, delivering results that exceeded my expectations.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial2.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Mark T.,
                    <span class="font-800 d-block">Digital Marketer.</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video horizontal" data-video-url="videos/portfolio2.mp4">
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
            <img src="videos/portfolio5.png" alt="">
        </div>

        <div class="swiper-slide client lightblue">
            <p class="text-lg">
                “The quick turnarounds and open lines of communication made the process a breeze.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Laura M.,
                    <span class="font-800 d-block">Small Business Owner.</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video vertical" data-video-url="videos/portfolio3.mp4">
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
            <img src="videos/portfolio1.png" alt="">
        </div>

    </div>
</section>

<?php get_footer() ?>