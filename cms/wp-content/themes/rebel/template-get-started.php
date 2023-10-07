<?php

/**
 * Template name: Get started page
 */

get_header();

/** Schedule video call fields */
$title_schedule = get_field('title_schedule');
$description_schedule = get_field('description_schedule');
$cover_video_schedule = get_field('cover_video_schedule');
$video_schedule = get_field('video_schedule');
$calendly_link_schedule = get_field('calendly_link_schedule');
/** How it works fields */
$title_how_it_works = get_field('title_how_it_works', 2);
$repeater_boxes_how_it_works = 'repeater_boxes_how_it_works';
/** How it works CTA fields */
$text_how_it_works = get_field('text_how_it_works');
$bottom_image_how_it_works = get_field('bottom_image_how_it_works');
/** Carousel Testimonials fields */
$repeater_carousel_client_one = 'repeater_carousel_client_one';
$repeater_carousel_client_two = 'repeater_carousel_client_two';
?>

<!-- Schedule a video call -->
<section class="mt-96 mt-2xl-56">
    <div class="container">
        <div class="d-flex justify-between align-center">
            <div class="col-7 col-md-12">
                <h1 class="text-5xl"><?= $title_schedule ?></h1>
                <p class="text-lg mt-40 line-2"><?= $description_schedule ?></p>
                <?php if ($video_schedule) : ?>
                    <div id="play-button-container" class="showVideo video col-8 m-auto mt-64 mt-2xl-48" data-data-video-url="<?= esc_url($video_schedule['url']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon" class="top-left">
                            <defs>
                                <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#00f0fc" />
                                    <stop offset="1" stop-color="#0ff7a4" />
                                </linearGradient>
                            </defs>
                            <polygon points="20,15 80,50 20,85" />
                        </svg>
                        <img src="<?= esc_url($cover_video_schedule['url']) ?>" alt="<?= esc_attr($cover_video_schedule['alt']) ?>" class="col-12">
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-5 col-md-12 mt-md-24">
                <?php if ($calendly_link_schedule) : ?>
                    <div class="calendly-inline-widget" data-url="<?= $calendly_link_schedule ?>" style="min-width:320px;height:700px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!--How it works -->
<section class="darkgrey-bg mt-56">
    <div class="container">
        <h2 class="col-8 col-lg-12 text-white text-5xl"><?= $title_how_it_works ?></h2>
        <?php if (have_rows($repeater_boxes_how_it_works, 2)) : $delay = 0; ?>
            <div class="d-grid grid-col-3 grid-lg-col-1 gap-16 mt-72">
                <?php while (have_rows($repeater_boxes_how_it_works, 2)) : the_row();
                    $delay += 100;
                    $background_color = get_sub_field('background_color');
                    $title = get_sub_field('title');
                    $image = get_sub_field('image');
                    $description = get_sub_field('description');
                ?>
                    <div class="grain <?= $background_color ?> text-lg-center" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="d-flex gap-16 justify-lg-center align-center">
                            <div class="round-number black text-md"><?= get_row_index() ?></div>
                            <h3 class="text-lg font-800"><?= $title ?></h3>
                        </div>
                        <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" class="mt-16" style="width: 90%; margin: auto; display: block" />
                        <p class="text-md mt-40"><?= $description ?></p>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="d-flex mt-120">
            <h2 class="text-4xl font-800 text-white col-7 col-md-12"><?= $text_how_it_works ?></h2>
            <img src="<?= esc_url($bottom_image_how_it_works['url']) ?>" alt="<?= esc_url($bottom_image_how_it_works['alt']) ?>" class="position-absolute bottom right d-md-none col-5">
        </div>
    </div>
</section>

<!-- Clients Slider 1 -->
<?php if (have_rows($repeater_carousel_client_one, 2)) : ?>
    <section class="testimonials one swiper-container swiper-container-free-mode mt-64">
        <div class="swiper-wrapper">
            <?php while (have_rows($repeater_carousel_client_one, 2)) : the_row();
                $slide_type = get_sub_field('slide_type');
            ?>
                <?php if ($slide_type === 'text') :
                    $background_color = get_sub_field('background_color');
                    $testimonial_author = get_sub_field('testimonial_author');
                    $photo_autor = get_sub_field('photo_autor');
                    $name_author = get_sub_field('name_author');
                    $position_author = get_sub_field('position_author');
                ?>
                    <div class="swiper-slide client <?= $background_color ?> col-3">
                        <p class="text-md font-700">“<?= $testimonial_author ?>”</p>
                        <div class="mt-16 d-flex justify-between align-center">
                            <img src="<?= esc_url($photo_autor['url']) ?>" alt="<?= esc_attr($photo_autor['alt']) ?>" width="72" height="72" class="d-sm-none" />
                            <p class="col-9 col-sm-12">
                                <?= $name_author ?>.,
                                <span class="font-800 d-block"><?= $position_author ?></span>
                            </p>
                        </div>
                    </div>
                <?php elseif ($slide_type === 'video') :
                    $orientation_video = get_sub_field('orientation_video');
                    $cover_video = get_sub_field('cover_video');
                    $file_video = get_sub_field('file_video');

                ?>
                    <div class="swiper-slide showVideo video <?= $orientation_video ?>" data-video-url="<?= esc_url($file_video['url']) ?>">
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
                        <img src="<?= esc_url($cover_video['url']) ?>" alt="<?= esc_attr($cover_video['alt']) ?>" />
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Clients Slider 2 -->
<?php if (have_rows($repeater_carousel_client_two, 2)) : ?>
    <section class="testimonials two swiper-container swiper-container-free-mode mt-16" data-direction="horizontal-reversed">
        <div class="swiper-wrapper">
            <?php while (have_rows($repeater_carousel_client_two, 2)) : the_row();
                $slide_type = get_sub_field('slide_type');
            ?>
                <?php if ($slide_type === 'text') :
                    $background_color = get_sub_field('background_color');
                    $testimonial_author = get_sub_field('testimonial_author');
                    $photo_autor = get_sub_field('photo_autor');
                    $name_author = get_sub_field('name_author');
                    $position_author = get_sub_field('position_author');
                ?>
                    <div class="swiper-slide client <?= $background_color ?> col-3">
                        <p class="text-md font-700">“<?= $testimonial_author ?>”</p>
                        <div class="mt-16 d-flex justify-between align-center">
                            <img src="<?= esc_url($photo_autor['url']) ?>" alt="<?= esc_attr($photo_autor['alt']) ?>" width="72" height="72" class="d-sm-none" />
                            <p class="col-9 col-sm-12">
                                <?= $name_author ?>.,
                                <span class="font-800 d-block"><?= $position_author ?></span>
                            </p>
                        </div>
                    </div>
                <?php elseif ($slide_type === 'video') :
                    $orientation_video = get_sub_field('orientation_video');
                    $cover_video = get_sub_field('cover_video');
                    $file_video = get_sub_field('file_video');

                ?>
                    <div class="swiper-slide showVideo video <?= $orientation_video ?>" data-video-url="<?= esc_url($file_video['url']) ?>">
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
                        <img src="<?= esc_url($cover_video['url']) ?>" alt="<?= esc_attr($cover_video['alt']) ?>" />
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer() ?>