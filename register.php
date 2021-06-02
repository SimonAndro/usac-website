<?php require_once( 'admin/cms.php' ); ?>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--  -->
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Membership Form</h1>
                    <p>Usac Needs enables you to harness the power of your Usac network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let&apos;s See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row">
                                    <!-- Signin Area Content Start -->
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="signin-area-wrap">
                                                    <div class="error-msg-list-login invisible">
                                                    </div>
                                                    <h4>Already a Member?</h4>
                                                    <div class="sign-form">
                                                        <form action="./dashboard/index.php"
                                                            onsubmit="event.preventDefault(); loginUser(this);">
                                                            <input type="hidden" value="login" name="val[action]" />
                                                            <input id="login-email" type="text" name="val[email]"
                                                                placeholder="Enter your email">
                                                            <input id="login-password" type="password"
                                                                name="val[password]" placeholder="Password">
                                                            <button type="submit" class="btn btn-reg">Login</button>
                                                            <div class="text-center" style="margin-top:10px;">
                                                                <a href="account-recover.php">Forgotten password?</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Signin Area Content End -->

                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-7 col-md-6 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3>registration Form</h3>
                                            <div class="register-form">
                                                <div class="error-msg-list-register invisible">
                                                </div>
                                                <form action="./dashboard/index.php"  onsubmit="event.preventDefault(); registerUser(this);" enctype="multipart/form-data">
                                                    <input type="hidden" value="register" name="val[action]" />
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_email">Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="register_email" name="val[email]">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_password">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="register_password" name="val[password]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_name">Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_name" name="val[name]">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_stuid">University</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_uni" name="val[university]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12">
                                                            <input style="height: 39px !important; font-size:16px;"
                                                                class="form-control" type="text" name="val[birthdate]"
                                                                placeholder="Birthdate" readonly="readonly"
                                                                id="quiDatepicker">
                                                        </div>
                                                    </div>
                                                    <div class="form-group file-input">
                                                        <!-- student-card-file -->
                                                        <label class="custom-file" for="customfile" ><i
                                                                class="fa fa-upload"></i>Upload Your Student ID
                                                            Card (required)</label>
                                                        <input type="file" name="student_card" id="customfile" onchange="fileChanged(this)"
                                                            class="d-none student-card-file">
                                                        <span class="std-card-fn f-error"></span>
                                                        
                                                    </div>

                                                    <div class="gender form-group">
                                                        <label class="g-name d-block">Gender</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="register_gender_male"
                                                                name="val[gender]" value="male"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="register_gender_male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="register_gender_female"
                                                                name="val[gender]" value="female"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="register_gender_female">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox float-lg-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1" >
                                                            <label class="custom-control-label" for="customCheck1" name="val[terms]">
                                                                I have read and agree to the <a href="terms.php">USAC
                                                                    Terms of Service </a></label>
                                                        </div>
                                                        <input type="submit" class="btn btn-reg" value="Registration">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Regsiter Form Area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>