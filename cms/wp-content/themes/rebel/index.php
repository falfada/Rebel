<?php get_header() ?>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="d-flex position-relative">
            <div class="col-8 col-md-12">
                <h1 class="text-5xl">
                    <span class="mark black"><span>Elevate</span></span><br />
                    Your Video Editing, Amplify
                    <span class="mark black"><span>Your Impact</span></span>
                </h1>
                <p class="text-xl mt-40 mt-md-24 col-10 col-xl-12 line-2">
                    We help content creators and companies hire top editing remote
                    teams. Save cost and time with
                    <span class="font-800">lighting-fast results.</span>
                </p>
                <div class="d-flex gap-16 mt-48 mt-md-24">
                    <a href="<?= home_url('/get-started/') ?>" class="button black">Book a Call</a>
                    <a href="<?= home_url('/pricing/') ?>" class="button outline-black">View Pricing</a>
                </div>
            </div>
            <div id="play-button-container" data-aos="slide-left" data-aos-delay="80" data-aos-duration="5000" class="showVideo video m-auto mt-64 col-5 col-md-12 position-md-relative position-absolute top right" data-video-url="videos/RebelMainVideo.mp4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon" class="center" width="100%" height="100%">
                    <defs>
                        <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#00f0fc" />
                            <stop offset="1" stop-color="#0ff7a4" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,15 80,50 20,85" />
                </svg>
                <img src="<?= get_template_directory_uri() ?>/img/home/hero.gif" alt="" class="col-12" />
            </div>
        </div>
    </div>
</section>
<!-- Clients Logos -->
<section class="clients-logos mt-lg-48 swiper-container swiper-container-free-mode">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/bindamax-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/ekonomoda-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/superclase-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/mariabombon-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/idola-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/powerpalpueblo-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/balay-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/sushark-logo.png" alt="" />
        </div>
        <div class="swiper-slide">
            <img src="<?= get_template_directory_uri() ?>/img/home/nimmok-logo.png" alt="" />
        </div>
    </div>
</section>
<!-- Clients Slider 1 -->
<section class="testimonials one swiper-container swiper-container-free-mode mt-64">
    <div class="swiper-wrapper">
        <div class="swiper-slide client green col-3">
            <p class="text-lg font-700">
                “The team’s seamless communication and quick turnarounds have
                allowed me to meet tight deadlines without compromising quality.”
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
                “Their in-house editors took my raw footage and transformed it
                into visually stunning and engaging videos that perfectly captured
                my brand.”
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
            <img src="videos/portfolio2.png" alt="" />
        </div>

        <div class="swiper-slide client lightblue col-3">
            <p class="text-lg font-700">
                “The dedication and skill of Rebel’s editors truly shine through
                in the polished and professional videos they produced for my
                business.”
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
            <img src="videos/portfolio3.png" alt="" />
        </div>
    </div>
</section>
<!-- Clients Slider 2 -->
<section class="testimonials two swiper-container swiper-container-free-mode mt-16" data-direction="horizontal-reversed">
    <div class="swiper-wrapper">
        <div class="swiper-slide client green">
            <p class="text-lg font-700">
                “Their attention to detail and creative approach have elevated my
                videos to new heights. I highly recommend Rebel to fellow content
                creators .”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Sarah H.,
                    <span class="font-800 d-block">Content Creator</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video horizontal" data-video-url="videos/portfolio4.mp4">
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
            <img src="videos/portfolio4.png" alt="" />
        </div>

        <div class="swiper-slide client blue">
            <p class="text-lg font-700">
                “The revision process was effortless, and the team was receptive
                to my feedback, delivering results that exceeded my expectations.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial2.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Mark T.,
                    <span class="font-800 d-block">Digital Marketer.</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video horizontal" data-video-url="videos/portfolio5.mp4">
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
            <img src="videos/portfolio5.png" alt="" />
        </div>

        <div class="swiper-slide client lightblue">
            <p class="text-lg">
                “The quick turnarounds and open lines of communication made the
                process a breeze.”
            </p>
            <div class="mt-16 d-flex justify-between align-center">
                <img src="<?= get_template_directory_uri() ?>/img/general/testimonial.png" alt="Portrait Sarah" width="72" height="72" class="d-sm-none" />
                <p class="col-9 col-sm-12">
                    Laura M.,
                    <span class="font-800 d-block">Small Business Owner.</span>
                </p>
            </div>
        </div>

        <div class="swiper-slide showVideo video vertical" data-video-url="videos/portfolio1.mp4">
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
            <img src="videos/portfolio1.png" alt="" />
        </div>
    </div>
</section>
<!--Benefits-->
<section class="mt-120 mt-md-80">
    <div class="container d-grid grid-col-4 grid-2xl-col-2 grid-sm-col-1 gap-16 gap-y-lg-64 gap-x-lg-16">
        <div class="benefit-container">
            <img src="<?= get_template_directory_uri() ?>/img/home/icon-benefit1.svg" alt="Icon" class="benefit-img" />
            <h3 class="text-3xl font-800" data-aos="fade-up">
                Save More Than 30% In Editing Cost
            </h3>
            <p class="mt-24 text-lg" data-aos="fade-up">
                <b>Reduce expenses,</b> no compromise on quality.
            </p>
        </div>
        <div class="benefit-container">
            <img src="<?= get_template_directory_uri() ?>/img/home/icon-benefit2.svg" alt="Icon" class="benefit-img" />
            <h3 class="text-3xl font-800" data-aos="fade-up">
                Access To Top Remote Editors
            </h3>
            <p class="mt-24 text-lg" data-aos="fade-up">
                <b>Skilled professionals</b> for captivating videos.
            </p>
        </div>
        <div class="benefit-container">
            <img src="<?= get_template_directory_uri() ?>/img/home/icon-benefit3.svg" alt="Icon" class="benefit-img" />
            <h3 class="text-3xl font-800" data-aos="fade-up">
                From 1 To Unlimited Editors For You
            </h3>
            <p class="mt-24 text-lg" data-aos="fade-up">
                Grow according to <b>your needs.</b>
            </p>
        </div>
        <div class="benefit-container">
            <img src="<?= get_template_directory_uri() ?>/img/home/icon-benefit4.svg" alt="Icon" class="benefit-img" />
            <h3 class="text-3xl font-800" data-aos="fade-up">
                Increased 3x In Video Production
            </h3>
            <p class="mt-24 text-lg" data-aos="fade-up">
                <b>Focus on content cration,</b> more output.
            </p>
        </div>
    </div>
</section>
<!--About-->
<section class="gradient-bg mt-96 mt-md-24 position-relative">
    <div class="container">
        <h2 class="text-5xl" data-aos="fade-up" data-aos-duration="10000">
            Why <span class="mark black"><span>Rebel</span></span>
        </h2>
        <div class="d-grid grid-col-4 grid-md-col-1 gap-16 mt-48">
            <div class="about-container">
                <span class="material-symbols-outlined"> award_star </span>
                <h4 class="text-2xl mt-16">Dedicated Top Editors</h4>
                <p class="text-sm mt-16">
                    Skilled and dedicated editors with 2-3 years of experience.
                </p>
            </div>
            <div class="about-container">
                <h4 class="text-2xl">Unlimited requests and revisions</h4>
                <p class="text-sm mt-16">
                    Content creators can submit as many project requests and
                    revisions as needed.
                </p>
            </div>
            <div class="about-container">
                <h4 class="text-2xl">Stock footage</h4>
                <p class="text-sm mt-16">
                    Access to a library of video and audio resources for enhanced
                    editing.
                </p>
            </div>
            <div class="about-container">
                <h4 class="text-2xl">Real-time collaboration</h4>
                <p class="text-sm mt-16">
                    Seamless collaboration with your editing team across different
                    platforms.
                </p>
            </div>
            <div class="about-container">
                <h4 class="text-2xl">Infinitely Scalable</h4>
                <p class="text-sm mt-16">
                    Scale your team effortlessly, from 1 to 1000 editors, while we
                    handle all recruitment and hiring.
                </p>
            </div>
            <div class="about-container">
                <span class="material-symbols-outlined"> bolt </span>
                <h4 class="text-2xl mt-16">Lighting Fast Turnaround</h4>
                <p class="text-sm mt-16">
                    First draft of edited videos delivered within 2 days.
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-between mt-120 mt-lg-64">
        <img src="<?= get_template_directory_uri() ?>/img/home/benefits-girl.png" class="position-absolute bottom left d-lg-none" style="width: 30vw; max-width: 550px" alt="" />
        <div class="col-7 m-auto text-center">
            <p class="text-4xl font-800 text-capitalize">
                Interested in getting one or all of this
                <span class="mark black"><span>benefits?</span></span>
            </p>
            <a href="<?= home_url('/get-started/') ?>" class="button black mt-40">Book a Call</a>
        </div>
        <img src="<?= get_template_directory_uri() ?>/img/home/benefits-boy.png" class="position-absolute bottom right d-lg-none" style="width: 34vw; max-width: 639px" alt="" />
    </div>
</section>
<!--Pricing-->
<section class="pricing-home">
    <div class="container text-center">
        <h2 class="text-center text-5xl col-9 col-lg-12 m-auto">
            Hire Your
            <span class="mark gradient"><span>Top Video Editor</span></span>
            <span class="text-4xl d-block">For a Monthly Subscription Fee
            </span>
        </h2>
        <div class="pricing-options monthly">
            <label class="monthly">
                <input type="radio" name="interval-pricing" value="monthly" checked />
                Monthly Plan
            </label>
            <label class="quaterly">
                <input type="radio" name="interval-pricing" value="quaterly" />
                Quaterly <span>10% off</span>
            </label>
        </div>
        <div class="d-flex justify-center align-center text-left gap-16 gap-md-32 mt-48">
            <div class="col-4 col-2xl-5 col-md-12 pricing-container lightblue" data-aos="fade-up">
                <span class="material-symbols-outlined"> flag </span>
                <h3 class="text-2xl mt-16">Starter</h3>
                <p class="text-md mt-16 col-10">
                    Part Time dedicated editor 20 Hours/week
                </p>
                <div class="d-flex align-baseline gap-16">
                    <div class="price">
                        <p class="monthly selected text-4xl font-800">$1.500</p>
                        <p class="quaterly text-4xl font-800">$1.350</p>
                    </div>
                    <p class="text-sm">per month</p>
                </div>
                <ul>
                    <li class="d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        Unlimited changes
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        24-48h first draft - Same day revisions
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        Within-Hour Communication
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        Project Manager
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        Basic animations & motion graphics
                    </li>
                    <li class="mt-24 d-flex -align-center gap-16 pricing-more">
                        <span class="text-underline"> View more </span>
                        <span class="material-symbols-outlined"> expand_more </span>
                    </li>
                    <div class="mt-24 hidden-items">
                        <li class="d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            30gb Upload to Cloud Storage
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Color Grading
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Frame.io revision tool
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Multicam Editing
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Premiere Project Files
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Licensed Music & Footage
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Audio enhancement
                        </li>
                    </div>
                </ul>
            </div>
            <div class="col-4 col-2xl-5 col-md-12 pricing-container green recommended" data-aos="fade-up" data-aos-delay="80">
                <span class="material-symbols-outlined"> rocket </span>
                <h3 class="text-2xl mt-16">Pro</h3>
                <p class="text-md mt-16 col-10">
                    Full-Time dedicated editor 40 Hours/week
                </p>
                <div class="d-flex align-baseline gap-16">
                    <div class="price">
                        <p class="monthly selected text-4xl font-800">$2.400</p>
                        <p class="quaterly text-4xl font-800">$2.160</p>
                    </div>
                    <p class="text-sm">per month</p>
                </div>
                <ul>
                    <li class="d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        Unlimited changes
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        24-48h first draft - Same day revisions
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> lock_open </span>
                        Real time communication
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> check_circle </span>
                        Project Manager
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> lock_open </span>
                        Custom animations & motion graphics
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> lock_open </span>
                        Custom Thumbnail design
                    </li>
                    <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                        <span class="material-symbols-outlined"> lock_open </span>
                        2TB Upload to Cloud Storage
                    </li>

                    <li class="mt-24 d-flex -align-center gap-16 pricing-more">
                        <span class="text-underline"> View more </span>
                        <span class="material-symbols-outlined"> expand_more </span>
                    </li>
                    <div class="mt-24 hidden-items">
                        <li class="d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Color Grading
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Frame.io revision tool
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Multicam Editing
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Premiere Project Files
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Licensed Music & Footage
                        </li>

                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                            <span class="material-symbols-outlined">
                                check_circle
                            </span>
                            Audio enhancement
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <a href="<?= home_url('/get-started/') ?>" class="button black mt-40">Book a call</a>
    </div>
</section>
<!--How it works -->
<section class="darkgrey-bg mt-56">
    <div class="container">
        <h2 class="col-8 col-lg-12 text-white text-5xl">
            Turn Your Raw Footage Into
            <span class="mark gradient"><span>Amazing Stories</span></span>
        </h2>
        <div class="d-grid grid-col-3 grid-lg-col-1 gap-16 mt-72">
            <div class="grain green text-lg-center" data-aos="fade-up">
                <div class="d-flex gap-16 justify-lg-center align-center">
                    <div class="round-number black text-md">1</div>
                    <h3 class="text-lg font-800">Send us your footage</h3>
                </div>
                <img src="<?= get_template_directory_uri() ?>/img/home/step1.png" alt="" class="mt-16" style="width: 90%; margin: auto; display: block" />
                <p class="text-md mt-40">
                    Provide us the necessary project details and assets.
                </p>
            </div>
            <div class="grain blue text-lg-center" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex gap-16 justify-lg-center align-center">
                    <div class="round-number black text-md">2</div>
                    <h3 class="text-lg font-800">Review your first draft</h3>
                </div>
                <img src="<?= get_template_directory_uri() ?>/img/home/step2.png" alt="" class="mt-16" style="width: 90%; margin: auto; display: block" />
                <p class="text-md mt-40">
                    Within 24-48 hours, you will receive the initial draft of your
                    video. You can make unlimited changes!
                </p>
            </div>
            <div class="grain lightblue text-lg-center" data-aos="fade-up" data-aos-delay="180">
                <div class="d-flex gap-16 justify-lg-center align-center">
                    <div class="round-number black text-md">3</div>
                    <h3 class="text-lg font-800">Get your perfect video</h3>
                </div>
                <img src="<?= get_template_directory_uri() ?>/img/home/step3.png" alt="" class="mt-16" style="width: 90%; margin: auto; display: block" />
                <p class="text-md mt-40">
                    Once it’s ready, you can easily download your kick-Ass video.
                </p>
            </div>
        </div>
        <div class="d-flex mt-120 mt-lg-56">
            <div class="col-7 col-lg-12 text-lg-center">
                <h2 class="text-4xl font-800 text-white">
                    Hire Your Professional Video Editor Today
                </h2>
                <a href="<?= home_url('/get-started/') ?>" class="button gradient mt-56 mt-lg-16">Book a call</a>
            </div>
            <img src="<?= get_template_directory_uri() ?>/img/home/works-girl.png" alt="" class="position-absolute bottom right d-lg-none" />
        </div>
    </div>
</section>
<!--FAQ-->
<section class="mt-96">
    <div class="container">
        <div class="d-flex justify-between">
            <div class="col-5 col-2xl-4 col-lg-12 position-sticky position-lg-relative align-self-start">
                <p class="mark green text-sm font-800">
                    <span>FAQ</span>
                </p>
                <h2 class="text-5xl">Frequently Asked Questions</h2>
            </div>
            <div class="col-7 col-2xl-8 col-lg-12 mt-lg-24">
                <div class="faq-container">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                What video editing software do you utilize?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            Our preferred video editing platform is the Adobe Suite,
                            which includes Premiere Pro, After Effects, and Audition. We
                            leverage these powerful tools to bring your videos to life.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                Is there a limit to the amount of raw footage I can
                                submit?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            You have the freedom to submit as much raw footage as you
                            desire. However, please note that larger file submissions
                            might experience slight delays due to longer download times.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                How can I upload my footage to your platform?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            Once you sign up, we will provide you with a dedicated
                            folder. Depending on your plan, you will have access to a
                            certain amount of storage, ranging from 30GB to 2TB.
                            Alternatively, if you have your own storage system for
                            larger projects, you can simply share the download link with
                            us.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                Do I have access to the project files?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            Absolutely! With each delivery, you will receive not only
                            the final video but also the project files and any
                            additional assets we have sourced, providing you with
                            complete control and flexibility.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                Are your editors in-house or freelance?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            Our team consists of highly skilled in-house editors who
                            have undergone extensive testing and training. They possess
                            the necessary expertise, efficiency, and knowledge to create
                            exceptional branded content.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                Is there a required minimum duration for the subscription?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            No, we don’t impose any mandatory commitment period. You
                            have the flexibility to subscribe for as short or long as
                            you prefer.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                What is the payment commitment like?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            We offer a convenient monthly credit card payment system.
                            There are no contracts involved, and you can cancel your
                            subscription whenever you need to, providing you with peace
                            of mind.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                How many videos can be edited per month?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            While we don’t impose a specific limit on the number of
                            videos you can submit, we allocate a dedicated editor who is
                            available for either 20 or 40 hours per week. The exact
                            number of videos we can edit per month varies based on your
                            unique working style and project requirements. However, we
                            strive to deliver first drafts within 1-2 days and revisions
                            within 24 hours.
                        </p>
                    </div>
                </div>

                <div class="faq-container mt-40 mt-sm-16">
                    <div class="faq-trigger">
                        <div class="d-flex justify-between">
                            <p class="text-md font-800">
                                Will I have the same editor for every video?
                            </p>
                            <div class="faq-icon">
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="faq-expand line-2">
                        <p>
                            Absolutely! You will have a dedicated video editor assigned
                            to your projects. Additionally, if necessary, we can provide
                            a thumbnail artist for each video. For high-volume creators,
                            we are even capable of assembling a team of multiple video
                            editors to ensure timely delivery and consistent quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>