<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "blog", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Page Blog Intro'>
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

<cms:if k_is_page>
    <cms:embed 'blog_single.php' />
    <cms:else />
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Blog List</h1>
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

    <!--== Blog Page Content Start ==-->
    <div id="page-content-wrap">
        <div class="blog-page-content-wrap section-padding">
            <div class="container">
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-8">
                        <div class="blog-page-contant-start">
                            <div class="row">
                                <cms:set u_has_data="0" 'global' />
                                <cms:pages masterpage='blog_single.php' start_on=k_archive_date
                                    stop_before=k_next_archive_date paginate='1' limit='5'
                                    folder="<cms:php> echo !empty($_GET['folder'])?$_GET['folder']:null;</cms:php>">
                                    <cms:set u_has_data="1" 'global' />
                                    <!--== Single Blog Post start ==-->
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="<cms:show blog_image_small />" alt="Blog"
                                                        class="img-fluid">
                                                </div>
                                            </figure>
                                            <div class="blog-content">
                                                <h3><a href="<cms:show k_page_link />">
                                                        <cms:excerptHTML count='75' ignore='img'>
                                                            <cms:show blog_title />
                                                        </cms:excerptHTML>
                                                    </a></h3>
                                                <p>
                                                    <cms:excerptHTML count='75' ignore='img'>
                                                        <cms:show blog_details />
                                                    </cms:excerptHTML>
                                                </p>
                                                <a href="<cms:show k_page_link />" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                                    <!--== Single Blog Post End ==-->
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
                    <!-- Blog content Area End -->

                    <!-- Sidebar Area Start -->
                    <div class="col-lg-4 order-first order-lg-last">
                        <div class="sidebar-area-wrap">
                            <!-- Single Sidebar Start -->
                            <div class="single-sidebar-wrap">
                                <h4 class="sidebar-title">Categories</h4>
                                <div class="sidebar-body">
                                    <ul class="brand-unorderlist">
                                        <cms:folders masterpage='blog_single.php'>
                                            <li><a
                                                    href="<cms:show k_template_link />?folder=<cms:show k_folder_name />">
                                                    <cms:show k_folder_title  />( <cms:show k_folder_pagecount/> )</a></li>
                                        </cms:folders>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single Sidebar End -->
                        </div>
                    </div>
                    <!-- Sidebar Area End -->
                </div>
            </div>
        </div>
    </div>
    <!--== Blog Page Content End ==-->
</cms:if>
<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>