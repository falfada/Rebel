<?php

/**
 * Template name: Form page
 */

get_header()
?>

<!-- Form -->
<section class="form-bg">
    <div class="form-container">
        <h1 class="text-5xl">
            Video <span class="mark black white-text"> <span>Request</span></span>
        </h1>
        <div class="form-progress mt-32">
            <div class="line"></div>
            <div class="step-number one text-center">
                <p>1</p>
                <p class="mt-32 mt-md-16">General information</p>
            </div>
            <div class="step-number two text-center">
                <p>2</p>
                <p class="mt-32 mt-md-16">Specifications</p>
            </div>
            <div class="step-number three text-center">
                <p>3</p>
                <p class="mt-32 mt-md-16">Last details</p>
            </div>
        </div>
        <?= do_shortcode('[contact-form-7 id="e657428" title="Contact form 1"]') ?>
    </div>
</section>

<?php get_footer() ?>