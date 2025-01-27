<?php
/*
Template Name: Portfolio page
*/
get_header();

$title_videos = get_field('title_videos');
$title_reels = get_field('title_reels');

/**
 * Render a portfolio grid
 */
function render_portfolio_grid($field_group, $additional_class = '') {
    if (have_rows($field_group)) :
        while (have_rows($field_group)) : the_row();
            $image = get_sub_field('thumbnail');
            $title = get_sub_field('title');
            $video_url = get_sub_field('video_file');
            ?>
            <div class="portfolio-item <?php echo esc_attr($additional_class); ?> showVideo" data-video-url="<?php echo esc_url($video_url['url']); ?>">
                <div class="mask"></div>
                <?php if (is_array($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
                <?php if ($title) : ?>
                    <h3><?php echo esc_html($title); ?></h3>
                    <span>
                        <?php
                        $repeated_title = str_repeat('VIEW ' . esc_html($title) . ' &mdash; ', 5);
                        echo rtrim($repeated_title, ' &mdash; ');
                        ?>
                    </span>
                <?php endif; ?>
            </div>
            <?php
        endwhile;
    endif;
}
?>
<section class="portfolio">
    <div class="container text-center">
        <p class="mark green text-sm font-800 animate">
            <span>OUR WORK</span>
        </p>
        
        <!-- Portfolio Videos Section -->
        <h1 class="text-5xl content"><?php echo $title_videos; ?></h1>
        <div class="portfolio-grid">
            <?php render_portfolio_grid('single_portfolio'); ?>
        </div>
        
        <!-- Reels Section -->
        <h2 class="text-5xl mt-40 content"><?php echo $title_reels; ?></h2>
        <div class="portfolio-grid">
            <?php render_portfolio_grid('single_reel', 'reel'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
