<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "event", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Events'>
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
                    <h1 class="h2">All Event Archive</h1>
                    <p>Usac Needs enables you to harness the power of your Usac network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let&apos;s See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<cms:if k_is_page>
    <cms:embed 'event_single.php' />
    <cms:else />
    <!--== Gallery Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="event-page-content-wrap section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="event-filter-area">
                            <form action="index.html" class="form-inline">
                                <select name="year" id="year">
                                    <option selected>Year</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                </select>
                                <button class="btn btn-brand">Filter</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="all-event-list">

                            <cms:pages masterpage='event_single.php' start_on=k_archive_date
                                stop_before=k_next_archive_date paginate='1' limit='3'>
                                <!-- Single Event Start -->
                                <div class="single-upcoming-event">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="up-event-thumb">
                                                <img src="<cms:show  event_image />" class="img-fluid"
                                                    alt="Upcoming Event">
                                                <h4 class="up-event-date">It&#x2019;s <cms:date  event_date /></h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="up-event-text">
                                                        <div class="event-countdown">
                                                            <div class="event-countdown-counter" data-date="<cms:date  event_date format='Y/m/d' />">
                                                            </div>
                                                            <p>Remaining</p>
                                                        </div>
                                                        <h3><a href="<cms:show k_page_link />"><cms:show event_short_title /></a></h3>
                                                        <p> <cms:show event_short_desc /> </p>
                                                        <a href="<cms:show k_page_link />"
                                                            class="btn btn-brand btn-brand-dark">Check Event</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Event End -->
                                <cms:if k_paginated_bottom>
                                    <!-- Blog Navigation -->
                                    <p class="clearfix">
                                        <cms:if k_paginate_link_next>
                                            <a href="<cms:show k_paginate_link_next />" class="button float">&lt;&lt;
                                                Previous Posts</a>
                                        </cms:if>

                                        <cms:if k_paginate_link_prev>
                                            <a href="<cms:show k_paginate_link_prev />" class="button float right">Newer
                                                Posts >></a>
                                        </cms:if>
                                    </p>
                                </cms:if>
                            </cms:pages>
                        </div>
                    </div>
                </div>

                <!-- Pagination Start -->
                <div class="row">
                    <div class="col-lg-12">
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
                <!-- Pagination End -->
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
</cms:if>

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>