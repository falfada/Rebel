<?php

/**
 * Template name: Form page
 */

get_header();

$page_title = get_field('page_title');
$step_one = get_field('step_one');
$step_two = get_field('step_two');
$step_three = get_field('step_three');
?>

<!-- Form -->
<section class="form-bg">
    <div class="form-container">
        <h1 class="text-5xl">
            <?= $page_title ?>
        </h1>
        <div class="form-progress mt-32">
            <div class="line"></div>
            <div class="step-number one text-center">
                <p>1</p>
                <p class="mt-32 mt-md-16"><?= $step_one ?></p>
            </div>
            <div class="step-number two text-center">
                <p>2</p>
                <p class="mt-32 mt-md-16"><?= $step_two ?></p>
            </div>
            <div class="step-number three text-center">
                <p>3</p>
                <p class="mt-32 mt-md-16"><?= $step_three ?></p>
            </div>
        </div>
        <?= do_shortcode('[contact-form-7 id="e657428" title="Contact form 1"]') ?>
    </div>
</section>

<?php get_footer() ?>