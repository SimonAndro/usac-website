<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "home", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <cms:pages masterpage='cms_templates/role_item.php' orderby='weight' order='asc'>
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-1" style="background-image: url('<cms:show intro_image />');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>
                                    <cms:show intro_title />
                                </h2>
                                <h3>Members of <span>USAC</span></h3>
                                <p>
                                    <cms:show intro_details />
                                </p>
                                <div class="slider-btn">
                                    <a href="#about-area"
                                        class="btn btn-brand <cms:if k_count eq '1'>smooth-scroll</cms:if>">USAC's
                                        MISSION</a>
                                    <a href="about.php" class="btn btn-brand-rev">ABOUT USAC</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->
        </cms:pages>
    </div>

    <!-- Social Icons Area Start -->
    <div class="social-networks-icon">
        <ul>
            <li><a href="<cms:get_custom_field 'fb_page' masterpage='cms_templates/cms_globals.php' />"
                    target="_blank"><i class="fa fa-facebook"></i> <span>500+ Followers</span></a></li>
            <li><a href="<cms:get_custom_field 'twitter_page' masterpage='cms_templates/cms_globals.php' />"
                    target="_blank"><i class="fa fa-twitter"></i> <span>200+ Followers</span></a></li>
        </ul>
    </div>
    <!-- Social Icons Area End -->
</section>
<!--== Slider Area End ==-->

<!--== Upcoming Event Area Start ==-->
<section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Upcoming events</h3>
                    </div>

                    <div class="upcoming-event-content owl-carousel">
                        <cms:set u_has_data="0" 'global' />
                        <cms:set curr_time="<cms:date format='Y-m-d H:i:s' />" />
                        <!-- <cms:dump /> -->
                        <cms:pages masterpage='event_single.php' limit='3'
                            custom_field="event_date > <cms:show curr_time />">

                            <cms:set u_has_data="1" 'global' />
                            <!-- Single Event Start -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="<cms:show  event_image />" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date">It&#x2019;s
                                                <cms:date event_date />
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter"
                                                            data-date="<cms:date  event_date format='Y/m/d H:i:s' />">
                                                        </div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="<cms:show k_page_link />">
                                                            <cms:show event_short_title /></a></h3>
                                                    <p>
                                                        <cms:show event_short_desc />
                                                    </p>
                                                    <a href="<cms:show k_page_link />"
                                                        class="btn btn-brand btn-brand-dark">Check Event</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Event End -->
                        </cms:pages>
                        <cms:if u_has_data eq '0'>
                            <p class="text-center">Currently No Upcoming Events, Check in later.</p>
                        </cms:if>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Upcoming Event Area End ==-->

<!--== About Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="about-content-wrap">
                        <div class="section-title text-center text-lg-left">
                            <h2>USAC's Misssion</h2>
                        </div>
                        <p>
                            <cms:get_custom_field 'mission_statement' masterpage='cms_templates/cms_globals.php' />
                        </p>
                        <a href="about.php" class="btn btn-brand about-btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->

<!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>USAC's Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <cms:pages masterpage='cms_templates/responsibility.php'>
                <!--== Single Responsibility Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-responsibility">
                        <img src="<cms:show resp_image />" alt="Responsibility">
                        <h4>
                            <cms:show resp_title />
                        </h4>
                        <p>
                            <cms:show resp_details />
                        </p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->
            </cms:pages>
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>
<!--== Our Responsibility Area End ==-->

<!--== FunFact Area Start ==-->
<section id="funfact-area">
    <div class="container-fluid">
        <div class="row text-center">
            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/user.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">
                            <cms:show usac_total_user />
                        </h5>
                        <p>Members</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/picture.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">1026</h5>
                        <p>Photos</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/event.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count">231</span>+</h5>
                        <p>Events</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="assets/img/fun-fact/medal.svg" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count">800</span>+</h5>
                        <p>Activities</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->
        </div>
    </div>
</section>
<!--== FunFact Area End ==-->

<!--== Gallery Area Start ==-->
<section id="gallery-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our gallery</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Gallery Container Warpper ==-->
        <div class="gallery-content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <cms:php>
                        $u_gallery_folder = !empty($_GET['folder'])?$_GET['folder']:null;
                        global $CTX;
                        $CTX->set( 'u_gallery_folder', $u_gallery_folder, 'global' );
                    </cms:php>
                    <!-- Gallery Menu Start -->
                    <div class="gallery-menu text-center">
                        <cms:set u_template_link="<cms:show k_template_link />" />
                        <a href="<cms:show u_template_link />#id-grallery-view"
                            class="<cms:if u_gallery_folder eq '' >active</cms:if>">All</a>
                        <cms:pages masterpage='gallery_single.php' start_on=k_archive_date
                            stop_before=k_next_archive_date paginate='1' limit='5'>
                            <a href="<cms:show u_template_link />?folder=<cms:show k_page_foldername />#id-grallery-view"
                                class="<cms:if u_gallery_folder eq k_page_foldername >active</cms:if>">
                                <cms:show k_page_foldertitle /></a>
                        </cms:pages>
                    </div>
                    <!-- Gallery Menu End -->

                    <!-- Gallery Item content Start -->
                    <div class="row gallery-gird mb-5" id="id-grallery-view">
                        <cms:pages masterpage='gallery_photos.php' folder=k_page_foldername start_on=k_archive_date
                            stop_before=k_next_archive_date paginate='1' limit='4'>
                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 recent event">
                                <div class="single-gallery-item gallery-bg-1"
                                    style="background-image: url('<cms:show album_image />')">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>
                                                <cms:show photo_caption />
                                            </h4>
                                            <p class="gallery-event-date">
                                                <cms:show photo_date />
                                            </p>
                                        </div>
                                        <a href="<cms:show album_image />" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <cms:if k_paginator_required >
                                <cms:set u_gallery_more='1' 'global' />
                            </cms:if>
                        </cms:pages>
                    </div>
                    <!-- Gallery Item content End -->
                </div>
            </div>
        </div>
        <!--== Gallery Container Warpper==-->
        <cms:if u_gallery_more >
            <div class="text-center">
                <a style="font-size:15px;" class="btn btn-primary" href="./gallery.php"><span class="">View More in Gallery</span></a>
            </div>
        </cms:if>
    </div>
</section>
<!--== Gallery Area Start ==-->

<!--== Scholership Promo Area Start ==-->
<cms:if user_logged_in eq ''>
    <section id="scholership-promo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="scholership-promo-text">
                        <h2>USAC Makes you <span>Feel At Home</span> Away From Home</h2>
                        <p>USAC enables you to harness the power of your USAC network. Whatever may be the
                            need; academic, relocation, career, projects, mentorship, etc you can ask the community and
                            get assistance.
                        </p>
                        <div> <a href="javascript:void(0);" class="btn btn-brand"
                                style="background-color:#fff; color: #000000;">What are you waiting for?</a> <a
                                href="register.php" class="btn btn-brand">Register Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</cms:if>
<!--== Scholership Promo Area End ==-->

<!--== Blog Area Start ==-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent News</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Blog Content Wrapper ==-->
        <div class="row">
            <cms:pages masterpage='blog_single.php' start_on=k_archive_date stop_before=k_next_archive_date limit='3'>
                <cms:set u_has_data="1" 'global' />
                <!--== Single Blog Post start ==-->
                <div class="col-lg-4 col-md-6">
                    <article class="single-blog-post">
                        <figure class="blog-thumb">
                            <div class="blog-thumbnail">
                                <img src="<cms:show blog_image_small />" alt="Blog" class="img-fluid">
                            </div>
                        </figure>
                        <div class="blog-content">
                            <h3><a href="<cms:show k_page_link />">
                                    <cms:excerptHTML count='75' ignore='img'>
                                        <cms:show blog_title />
                                    </cms:excerptHTML>
                                </a></h3>
                            <p>
                                <cms:excerptHTML count='50' ignore='img'>
                                    <cms:show blog_details />
                                </cms:excerptHTML>
                            </p>
                            <a href="<cms:show k_page_link />" class="btn btn-brand">More</a>
                        </div>
                    </article>
                </div>
                <!--== Single Blog Post End ==-->
            </cms:pages>
        </div>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>
<!--== Blog Area EndBlog ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>