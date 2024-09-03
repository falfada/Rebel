<footer class="footer">
    <div class="container">
        <div class="d-flex justify-between">
            <div class="col-5 col-sm-12">
                <a href="<?= home_url() ?>" class="footer-logo">Rebel</a>
                <a href="<?= home_url('/get-started/') ?>" class="button black mt-sm-16">Book a Call</a>
                <div class="col-4 col-sm-12 d-flex align-center justify-center mt-24 gap-24">
                    <a href="https://www.facebook.com/getrebeledits" target="_blank" class="ssmm-icon">
                        <span class="sr-only">Facebook</span>
                        <span class="icon-facebook2"></span>
                    </a>
                    <a href="https://www.youtube.com/@getrebeledits" class="ssmm-icon" target="_blank">
                        <span class="sr-only">Youtube</span>
                        <span class="icon-youtube"></span>
                    </a>
                    <a href="https://www.linkedin.com/company/rebel.talent" class="ssmm-icon" target="_blank">
                        <span class="sr-only">LinkedIn</span>
                        <span class="icon-linkedin2"></span>
                    </a>
                    <a href="https://www.instagram.com/getrebeledits/" class="ssmm-icon" target="_blank">
                        <span class="sr-only">Instagram</span>
                        <span class="icon-instagram"></span>
                    </a>
                </div>
            </div>
            <div class="col-3 col-sm-12 mt-sm-24">
                <p class="mark green text-sm font-800">
                    <span>SERVICES</span>
                </p>
                <div class="col-12 mt-40 mt-sm-16">
                    <a href="<?= home_url() ?>" class="text-sm text-black">Home</a>
                </div>
                <div class="col-12 mt-40 mt-sm-16">
                    <a href="<?= home_url('/pricing/') ?>" class="text-sm text-black">Pricing</a>
                </div>
                <div class="col-12 mt-40 mt-sm-16">
                    <a href="<?= home_url('/get-started/') ?>" class="text-sm text-black">Get Started</a>
                </div>
            </div>
            <div class="col-3 col-sm-12 mt-sm-24">
                <p class="mark green text-sm font-800">
                    <span>COMPANY</span>
                </p>
                <div class="col-12 mt-40 mt-sm-16">
                    <a href="<?= home_url('/terms/') ?>" class="text-sm text-black">Terms & Conditions</a>
                </div>
                <div class="col-12 mt-40 mt-sm-16">
                    <a href="<?= home_url('/privacy/') ?>" class="text-sm text-black">Privacy Policy</a>
                </div>
            </div>
        </div>
        <?php if (is_front_page()) : ?>
    </div>
<?php endif; ?>
</footer>

<!-- The modal -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <video id="videoPlayer" controls>
            <source src="" type="video/mp4" />
        </video>
    </div>
</div>
</div>
<script></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Aos JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/functions.js"></script>
</body>

</html>