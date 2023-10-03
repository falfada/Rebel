<?php

/**
 * Template name: Pricing page
 */

get_header();

/** Pricing fields */
$title_pricing = get_field('title_pricing', 2);
$group_options_pricing = get_field('group_options_pricing', 2);
$repeater_plans_pricing = 'repeater_plans_pricing';
$button_pricing = get_field('button_pricing', 2);
$repeater_visible_features_list = 'repeater_visible_features_list';
$repeater_hidden_features_list = 'hidden_features_list';
/** Carousel Testimonials fields */
$repeater_carousel_client_one = 'repeater_carousel_client_one';
$repeater_carousel_client_two = 'repeater_carousel_client_two';
/** FAQ fields */
$pre_title_faq = get_field('pre_title_faq', 2);
$title_faq = get_field('title_faq', 2);
$repeater_questions = 'repeater_questions';

/** Quote fields */
$title_quote = get_field('title_quote');
$description_quote = get_field('description_quote');
$image_quote = get_field('image_quote');

/** Steps fields */
$title_steps = get_field('title_steps');
$repeater_boxes_steps = 'repeater_boxes_steps';

/** Compare fields */
$title_compare = get_field('title_compare');
$repeater_table_compare = 'repeater_table_compare';
$button_compare = get_field('button_compare');
$group_compare_data_by_column = [];

?>

<!--Pricing-->
<section class="pricing">
    <div class="container text-center">
        <h2 class="text-center text-5xl col-9 col-lg-12 m-auto"><?= $title_pricing ?></h2>
        <div class="pricing-options monthly">
            <label class="monthly">
                <input type="radio" name="interval-pricing" value="monthly" checked />
                <?= $group_options_pricing['montly'] ?>
            </label>
            <label class="quaterly">
                <input type="radio" name="interval-pricing" value="quaterly" />
                <?= $group_options_pricing['quaterly'] ?>
            </label>
        </div>
        <?php if (have_rows($repeater_plans_pricing, 2)) : ?>
            <div class="d-flex justify-center align-center text-left gap-16 gap-md-32 mt-48">
                <?php while (have_rows($repeater_plans_pricing, 2)) : the_row();
                    $icon = get_sub_field('icon');
                    $background_color = get_sub_field('background_color');
                    $is_recommended = get_sub_field('is_recommended');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $monthly_price = get_sub_field('monthly_price');
                    $quaterly_price = get_sub_field('quaterly_price');
                ?>
                    <div class="col-4 col-2xl-5 col-md-12 pricing-container <?= $background_color ?> <?= $is_recommended ? 'recommended' : '' ?>" data-aos="fade-up">
                        <?php if ($icon !== 'none') : ?>
                            <span class="material-symbols-outlined"> <?= $icon ?> </span>
                        <?php endif; ?>
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
                                        <span class="material-symbols-outlined"><?= $icon !== 'none' ? $icon : '' ?></span>
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
                                            <span class="material-symbols-outlined"><?= $icon !== 'none' ? $icon : '' ?></span>
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

<!-- Quote -->
<section class="quote-bg">
    <div class="container">
        <div class="d-flex position-relative">
            <div class="col-8 col-md-12 text-white">
                <h2 class="text-5xl"><?= $title_quote ?></h2>
                <p class="mt-24 text-lg"><?= $description_quote ?></p>
            </div>
            <img src="<?= esc_url($image_quote['url']) ?>" alt="<?= esc_attr($image_quote['alt']) ?>" class="col-5 position-absolute d-md-none" />
        </div>
    </div>
</section>

<!-- Steps -->
<section class="lightgrey-bg">
    <div class="container">
        <h2 class="text-5xl text-capitalize col-8 col-xl-12"><?= $title_steps ?></h2>
        <?php if (have_rows($repeater_boxes_steps)) : ?>
            <div class="d-grid grid-col-3 grid-md-col-1 mt-48 gap-16 gap-md-24">
                <?php while (have_rows($repeater_boxes_steps)) : the_row();
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                ?>
                    <div class="pricing-step">
                        <span class="material-symbols-outlined"> <?= $icon ?> </span>
                        <h3 class="text-2xl"><?= $title ?></h3>
                        <p class="mt-8 text-sm line-2"><?= $description ?></p>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- How Rebel Compares -->
<section class="darkgrey-bg lightgrey">
    <div class="container">
        <h2 class="text-5xl text-white" data-aos="fade-up"><?= $title_compare ?></h2>
        <!-- Table Desktop -->
        <?php if (have_rows($repeater_table_compare)) : ?>
            <?php while (have_rows($repeater_table_compare)) : the_row(); ?>
                <div class="table desktop mt-120 text-center">
                    <div class="rebel-bg"></div>
                    <div class="d-grid grid-col-6 text-white">
                        <div></div>
                        <img src="<?= get_template_directory_uri() ?>/img/general/logo-black.svg" alt="" class="m-auto" />
                        <h3 class="text-xl">Freelancer</h3>
                        <h3 class="text-xl">Employee</h3>
                        <h3 class="text-xl">Agency</h3>
                        <h3 class="text-xl">DIY</h3>
                    </div>
                    <?php if (have_rows('repeater_rows')) : ?>
                        <?php while (have_rows('repeater_rows')) : the_row();
                            $feature_column = get_sub_field('feture_column');
                            $rebel_column = get_sub_field('rebel_column');
                            $freelancer_column = get_sub_field('freelancer_column');
                            $employee_column = get_sub_field('employee_column');
                            $agency_column = get_sub_field('agency_column');
                            $diy_column = get_sub_field('diy_column');

                            $group_compare_data_by_column['Rebel'][$feature_column] = $rebel_column;
                            $group_compare_data_by_column['Freelancer'][$feature_column] = $freelancer_column;
                            $group_compare_data_by_column['Employee'][$feature_column] = $employee_column;
                            $group_compare_data_by_column['Agency'][$feature_column] = $agency_column;
                            $group_compare_data_by_column['DIY'][$feature_column] = $diy_column;
                        ?>
                            <div class="d-grid grid-col-6 align-center text-white row">
                                <p class="font-700 text-left"><?= $feature_column ?></p>
                                <?php if ($rebel_column['button_row_type'] === 'text') : ?>
                                    <p class="text-black"><?= $rebel_column['text'] ?></p>
                                <?php elseif ($rebel_column['button_row_type'] === 'icon') : ?>
                                    <p <?php if ($rebel_column['icon'] === 'check_circle') : ?>class="text-green" <?php endif; ?>>
                                        <span class="material-symbols-outlined"> <?= $rebel_column['icon'] ?> </span>
                                    </p>
                                <?php endif; ?>

                                <?php if ($freelancer_column['button_row_type'] === 'text') : ?>
                                    <p><?= $freelancer_column['text'] ?></p>
                                <?php elseif ($freelancer_column['button_row_type'] === 'icon') : ?>
                                    <p <?php if ($freelancer_column['icon'] === 'check_circle') : ?>class="text-green" <?php endif; ?>>
                                        <span class="material-symbols-outlined"> <?= $freelancer_column['icon'] ?> </span>
                                    </p>
                                <?php endif; ?>

                                <?php if ($employee_column['button_row_type'] === 'text') : ?>
                                    <p><?= $employee_column['text'] ?></p>
                                <?php elseif ($employee_column['button_row_type'] === 'icon') : ?>
                                    <p <?php if ($employee_column['icon'] === 'check_circle') : ?>class="text-green" <?php endif; ?>>
                                        <span class="material-symbols-outlined"> <?= $employee_column['icon'] ?> </span>
                                    </p>
                                <?php endif; ?>

                                <?php if ($agency_column['button_row_type'] === 'text') : ?>
                                    <p><?= $agency_column['text'] ?></p>
                                <?php elseif ($agency_column['button_row_type'] === 'icon') : ?>
                                    <p <?php if ($agency_column['icon'] === 'check_circle') : ?>class="text-green" <?php endif; ?>>
                                        <span class="material-symbols-outlined"> <?= $agency_column['icon'] ?> </span>
                                    </p>
                                <?php endif; ?>

                                <?php if ($diy_column['button_row_type'] === 'text') : ?>
                                    <p><?= $diy_column['text'] ?></p>
                                <?php elseif ($diy_column['button_row_type'] === 'icon') : ?>
                                    <p <?php if ($diy_column['icon'] === 'check_circle') : ?>class="text-green" <?php endif; ?>>
                                        <span class="material-symbols-outlined"> <?= $diy_column['icon'] ?> </span>
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Table Mobile -->
        <?php if ($group_compare_data_by_column) : ?>
            <div class="table mobile swiper mySwiper mt-48">
                <div class="swiper-wrapper">
                    <?php foreach ($group_compare_data_by_column as $column => $groups) : ?>
                        <div class="swiper-slide position-relative <?php if ($column !== 'Rebel') : ?>text-white<?php endif; ?> text-center">
                            <?php if ($column === 'Rebel') : ?>
                                <div class="rebel-bg"></div>
                                <img src="<?= get_template_directory_uri() ?>/img/general/logo-black.svg" alt="" class="m-auto" />
                            <?php else : ?>
                                <h3 class="text-xl"><?= $column ?></h3>
                            <?php endif; ?>
                            <?php foreach ($groups as $key => $fields) : ?>
                                <div class="mt-16 <?php if ($column !== 'Rebel') : ?>border-bottom<?php endif; ?>">
                                    <p class="font-700"><?= $key ?></p>
                                    <?php if ($fields['button_row_type'] === 'text') : ?>
                                        <p <?php if ($column === 'Rebel') : ?>class="text-black" <?php endif; ?>><?= $fields['text'] ?></p>
                                    <?php elseif ($fields['button_row_type'] === 'icon') : ?>
                                        <p <?php if ($fields['icon'] === 'check_circle') : ?>class="text-green" <?php endif; ?>>
                                            <span class="material-symbols-outlined"> <?= $fields['icon'] ?> </span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="text-center mt-120 mt-md-40">
            <?php if ($button_compare) :
                $link_url = $button_compare['url'];
                $link_title = $button_compare['title'];
                $link_target = $button_compare['target'] ? $button_compare['target'] : '_self';
            ?>
                <a href="<?= esc_url($link_url); ?>" class="button gradient" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a>
            <?php endif ?>
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
                        <p class="text-lg font-700">“<?= $testimonial_author ?>”</p>
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
                        <p class="text-lg font-700">“<?= $testimonial_author ?>”</p>
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

<!--FAQ-->
<section class="mt-96">
    <div class="container">
        <div class="d-flex justify-between">
            <div class="col-5 col-lg-12 position-sticky position-lg-relative align-self-start">
                <p class="mark green text-sm font-800">
                    <span><?= $pre_title_faq ?></span>
                </p>
                <h2 class="text-5xl"><?= $title_faq ?></h2>
            </div>
            <?php if (have_rows($repeater_questions, 2)) : ?>
                <div class="col-7 col-2xl-8 col-lg-12 mt-lg-24">
                    <?php while (have_rows($repeater_questions, 2)) : the_row();
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

<?php get_footer() ?>