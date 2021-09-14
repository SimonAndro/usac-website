<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "member", 'global' );
    $CTX->set( 'u_sub_page', "directory", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Page Directory Intro'>
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
                    <h1 class="h2">Member Directory</h1>
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

<!--== Directory Page Content Start ==-->
<section id="page-content-wrap">
    <div class="directory-page-content-warp section-padding">
        <div class="container">
            <div class="row" id="directory-show">
                <div class="col-lg-12 text-center">
                    <div class="directory-text-wrap">
                        <h2>Now we have <strong class="funfact-count">
                                <cms:show usac_total_user /></strong> members </h2>
                        <div class="table-search-area">
                            <form action="directory.php#directory-show" method="post">
                                <input type="hidden" name="val[dir_search]" value="1">
                                <input type="hidden" name="val[search_offset]" value="<cms:show u_result_offset />">
                                <input type="search" name="val[key_word]" placeholder="Type search Keyword">
                                <button class="btn btn-brand">Search</button>
                            </form>
                        </div>
                        <cms:if u_s_key_word>
                            <div style="margin-top:10px;"> Showing results for <b><i>
                                        <cms:show u_s_key_word /></i></b></div>
                        </cms:if>
                        <div class="directory-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">University</th>
                                        <th scope="col">Grad.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <cms:php>
                                        global $CTX;
                                        $res = $CTX->get('u_user_data');
                                        if(!empty($res)){
                                            foreach($res as $r)
                                            {
                                                $CTX->set("u_has_results",'1','global');
                                                //$idc=$r->getUserId()."<br/>";
                                                echo $idc.'<tr><td class="text-left">'.$r->getFirstName()." ".$r->getLastName().'</td><td>'.$r->getUniversity().'</td><td>'.substr($r->getGraduationDate(),-4).'</td></tr>';
                                            }
                                        }
                                        else
                                        {
                                            echo '<tr><td></td><td>No results found</td><td></td></tr>';
                                        }
                                    </cms:php>

                                </tbody>
                            </table>
                        </div>
                        <p class="show-memeber text-right">
                            Page <span>
                                <cms:show u_dcurr_page /></span> of <span>
                                <cms:show u_dtotal_page /></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-wrap text-center">
                        <nav>
                            <ul class="pagination">
                                <cms:if u_prev_page>
                                    <li class="page-item"><a class="page-link"
                                            href="<cms:show k_template_link />?dir_page=<cms:show u_prev_page />#directory-show"><i
                                                class="fa fa-angle-left"></i>
                                            Prev
                                        </a>
                                    </li>
                                </cms:if>
                                <li></li>
                                <li></li>
                                <li></li>
                                <cms:if u_next_page>
                                    <li class="page-item"><a class="page-link"
                                            href="<cms:show k_template_link />?dir_page=<cms:show u_next_page />#directory-show"><i
                                                class="fa fa-angle-right"></i>
                                            Next</a></li>
                                </cms:if>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Directory Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>