<?php get_header();

if (is_front_page()) :

    /** Hero fields */
    $main_title_hero = get_field('main_title_hero');
    $description_hero = get_field('description_hero');
    $first_button_hero = get_field('first_button_hero');
    $second_button_hero = get_field('second_button_hero');
    $cover_video_hero = get_field('cover_video_hero');
    $video_hero = get_field('video_hero');
    /** Gallery Logos fields */
    $gallery_logos_carousel = get_field('gallery_logos_carousel');
    /** Carousel Testimonials fields */
    $repeater_carousel_client_one = 'repeater_carousel_client_one';
    $repeater_carousel_client_two = 'repeater_carousel_client_two';
    /** Benefits fields */
    $repeater_boxes_benefits = 'repeater_boxes_benefits';
    /** About fields */
    $title_about = get_field('title_about');
    $repeater_boxes_about = 'repeater_boxes_about';
    $left_image_about = get_field('left_image_about');
    $text_about = get_field('text_about');
    $button_about = get_field('button_about');
    $right_image_about = get_field('right_image_about');
    /** Pricing fields */
    $title_pricing = get_field('title_pricing');
    $group_options_pricing = get_field('group_options_pricing');
    $repeater_plans_pricing = 'repeater_plans_pricing';
    $button_pricing = get_field('button_pricing');
    $repeater_visible_features_list = 'repeater_visible_features_list';
    $repeater_hidden_features_list = 'hidden_features_list';
    /** How it works fields */
    $title_how_it_works = get_field('title_how_it_works');
    $repeater_boxes_how_it_works = 'repeater_boxes_how_it_works';
    /** How it works CTA fields */
    $text_how_it_works = get_field('text_how_it_works');
    $button_how_it_works = get_field('button_how_it_works');
    $bottom_image_how_it_works = get_field('bottom_image_how_it_works');
    /** FAQ fields */
    $pre_title_faq = get_field('pre_title_faq');
    $title_faq = get_field('title_faq');
    $repeater_questions = 'repeater_questions';

?>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="d-flex position-relative">
                <div class="col-8 col-md-12">
                    <h1 class="text-5xl"><?= $main_title_hero ?></h1>
                    <p class="text-lg mt-40 mt-2xl-24 col-10 col-xl-12 line-2"><?= $description_hero ?></p>
                    <div class="d-flex gap-16 mt-48 mt-2xl-24">
                        <?php if ($first_button_hero) :
                            $link_url = $first_button_hero['url'];
                            $link_title = $first_button_hero['title'];
                            $link_target = $first_button_hero['target'] ? $first_button_hero['target'] : '_self';
                        ?>
                            <a href="<?= esc_url($link_url); ?>" class="button black" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                        <?php endif ?>
                        <?php if ($second_button_hero) :
                            $link_url = $second_button_hero['url'];
                            $link_title = $second_button_hero['title'];
                            $link_target = $second_button_hero['target'] ? $second_button_hero['target'] : '_self';
                        ?>
                            <a href="<?= esc_url($link_url); ?>" class="button outline-black" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                        <?php endif ?>
                    </div>
                </div>
                <?php if ($video_hero) : ?>
                    <div id="play-button-container" class="showVideo video m-auto mt-64 col-5 col-md-12 position-md-relative position-absolute right top" data-video-url="<?= esc_url($video_hero['url']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="play-button-icon" class="center" width="100%" height="100%">
                            <defs>
                                <linearGradient id="linear-gradient" x1="0.254" y1="0.5" x2="1" y2="1" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#00f0fc" />
                                    <stop offset="1" stop-color="#0ff7a4" />
                                </linearGradient>
                            </defs>
                            <polygon points="20,15 80,50 20,85" />
                        </svg>
                        <img src="<?= esc_url($cover_video_hero['url']) ?>" alt="<?= esc_attr($cover_video_hero['alt']) ?>" class="col-12" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Clients Logos -->
    <?php if ($gallery_logos_carousel) : ?>
        <section class="clients-logos mt-2xl-48 swiper-container swiper-container-free-mode">
            <div class="swiper-wrapper">
                <?php foreach ($gallery_logos_carousel as $logo) : ?>
                    <div class="swiper-slide">
                        <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- Clients Slider 1 -->
    <?php if (have_rows($repeater_carousel_client_one)) : ?>
        <section class="testimonials one swiper-container swiper-container-free-mode mt-64">
            <div class="swiper-wrapper">
                <?php while (have_rows($repeater_carousel_client_one)) : the_row();
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
                            <div class="mt-16 d-flex gap-16 align-center">
                                <img src="<?= esc_url($photo_autor['url']) ?>" alt="<?= esc_attr($photo_autor['alt']) ?>" class="d-sm-none" />
                                <p class="col-9 col-sm-12">
                                    <?= $name_author ?>
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
    <?php if (have_rows($repeater_carousel_client_two)) : ?>
        <section class="testimonials two swiper-container swiper-container-free-mode mt-16" data-direction="horizontal-reversed">
            <div class="swiper-wrapper">
                <?php while (have_rows($repeater_carousel_client_two)) : the_row();
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
                            <div class="mt-16 d-flex gap-16 align-center">
                                <img src="<?= esc_url($photo_autor['url']) ?>" alt="<?= esc_attr($photo_autor['alt']) ?>" class="d-sm-none" />
                                <p class="col-9 col-sm-12">
                                    <?= $name_author ?>
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

    <!--Benefits-->
    <?php if (have_rows($repeater_boxes_benefits)) : ?>
        <section class="mt-120 mt-md-80">
            <div class="container d-grid grid-col-4 grid-xl-col-2 grid-sm-col-1 gap-16 gap-y-lg-64 gap-x-lg-16">
                <?php while (have_rows($repeater_boxes_benefits)) : the_row();
                    $title_benefits = get_sub_field('title_benefits');
                    $description_benefits = get_sub_field('description_benefits');
                    $icon_benefits = get_sub_field('icon_benefits');
                ?>
                    <div class="benefit-container">
                        <img src="<?= $icon_benefits['url'] ?>" alt="<?= $icon_benefits['url'] ?>" class="benefit-img" />
                        <h3 class="text-2xl font-800" data-aos="fade-up"><?= $title_benefits ?></h3>
                        <p class="mt-24 text-md" data-aos="fade-up"><?= $description_benefits ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <!--About-->
    <section class="gradient-bg mt-96 mt-md-24 position-relative">
        <div class="container">
            <h2 class="text-5xl" data-aos="fade-up" data-aos-duration="10000"><?= $title_about ?></h2>
            <?php if (have_rows($repeater_boxes_about)) : ?>
                <div class="d-grid grid-col-4 grid-md-col-1 gap-16 mt-48">
                    <?php while (have_rows($repeater_boxes_about)) : the_row();
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $icon = get_sub_field('icon');
                    ?>
                        <div class="about-container">
                            <span class="material-symbols-outlined"><?= $icon !== 'none' ? $icon : '' ?></span>
                            <h4 class="text-2xl mt-16"><?= $title ?></h4>
                            <p class="text-sm mt-16"><?= $description ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="d-flex justify-between mt-120 mt-lg-64">
            <?php if ($left_image_about) : ?>
                <img src="<?= esc_url($left_image_about['url']) ?>" class="position-absolute bottom left d-lg-none" style="width: 30vw; max-width: 550px" alt="<?= esc_attr($left_image_about['alt']) ?>" />
            <?php endif; ?>
            <div class="col-7 m-auto text-center">
                <p class="text-4xl font-800 text-capitalize"><?= $text_about ?></p>
                <?php if ($button_about) :
                    $link_url = $button_about['url'];
                    $link_title = $button_about['title'];
                    $link_target = $button_about['target'] ? $button_about['target'] : '_self';
                ?>
                    <a href="<?= esc_url($link_url); ?>" class="button black mt-40" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                <?php endif ?>
            </div>
            <?php if ($right_image_about) : ?>
                <img src="<?= esc_url($right_image_about['url']) ?>" class="position-absolute bottom right d-lg-none" style="width: 34vw; max-width: 639px" alt="<?= esc_attr($right_image_about['alt']) ?>" />
            <?php endif; ?>
        </div>
    </section>

    <!--Pricing-->
    <section class="pricing-home">
        <div class="container text-center">
            <h2 class="text-center text-5xl col-9 col-lg-12 m-auto"><?= $title_pricing ?></h2>
            <div class="pricing-options monthly">
                <?php if ($group_options_pricing) : ?>
                    <label class="monthly">
                        <input type="radio" name="interval-pricing" value="monthly" checked />
                        <?= $group_options_pricing['montly'] ?>
                    </label>
                    <label class="quaterly">
                        <input type="radio" name="interval-pricing" value="quaterly" />
                        <?= $group_options_pricing['quaterly'] ?>
                    </label>
                <?php endif; ?>
            </div>
            <?php if (have_rows($repeater_plans_pricing)) : ?>
                <div class="d-flex justify-center align-center text-left gap-16 gap-md-32 mt-48">
                    <?php while (have_rows($repeater_plans_pricing)) : the_row();
                        $icon = get_sub_field('icon');
                        $background_color = get_sub_field('background_color');
                        $is_recommended = get_sub_field('is_recommended');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $monthly_price = get_sub_field('monthly_price');
                        $quaterly_price = get_sub_field('quaterly_price');
                    ?>
                        <div class="col-4 col-2xl-5 col-md-12 pricing-container <?= $background_color ?> <?= $is_recommended ? 'recommended' : '' ?>" data-aos="fade-up">
                            <span class="material-symbols-outlined"> <?= $icon ?> </span>
                            <h3 class="text-2xl mt-16"><?= $title ?></h3>
                            <p class="text-md mt-16 col-10"><?= $description ?></p>
                            <div class="d-flex align-baseline gap-16">
                                <div class="price">
                                    <p class="monthly selected text-4xl font-800"><?= $monthly_price ?></p>
                                    <p class="quaterly text-4xl font-800"><?= $quaterly_price ?></p>
                                </div>
                                <p class="text-sm">per month</p>
                            </div>
                            <ul>
                                <?php if (have_rows($repeater_visible_features_list)) : ?>
                                    <?php while (have_rows($repeater_visible_features_list)) : the_row();
                                        $icon = get_sub_field('icon');
                                        $text = get_sub_field('text');
                                    ?>
                                        <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                                            <span class="material-symbols-outlined"><?= $icon ?></span>
                                            <?= $text ?>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <li class="mt-24 d-flex -align-center gap-16 pricing-more">
                                    <span class="text-underline"> View more </span>
                                    <span class="material-symbols-outlined"> expand_more </span>
                                </li>
                                <div class="mt-24 hidden-items">
                                    <?php if (have_rows($repeater_hidden_features_list)) : ?>
                                        <?php while (have_rows($repeater_hidden_features_list)) : the_row();
                                            $icon = get_sub_field('icon');
                                            $text = get_sub_field('text');
                                        ?>
                                            <li class="mt-24 d-flex align-center gap-16 gap-sm-0">
                                                <span class="material-symbols-outlined"><?= $icon ?></span>
                                                <?= $text ?>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if ($button_pricing) :
                $link_url = $button_pricing['url'];
                $link_title = $button_pricing['title'];
                $link_target = $button_pricing['target'] ? $button_pricing['target'] : '_self';
            ?>
                <a href="<?= esc_url($link_url); ?>" class="button black mt-40" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
            <?php endif ?>
        </div>
    </section>

    <!--How it works -->
    <section class="darkgrey-bg mt-56">
        <div class="container">
            <h2 class="col-8 col-lg-12 text-white text-5xl"><?= $title_how_it_works ?></h2>
            <?php if (have_rows($repeater_boxes_how_it_works)) : $delay = 0; ?>
                <div class="d-grid grid-col-3 grid-lg-col-1 gap-16 mt-72">
                    <?php while (have_rows($repeater_boxes_how_it_works)) : the_row();
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
            <div class="d-flex mt-120 mt-lg-56">
                <div class="col-7 col-lg-12 text-lg-center">
                    <h2 class="text-4xl font-800 text-white">
                        <?= $text_how_it_works ?>
                    </h2>
                    <?php if ($button_how_it_works) :
                        $link_url = $button_how_it_works['url'];
                        $link_title = $button_how_it_works['title'];
                        $link_target = $button_how_it_works['target'] ? $button_how_it_works['target'] : '_self';
                    ?>
                        <a href="<?= esc_url($link_url); ?>" class="button gradient mt-56 mt-lg-16" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
                    <?php endif ?>
                </div>
                <?php if ($bottom_image_how_it_works) : ?>
                    <img src="<?= esc_url($bottom_image_how_it_works['url']) ?>" alt="<?= esc_url($bottom_image_how_it_works['alt']) ?>" class="position-absolute bottom right d-lg-none" />
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!--FAQ-->
    <section class="mt-96">
        <div class="container">
            <div class="d-flex justify-between">
                <div class="col-5 col-2xl-4 col-lg-12 position-sticky position-lg-relative align-self-start">
                    <p class="mark green text-sm font-800">
                        <span><?= $pre_title_faq ?></span>
                    </p>
                    <h2 class="text-5xl"><?= $title_faq ?></h2>
                </div>
                <?php if (have_rows($repeater_questions)) : ?>
                    <div class="col-7 col-2xl-8 col-lg-12 mt-lg-24">
                        <?php while (have_rows($repeater_questions)) : the_row();
                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
                        ?>
                            <div class="faq-container mt-40 mt-sm-16">
                                <div class="faq-trigger">
                                    <div class="d-flex justify-between">
                                        <p class="text-md font-800"><?= $question ?></p>
                                        <div class="faq-icon">
                                            <span class="material-symbols-outlined">
                                                expand_more
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-expand line-2">
                                    <p><?= $answer ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php else :
    $page_title = get_field('page_title');
?>
    <section class="mt-120">
        <div class="container">
            <div class="col-8 m-auto">
                <h1 class="text-5xl"><?= $page_title ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php get_footer() ?>