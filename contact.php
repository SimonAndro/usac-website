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
                                        <cms:if k_success>
                                            <p class="alert alert-success">Thank you. We'll get back to you as soon as
                                                possible. </p>
                                            <cms:else />
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="cbxname">Name</label>
                                                        <cms:input type="text" name="cbxname" required='1' id="cbxname"
                                                            class="form-control" />
                                                        <cms:if k_error_cbxname>
                                                            <p class="alert alert-danger">Enter a name</p>
                                                        </cms:if>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="cbxemail">Email</label>
                                                        <cms:input type="text" name="cbxemail" required='1'
                                                            validator='email' id="cbxemail" class="form-control" />
                                                        <cms:if k_error_cbxemail>
                                                            <p class="alert alert-danger">Enter valid email address
                                                            </p>
                                                        </cms:if>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cbxsubject">Subject</label>
                                                <cms:input type="text" name="cbxsubject" required='1' id="cbxsubject"
                                                    class="form-control" />
                                                <cms:if k_error_cbxsubject>
                                                    <p class="alert alert-danger">Enter a message subject</p>
                                                </cms:if>
                                            </div>

                                            <div class="form-group">
                                                <label for="cbxmessage">Message</label>
                                                <cms:input type='textarea' name="cbxmessage" required='1'
                                                    id="cbxmessage" rows="10" cols="80" class="form-control">
                                                </cms:input>
                                                <cms:if k_error_cbxmessage>
                                                    <p class="alert alert-danger">Enter a message</p>
                                                </cms:if>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <cms:input type="checkbox" class="" id="cbxsendme" name="cbxsendme"
                                                    opt_values="Send Me CC" />
                                            </div>
                                            <button class="btn btn-reg">Send</button>
                                            <div id="cbx-formalert"></div>
                                        </cms:if>
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