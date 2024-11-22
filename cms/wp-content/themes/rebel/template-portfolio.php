<?php
/*
Template Name: Portfolio page
*/
get_header();
?>
<section class="pricing">
    <div class="container">
        <p class="mark green text-sm font-800 animate">
            <span>OUR WORK</span>
        </p>
        <h1 class="text-5xl">Portfolio</h1>
        <div class="portfolio-grid">
            <?php
            if (have_rows('single_portfolio')) :
                while (have_rows('single_portfolio')) : the_row();
            ?>

                    <div class="portfolio-item">
                        <?php
                        $image = get_sub_field('thumbnail');
                        $title = get_sub_field('title');
                        $video_url = get_sub_field('video_file');

                        if (is_array($image)) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }

                        if ($title) {
                            echo '<h3>' . esc_html($title) . '</h3>';
                        }
                        ?>

                        <a href="#" class="open-modal" data-video-url="<?php echo esc_url($video_url['url']); ?>">
                            <!-- Add the modal trigger here -->
                        </a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>