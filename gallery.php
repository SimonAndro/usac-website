<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "gallery", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Album Gallery'>
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
                            <cms:pages masterpage='gallery_single.php' start_on=k_archive_date
                                stop_before=k_next_archive_date paginate='1' limit='5'>
                                <!-- Single Album Start -->
                                <div class="single-album-wraper">
                                    <div class="album-heading">
                                        <h2><a href="<cms:show k_page_link />">
                                                <cms:show album_short_title /></a></h2>
                                        <p>
                                            <cms:show album_short_desc />
                                        </p>
                                        <a href="<cms:show k_page_link />" class="btn btn-brand">View Album</a>
                                    </div>

                                    <div class="album-gallery-item">
                                        <div class="row gallery-gird">
                                            <cms:pages masterpage='gallery_photos.php' folder=k_page_foldername
                                                start_on=k_archive_date stop_before=k_next_archive_date paginate='1'
                                                limit='3'>
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
                                                            <a href="<cms:show album_image />"
                                                                class="btn-zoom image-popup">
                                                                <img src="assets/img/zoom-icon.png" alt="a">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </cms:pages>
                                        </div>
                                    </div>
                                </div>
                                <cms:if k_paginated_bottom>
                                    <cms:set u_allow_paginate='1' 'global' />
                                    <cms:if k_paginate_link_next>
                                        <cms:set u_allow_next_paginate='1' 'global' />
                                        <cms:set u_next_link="<cms:show k_paginate_link_next />" 'global' />
                                    </cms:if>
                                    <cms:if k_paginate_link_prev>
                                        <cms:set u_allow_prev_paginate='1' 'global' />
                                        <cms:set u_prev_link="<cms:show k_paginate_link_prev />" 'global' />
                                    </cms:if>
                                </cms:if>
                            </cms:pages>
                            <!-- Single Album End -->
                        </div>
                        <!-- Pagination Start -->
                        <cms:if u_allow_paginate>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination-wrap text-center">
                                        <nav>
                                            <ul class="pagination">
                                                <cms:if u_allow_prev_paginate>
                                                    <li class="page-item"><a class="page-link"
                                                            href="<cms:show u_prev_link />"><i
                                                                class="fa fa-angle-left"></i>Previous</a>
                                                    </li>
                                                </cms:if>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <cms:if u_allow_next_paginate>
                                                    <li class="page-item"><a class="page-link"
                                                            href="<cms:show u_next_link />"><i
                                                                class="fa fa-angle-right"></i>Next</a></li>
                                                </cms:if>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </cms:if>
                        <!-- Pagination End -->
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