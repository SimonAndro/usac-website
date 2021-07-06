<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "blog", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->


<cms:template title='Blog' clonable='1'>
    <cms:editable name='blog_title' label='blog title' desc='Enter blog title here' type='text'>
        Awesome Article for Memory of Our Campus Life
    </cms:editable>
    <cms:editable name='blog_short_desc' label='Intro' desc='Enter blog short description here' type='text'>
        Usac Needs enables you to harness the power of your Usac network. Whatever may be the
        need
    </cms:editable>
    <cms:editable name='page_cta' label='Call to action' desc='Enter call to action here' type='text'>
        Let&apos;s See
    </cms:editable>

    <cms:editable name='intro_image' label='page intro image' desc='Upload page intro Image here' crop='1' width='1918'
        height='789' type='image' />

    <cms:editable name='blog_image' label='blog image' desc='Upload page intro Image here' crop='1' width='1440'
        height='810' type='image' />

    <cms:editable name='blog_image_small' label='Smaller blog image' desc='Upload page intro Image here' crop='1'
        width='700' height='353' type='image' />

    <cms:folder name="scholarship" title="Scholarship" />
    <cms:folder name="informative" title="Informative" />
    <cms:folder name="news" title="News" />
    <cms:folder name="general" title="General" />
</cms:template>

<!--== Page Title Area Start ==-->
<section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Blog Details</h1>
                    <p>
                        <cms:show blog_short_desc />
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
                            <div class="single-blog-thumb">
                                <img src="<cms:show blog_image />" class="img-fluid" alt="Blog">
                            </div>
                            <div class="single-blog-meta">
                                <h2>
                                    <cms:show blog_title />
                                </h2>
                                <div class="posting-info">
                                    <a href="<cms:show k_page_link />">
                                        <cms:date k_page_date format='jS M, y' /></a> &#x2022; Posted by: Admin
                                </div>
                            </div>
                        </header>
                        <section class="blog-details">
                            <cms:editable name='blog_details' type='richtext'>
                                <p>Lorem ipsum condimentum ligula. Fusce fringilla magna non sapien dictum, eget
                                    faucibus
                                    dui maximus. Donec fringilla vel mi consequat tempor. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat.
                                    Duvelit
                                    lecspoe a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices
                                    interdum, leo luctfiiius sem, vel vulputate diam ipsum sed lorem. Donec tempor arcu
                                    nisl, et molestie massa hhisque ut. Nunc at rutrum leo. Mauris metus mauris, tridd.
                                </p>
                                <p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum. Aliquam nonh
                                    edunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat.
                                    Praesent vdd warius ultricemassa at faucibus. Aenean dignissim, orci sed faucibus
                                    pharetra, dui mi dir ssim tortor, sit amet ntum mi ligula sit amet augue.
                                    Pellentesqs
                                    placerat. </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>The Guest Series</h5>
                                        <p> Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.
                                            Aliquam
                                            non tidunt urna. Integer tincidunt nec nisl vitae Proin sed ultrices erat.
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>How and why</h5>
                                        <p>Aenean dignissim, orci sed faucibus nissim tortor, sit amet condimentum mi
                                            ligula sit amet augue. </p>
                                    </div>
                                </div>
                                <blockquote class="blockquote">
                                    Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent
                                    varius ultrices massa at faucibus.
                                </blockquote>
                            </cms:editable>
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