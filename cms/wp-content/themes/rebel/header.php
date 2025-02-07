<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" sizes="192x192" href="<?= get_template_directory_uri() ?>/img/general/android-chrome-192x192.svg" />
    <link rel="icon" sizes="512x512" href="<?= get_template_directory_uri() ?>/img/general/android-chrome-512x512.svg" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/img/general/apple-touch-icon.png" />
    <link rel="icon" type="image/svg+xml" sizes="32x32" href="<?= get_template_directory_uri() ?>/img/general/favicon-32x32.svg" />
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="<?= get_template_directory_uri() ?>/img/general/favicon-16x16.svg" />
    <link rel="icon" type="image/svg+xml" href="<?= get_template_directory_uri() ?>/img/general/favicon-16x16.svg" />
    <!-- Link Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/lca3ugm.css" />
    <!-- Link Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Link Aos Scroll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Link Splide -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/css/splide-extension-video.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/main.css" />
    <!-- Preloading Logo  -->
    <link rel="preload" href="<?= get_template_directory_uri() ?>/img/general/logo-black.svg" as="image">
    <link rel="preload" href="<?= get_template_directory_uri() ?>/img/general/logo-color.svg" as="image">
    <!-- Link Lottie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.3/lottie.min.js"></script>
    <!-- Link jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>
        <?php
        if (is_front_page() && function_exists('get_field')) {
            $custom_title = get_field('page_title');
            if (!empty($custom_title)) {
                echo esc_html($custom_title);
            } else {
                wp_title('-', true, 'right');
                // bloginfo('name');

                $site_description = get_bloginfo('description', 'display');
                if ($site_description)
                    echo " - $site_description";
            }
        } else {
            wp_title('-', true, 'right');
            // bloginfo('name');

            $site_description = get_bloginfo('description', 'display');
            if ($site_description && (is_home() || is_front_page()))
                echo " - $site_description";
        }
        ?>
    </title>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php if (is_front_page()) : ?>
        <!-- Lottie Animation -->
        <div id="pageLoader">
            <iframe src="https://lottie.host/embed/8bb59238-279f-426b-9198-055fc0624449/cusbjwGfIo.json"></iframe>
        </div>

        <div id="pageContent" style="display: none">
        <?php endif; ?>
        <header class="header">
            <nav class="d-flex justify-between align-center container">
                <a href="<?= home_url() ?>" class="logo">Rebel</a>
                <div class="menu-toggle">
                    <div class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <ul class="d-flex gap-64 align-center d-md-none">
                    <li><a href="<?= home_url('/pricing/') ?>" class="text-sm nav-link">Pricing</a></li>
                    <li><a href="<?= home_url('/portfolio/') ?>" class="text-sm nav-link">Portfolio</a></li>
                    <li>
                        <a href="<?= home_url('/get-started/') ?>" class="button gradient">Book a call</a>
                    </li>
                </ul>
            </nav>
            <ul class="mobile-menu">
                <li><a href="<?= home_url('/pricing/') ?>" class="text-md nav-link">Pricing</a></li>
                <li><a href="<?= home_url('/portfolio/') ?>" class="text-md nav-link">Portfolio</a></li>
                <li>
                    <a href="<?= home_url('/get-started/') ?>" class="button gradient">Book a call</a>
                </li>
            </ul>
        </header>