<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "gallery", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Album' clonable='1'>
    <cms:editable name='album_short_title' type='text'>
        Get Together 2018 </cms:editable>
    <cms:editable name='album_short_desc' type='text'>
        Hello everybody Lorem ipsum dolor sit amet, consectetur
        adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim and minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquipv ex ea.1
    </cms:editable>
    <cms:editable name='album_intro' type='text'>
        Usac Needs enables you to harness the power of your Usac network. Whatever may be the
        need </cms:editable>
    <cms:editable name='page_cta' label='Call to action' desc='Enter call to action here' type='text'>
        Let&apos;s See
    </cms:editable>
    <cms:editable name='intro_image' label='page intro image' desc='Upload page intro Image here' crop='1' width='1918'
        height='789' type='image' />

    <cms:folder name="graduation" title="Graduation" />
    <cms:folder name="cultural" title="Cultural Activities" />
    <cms:folder name="random" title="Random" />


</cms:template>

<!--== Page Title Area Start ==-->
<section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Gallery</h1>
                    <p>
                        <cms:show album_short_title />
                    </p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">
                        <cms:show page_cta /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Single Album Page Content Start ==-->
<section id="page-content-wrap">
    <div class="single-gallery-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Gallery Item content Start -->
                    <div class="row gallery-gird">
                        <cms:set u_has_data="0" 'global' />
                        <cms:pages masterpage='gallery_photos.php' folder=k_page_foldername start_on=k_archive_date
                            stop_before=k_next_archive_date paginate='1' limit='1'>
                            <cms:set u_has_data="1" 'global' />
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
                            <!-- Single Gallery End -->
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
                        <cms:if u_has_data eq '0'>
                            <p class="text-center">No results found</p>
                        </cms:if>
                    </div>
                    <!-- Gallery Item content End -->
                </div>
            </div>

            <!-- Pagination Start -->
            <cms:if u_allow_paginate>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-wrap text-center">
                            <nav>
                                <ul class="pagination">
                                    <cms:if u_allow_prev_paginate>
                                        <li class="page-item"><a class="page-link" href="<cms:show u_prev_link />"><i
                                                    class="fa fa-angle-left"></i>Previous</a>
                                        </li>
                                    </cms:if>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <cms:if u_allow_next_paginate>
                                        <li class="page-item"><a class="page-link" href="<cms:show u_next_link />"><i
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
</section>
<!--== Single Album Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>