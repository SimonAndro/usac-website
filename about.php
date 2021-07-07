<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "about", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Page About Us Intro'>
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
                    <h1 class="h2">About Us</h1>
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

<!--== Committee Page Content Start ==-->
<section id="page-content-wrap">
    <div class="about-page-content-wrap section-padding">
        <div class="container">
            <div class="row mission-u">
                <div class="col-lg-12 m-auto card pb-4">
                    <h1> USAC's Mission </h1>
                    <div>
                     <cms:get_custom_field 'mission_statement' masterpage='cms_templates/cms_globals.php' />    
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <cms:pages masterpage='cms_templates/about_item.php'>
                        <!-- Single about text start -->
                        <div class="single-about-text">
                            <span class="year">
                                <cms:show about_year /></span>
                            <img src="<cms:show about_image />" alt="About"
                                class='img-fluid <cms:if "<cms:mod k_count "2" />">img-left<cms:else/>img-right</cms:if>'>
                            <h2 class="h3">
                                <cms:show about_title />
                            </h2>
                            <cms:show about_detail />
                        </div>
                        <!-- Single about text End -->
                    </cms:pages>
                </div>
            </div>
        </div>
    </div>



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

    <div class="our-honorable-commitee section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-page-area-title">
                        <h2>Leadership Committee</h2>
                    </div>
                </div>
            </div>

            <div class="honorable-committee-list">
                <div class="row">
                    <cms:pages masterpage='cms_templates/committe_member.php' orderby='weight' order='asc'>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="<cms:show member_image />" class="img-fluid" alt="Committee">
                                </div>
                                <h3>
                                    <cms:show member_name /><span class="committee-deg">
                                        <cms:show member_position />
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </cms:pages>
                </div>
            </div>
        </div>
    </div>

    <div class="people-to-say section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-page-area-title">
                        <h2>What Members Say</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="people-to-say-wrapper owl-carousel">
                        <cms:pages masterpage='cms_templates/testimony_item.php'>
                            <!-- Single People Testimonial -->
                            <div class="single-testimonial-wrap">
                                <div class="people-thumb">
                                    <img src="<cms:show member_image />" alt="Usac" class="img-fluid">
                                </div>
                                <i class="quote-icon"></i>
                                <p>
                                    <cms:show member_test />
                                </p>
                                <h4>
                                    <cms:show member_name /><span class="people-deg">
                                        <cms:show member_position /></span></h4>
                            </div>
                            <!-- Single People Testimonial -->
                        </cms:pages>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Committee Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>