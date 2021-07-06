<?php require_once( 'admin/cms.php' ); ?>

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

    <cms:editable name='blog_image' crop='1' width='610' height='150' type='image' />

    <cms:folder name="s_graduation" title="Graduation" />
    <cms:folder name="s_cultural" title="Cultural Activities" />
    <cms:folder name="s_random" title="Random" />


</cms:template>

<!--== Page Title Area Start ==-->
<section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Gallery</h1>
                    <p>
                        <cms:show event_intro />
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
                        <cms:pages masterpage='event_single.php' start_on=my_start_date stop_before=my_stop_date
                                paginate='1' limit='3'>
                            <!-- Single Gallery Start -->
                            <div class="col-lg-3  col-sm-6 recent event">
                                <div class="single-gallery-item gallery-bg-1" style="background-image: url()">
                                    <div class="gallery-hvr-wrap">
                                        <div class="gallery-hvr-text">
                                            <h4>University Cumpus</h4>
                                            <p class="gallery-event-date">28 Oct, 2018</p>
                                        </div>
                                        <a href="assets/img/gallery/gellary-img-1.jpg" class="btn-zoom image-popup">
                                            <img src="assets/img/zoom-icon.png" alt="a">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Gallery End -->
                        </cms:pages>
                    </div>
                    <!-- Gallery Item content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-brand btn-loadmore">Load More Photo</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Single Album Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>