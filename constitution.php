<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "member", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->


<cms:template title='USAC Constitution'>
    <cms:editable name='const_title' label='const title' desc='Enter const title here' type='text'>
        Awesome Article for Memory of Our Campus Life
    </cms:editable>
    <cms:editable name='const_short_desc' label='Intro' desc='Enter const short description here' type='text'>
        Usac Needs enables you to harness the power of your Usac network. Whatever may be the
        need
    </cms:editable>
    <cms:editable name='page_cta' label='Call to action' desc='Enter call to action here' type='text'>
        Let&apos;s See
    </cms:editable>

    <cms:editable name='intro_image' label='page intro image' desc='Upload page intro Image here' crop='1' width='1918'
        height='789' type='image' />

    <cms:editable name='const_details' type='richtext'>
        Constitution
    </cms:editable>
</cms:template>

<!--== Page Title Area Start ==-->
<section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">USAC Constitution</h1>
                    <p>
                        <cms:show const_short_desc />
                    </p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">
                        <cms:show page_cta /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Blog Page Content Start ==-->
<div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->

                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-meta">
                                <h2>
                                    <cms:show const_title />
                                </h2>
                                <div class="posting-info">
                                    <a href="<cms:show k_page_link />">
                                        <cms:date k_page_date format='jS M, Y' /></a> &#x2022; Posted by: Admin
                                </div>
                            </div>
                        </header>
                        <section class="blog-details">
                            <cms:show const_details />
                        </section>

                        <footer class="post-share">
                            <div class="row no-gutters" style="height:20px;">
                                <!-- <div class="col-8">
                                    <div class="shareonsocial">
                                        <span>Share:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-vimeo"></i></a>
                                    </div>
                                </div> -->
                                <!-- <div class="col-4 text-right">
                                    <div class="post-like-comm">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>20</a>
                                        <a href="#"><i class="fa fa-comment-o"></i>15</a>
                                    </div>
                                </div> -->
                            </div>
                        </footer>
                    </article>
                </div>
                <!-- Blog content Area End -->

            </div>
        </div>
    </div>
</div>
<!--== Blog Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>