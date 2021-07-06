<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "gallery", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Gallery'>
    <cms:editable name='page_intro' label='Intro' desc='Enter page intro info here' type='text'>
        Usac Needs enables you to harness the power of your Usac network. Whatever may be the
        need
    </cms:editable>
    <cms:editable name='page_cta' label='Call to action' desc='Enter call to action here' type='text'>
        Let&apos;s See
    </cms:editable>

    <cms:editable name='intro_image' label='page intro image' desc='Upload page intro Image here' crop='1' width='1918'
        height='789' type='image' />
</cms:template>

<!--== Page Title Area Start ==-->
<section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Gallery</h1>
                    <p>
                        <cms:show page_intro />
                    </p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">
                        <cms:show page_cta /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<cms:if k_is_page>
    <cms:embed 'gallery_single.php' />
    <cms:else />
    <!--== Gallery Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="gallery-page-wrap section-padding">
            <!-- Gallery Menu Start -->
            <div class="gallery-menu text-center">
                <a href="#" class="active">All</a>
                <a href="#">Seminar</a>
                <a href="#">Event</a>
                <a href="#">Picnic</a>
            </div>
            <!-- Gallery Menu End -->

            <!--= Gallery Page Content Wrap Start =-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="full-album-content">
                            <!-- Single Album Start -->
                            <div class="single-album-wraper">
                                <div class="album-heading">
                                    <h2><a href="single-album.html">Our last Meetup in 2018</a></h2>
                                    <p>Etiam vitae tortor. Curabitur nisi. In hac habitasse platea dictumst. Praesent ac
                                        massa at ligula laoreet iaculis. Praesent ac massa at ligula laoreet iaculis.
                                        sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis
                                        venenatis ante odio sit amet eros. Nullam quis ante. Curabitur vestibulum.</p>
                                    <a href="single-album.html" class="btn btn-brand">View Album</a>
                                </div>

                                <div class="album-gallery-item">
                                    <div class="row gallery-gird">
                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 recent event">
                                            <div class="single-gallery-item gallery-bg-1">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-1.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old event pic">
                                            <div class="single-gallery-item video gallery-bg-2">
                                                <a href="https://player.vimeo.com/video/140182080?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                                    class="btn btn-video-play video-popup"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 recent pic">
                                            <div class="single-gallery-item gallery-bg-3">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-3.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old">
                                            <div class="single-gallery-item gallery-bg-4">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-4.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic event">
                                            <div class="single-gallery-item gallery-bg-5">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-5.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old recent">
                                            <div class="single-gallery-item gallery-bg-6">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-6.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic">
                                            <div class="single-gallery-item video gallery-bg-7">
                                                <a href="https://player.vimeo.com/video/181545195?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                                    class="btn btn-video-play video-popup"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic recent old">
                                            <div class="single-gallery-item gallery-bg-8">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-8.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Single Album End -->

                            <!-- Single Album Start -->
                            <div class="single-album-wraper">
                                <div class="album-heading">
                                    <h2><a href="single-album.html">Our last Meetup in 2018</a></h2>
                                    <p>Etiam vitae tortor. Curabitur nisi. In hac habitasse platea dictumst. Praesent ac
                                        massa at ligula laoreet iaculis. Praesent ac massa at ligula laoreet iaculis.
                                        sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis
                                        venenatis ante odio sit amet eros. Nullam quis ante. Curabitur vestibulum.</p>
                                    <a href="single-album.html" class="btn btn-brand">View Album</a>
                                </div>

                                <div class="album-gallery-item">
                                    <div class="row gallery-gird">
                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 recent event">
                                            <div class="single-gallery-item gallery-bg-1">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-1.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old event pic">
                                            <div class="single-gallery-item video gallery-bg-2">
                                                <a href="https://player.vimeo.com/video/140182080?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                                    class="btn btn-video-play video-popup"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 recent pic">
                                            <div class="single-gallery-item gallery-bg-3">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-3.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old">
                                            <div class="single-gallery-item gallery-bg-4">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-4.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic event">
                                            <div class="single-gallery-item gallery-bg-5">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-5.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old recent">
                                            <div class="single-gallery-item gallery-bg-6">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-6.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic">
                                            <div class="single-gallery-item video gallery-bg-7">
                                                <a href="https://player.vimeo.com/video/181545195?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                                    class="btn btn-video-play video-popup"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic recent old">
                                            <div class="single-gallery-item gallery-bg-8">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-8.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Single Album End -->

                            <!-- Single Album Start -->
                            <div class="single-album-wraper">
                                <div class="album-heading">
                                    <h2><a href="single-album.html">Our last Meetup in 2018</a></h2>
                                    <p>Etiam vitae tortor. Curabitur nisi. In hac habitasse platea dictumst. Praesent ac
                                        massa at ligula laoreet iaculis. Praesent ac massa at ligula laoreet iaculis.
                                        sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis
                                        venenatis ante odio sit amet eros. Nullam quis ante. Curabitur vestibulum.</p>
                                    <a href="single-album.html" class="btn btn-brand">View Album</a>
                                </div>

                                <div class="album-gallery-item">
                                    <div class="row gallery-gird">
                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 recent event">
                                            <div class="single-gallery-item gallery-bg-1">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-1.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old event pic">
                                            <div class="single-gallery-item video gallery-bg-2">
                                                <a href="https://player.vimeo.com/video/140182080?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                                    class="btn btn-video-play video-popup"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 recent pic">
                                            <div class="single-gallery-item gallery-bg-3">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-3.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old">
                                            <div class="single-gallery-item gallery-bg-4">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-4.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic event">
                                            <div class="single-gallery-item gallery-bg-5">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-5.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 old recent">
                                            <div class="single-gallery-item gallery-bg-6">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-6.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic">
                                            <div class="single-gallery-item video gallery-bg-7">
                                                <a href="https://player.vimeo.com/video/181545195?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                                    class="btn btn-video-play video-popup"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->

                                        <!-- Single Gallery Start -->
                                        <div class="col-lg-3  col-sm-6 pic recent old">
                                            <div class="single-gallery-item gallery-bg-8">
                                                <div class="gallery-hvr-wrap">
                                                    <div class="gallery-hvr-text">
                                                        <h4>University Cumpus</h4>
                                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                                    </div>
                                                    <a href="assets/img/gallery/gellary-img-8.jpg"
                                                        class="btn-zoom image-popup">
                                                        <img src="assets/img/zoom-icon.png" alt="a">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Gallery End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Single Album End -->
                        </div>
                        <div class="pagination-wrap text-center">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">50</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--= Gallery Page Content Wrap End =-->
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
</cms:if>

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>