<!--== Footer Area Start ==-->

<footer id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <div class="widgei-body">
                            <div class="footer-about">
                                <img src="assets/img/usac-logo.png" alt="Logo" class="img-fluid"
                                    style="background-color: #ffffff40;">
                                <cms:get_custom_field 'site_foot_mark' masterpage='cms_templates/cms_globals.php' />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Get In Touch</h4>
                        <div class="widgei-body">
                            <p>You can follow USAC on social media</p>
                            <div class="footer-social-icons">
                                <a href="<cms:get_custom_field 'fb_page' masterpage='cms_templates/cms_globals.php' />" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="<cms:get_custom_field 'twitter_page' masterpage='cms_templates/cms_globals.php' />" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Useful Links</h4>
                        <div class="widgei-body">
                            <ul class="double-list footer-list clearfix">
                                <li><a href="./newsportal" target="_blank">News portal</a></li>
                                <li><a href="./community" target="_blank">Community</a></li>
                                <li><a href="./directory.php">Directory</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-2 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">USAC</h4>
                        <div class="widgei-body">
                            <ul class="footer-list clearfix">
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center footer-note">
                    <div class="footer-left">
                        <div class="footer-bottom-text">
                            <p>&#xA9;
                                <cms:date format='Y' /> USAC, All Rights Reserved.</p>
                        </div>

                        <div id="copyright">
                        <a href="https://www.360degrees.com/">
                            <img style="-webkit-user-select: none;" src="assets/img/360degrees-btn.png" width="88"
                                height="31">
                        </a>
                        </div>
                    </div>
                    <div class="footer-right">
                        Powered by
                            <a href="https://www.couchcms.com/"
                                title="CouchCMS - Simple Open-Source Content Management">
                                CouchCMS
                            </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Footer Bottom End -->


</footer>
<!--== Footer Area End ==-->

<!--== Scroll Top ==-->
<a href="#" class="scroll-top">
    <i class="fa fa-angle-up"></i>
</a>
<!--== Scroll Top ==-->

<!-- SITE SCRIPT  -->

<!-- Jquery JS  -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>

<!-- POPPER JS -->
<script src="assets/vendor/bootstrap/js/popper.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/navbar/bootstrap-4-navbar.js"></script>

<!--owl-->
<script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>

<!--Waypoint-->
<script src="assets/vendor/waypoint/waypoints.min.js"></script>

<!--CounterUp-->
<script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

<!--isotope-->
<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

<!--magnific-->
<script src="assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

<!--Smooth Scroll-->
<script src="assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

<!--Jquery Easing-->
<script src="assets/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

<!--Nice Select -->
<script src="assets/vendor/nice-select/jquery.nice-select.js"></script>

<!--Jquery Valadation -->
<script src="assets/vendor/validation/jquery.validate.min.js"></script>
<script src="assets/vendor/validation/additional-methods.min.js"></script>

<!-- Jquery UI -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--off-canvas js -->
<script src="assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

<!-- Countdown -->
<script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

<!-- custom js: main custom theme js file  -->
<script>
    $("#owl-demo").owlCarousel({
        navigation: true
    });
</script>
<script src="assets/js/theme.min.js"></script>

<!-- custom js: custom js file is added for easy custom js code  -->
<script src="assets/js/custom.js"></script>

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->



</body>

</html>

<!--== Footer Area End ==-->