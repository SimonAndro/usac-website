<?php require_once( 'admin/cms.php' );?>


<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "contact", 'global' ); 
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<!--== Page Title Area End ==-->

<!--== Contact Page Content Start ==-->
<section id="page-content-wrap">
    <div class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-content-inner">
                        <div class="row">
                            <div class="col-lg-6 m-auto">
                                <div class="contact-form-wrap">
                                    <h3>send message</h3>
                                    <cms:form action='' method='post' id='cbx-contact-form'>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="cbxname">Name</label>
                                                    <cms:input type="text" name="cbxname" required id="cbxname"
                                                        class="form-control" />
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="cbxemail">Email</label>
                                                    <cms:input type="text" name="cbxemail" required id="cbxemail"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cbxsubject">Subjet</label>
                                            <cms:input type="text" name="cbxsubject" id="cbxsubject" class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label for="cbxmessage">Message</label>
                                            <textarea name="cbxmessage" id="cbxmessage" rows="10" cols="80"
                                                class="form-control"></textarea>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <cms:input type="checkbox" class="custom-control-input" id="cbxsendme"
                                                name="cbxsendme" value="on" />
                                            <label class="custom-control-label" for="cbxsendme">Send Me CC</label>
                                        </div>

                                        <button class="btn btn-reg">Send</button>
                                        <div id="cbx-formalert"></div>
                                    </cms:form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Contact Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>