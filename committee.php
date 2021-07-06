<?php require_once( 'admin/cms.php' ); $CTX->set( 'u_page', "member", 'global' ); ?>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area" style="background-image: url('<cms:show intro_image />');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Committee</h1>
                    <p>Usac Needs enables you to harness the power of your Usac network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let&apos;s See</a>
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
                <div class="row">
                    <div class="col-lg-4 col-sm-10 col-md-7 m-auto">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Bryan Watshon <span class="committee-deg">President</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Carlos Helu <span class="committee-deg">Vice President</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Amancio Ortega <span class="committee-deg">Secretary</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Angle Tuni <span class="committee-deg">Asst Secretary</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Alex Kalifa <span class="committee-deg">Office Secretary</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Mal Muhit <span class="committee-deg">Finance Member</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Alex Salina <span class="committee-deg">Committee Member</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Karim Mia <span class="committee-deg">Committee Member</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Rahim Mia <span class="committee-deg">Committee Member</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Prince Rimon<span class="committee-deg">Committee Member</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Sheoli Afsar<span class="committee-deg">Committee Member</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <img src="http://placehold.it/500x700" class="img-fluid" alt="Committee">
                            <h3>Prince Kamla<span class="committee-deg">Committee Member</span></h3>
                        </div>
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