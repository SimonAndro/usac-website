<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "member", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Page Committee Intro'>
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
                    <h1 class="h2">Committee</h1>
                    <p><cms:show page_intro /></p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll"><cms:show page_cta /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Committee Page Content Start ==-->
<section id="page-content-wrap">
    <div class="committee-content-wrap section-padding">
        <div class="committee-member-list">
            <div class="container">
                <cms:set has_second_row='0' />
                <cms:pages masterpage='cms_templates/committe_member.php' orderby='weight' order='asc'>
                    <cms:if k_count eq '1'>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 m-auto">
                                <div class="single-committee-member">
                                    <img src="<cms:show member_image />" class="img-fluid" alt="Committee">
                                    <h3>
                                        <cms:show member_name /><span class="committee-deg">
                                            <cms:show member_position />
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <cms:else />
                        <cms:if k_count lt '6'>
                            <cms:if k_count eq '2'>
                                <div class="row">
                                    <cms:set has_second_row='1' />
                            </cms:if>
                            <div class="col-lg-3 col-sm-6 m-auto">
                                <div class="single-committee-member">
                                    <img src="<cms:show member_image />" class="img-fluid" alt="Committee">
                                    <h3>
                                        <cms:show member_name /><span class="committee-deg">
                                            <cms:show member_position />
                                        </span>
                                    </h3>
                                </div>
                            </div>
                            <cms:else />
                            <cms:if k_count eq '6'>
            </div>
            <div class="row">
                </cms:if>
                <div class="col-lg-3 col-sm-6 m-auto">
                    <div class="single-committee-member">
                        <img src="<cms:show member_image />" class="img-fluid" alt="Committee">
                        <h3>
                            <cms:show member_name /><span class="committee-deg">
                                <cms:show member_position />
                            </span>
                        </h3>
                    </div>
                </div>
                </cms:if>
                </cms:if>
                </cms:pages>
                <cms:if has_second_row eq '1'>
            </div>
            </cms:if>
        </div>
    </div>
    </div>
</section>
<!--== Committee Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>