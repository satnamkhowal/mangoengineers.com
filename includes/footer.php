<?php
declare(strict_types=1);
$site = mango_site();
?>
<?php if (($showSiteFooter ?? true) === true): ?>
<footer class="edu-footer footer-dark bg-image footer-style-2">
    <div class="footer-top footer-top-2">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="edu-footer-widget">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="assets/images/logo/logo-white.png" alt="Mango Engineers">
                            </a>
                        </div>
                        <p class="description">
                            Practical programming, software development and technology training in Jaipur.
                        </p>
                        <div class="widget-information">
                            <ul class="information-list">
                                <li><span>Call:</span> <a href="tel:<?= mango_e($site['phone_href']) ?>"><?= mango_e($site['phone_display']) ?></a></li>
                                <li>
                                    <span>Branch 1:</span>
                                    <a href="<?= mango_e($site['branches'][0]['map']) ?>" target="_blank" rel="noopener">
                                        <?= mango_e($site['branches'][0]['full_address']) ?>
                                    </a>
                                </li>
                                <li>
                                    <span>Branch 2:</span>
                                    <a href="<?= mango_e($site['branches'][1]['map']) ?>" target="_blank" rel="noopener">
                                        <?= mango_e($site['branches'][1]['full_address']) ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="edu-footer-widget explore-widget">
                        <h4 class="widget-title">Explore</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="about-one.html">About</a></li>
                                <li><a href="course-one.html">Courses</a></li>
                                <li><a href="team-one.html">Instructors</a></li>
                                <li><a href="event-grid.html">Events</a></li>
                                <li><a href="gallery-grid.html">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="edu-footer-widget quick-link-widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="blog-standard.html">Blog</a></li>
                                <li><a href="/tutorial/">Free Tutorials</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-condition.html">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="edu-footer-widget">
                        <h4 class="widget-title">Connect with Mango Engineers</h4>
                        <div class="inner">
                            <p class="description">Follow official Mango Engineers channels for learning updates and training content.</p>
                            <ul class="social-share icon-transparent">
                                <li><a href="<?= mango_e($site['social']['facebook']) ?>" class="color-fb" target="_blank" rel="noopener" aria-label="Facebook"><i class="icon-facebook"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['linkedin']) ?>" class="color-linkd" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['instagram']) ?>" class="color-ig" target="_blank" rel="noopener" aria-label="Instagram"><i class="icon-instagram"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['x']) ?>" class="color-twitter" target="_blank" rel="noopener" aria-label="X"><i class="icon-twitter"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['youtube']) ?>" class="color-yt" target="_blank" rel="noopener" aria-label="YouTube"><i class="icon-youtube"></i></a></li>
                                <li><a href="<?= mango_e($site['social']['pinterest']) ?>" target="_blank" rel="noopener" aria-label="Pinterest"><i class="icon-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <p>&copy; <?= date('Y') ?> Mango Engineers. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>

    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/jquery.waypoints.js"></script>
    <script src="assets/js/vendor/backtotop.min.js"></script>
    <script src="assets/js/vendor/magnifypopup.min.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/jQuery.rProgressbar.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/odometer.min.js"></script>
    <script src="assets/js/vendor/isotop.min.js"></script>
    <script src="assets/js/vendor/imageloaded.min.js"></script>
    <script src="assets/js/vendor/lightbox.min.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="assets/js/vendor/svg-inject.min.js"></script>
    <script src="assets/js/vendor/vivus.min.js"></script>
    <script src="assets/js/vendor/tipped.min.js"></script>
    <script src="assets/js/vendor/smooth-scroll.min.js"></script>
    <script src="assets/js/vendor/isInViewport.jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
