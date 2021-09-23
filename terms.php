<?php require_once( 'admin/cms.php' ); ?>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Terms of service'>
</cms:template >
<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="main" style="margin:20px;">
                        <cms:editable name='terms' label='Website terms of service' desc='Enter the terms here' type='richtext'>
                            <h1>Terms of Service</h1>
                            <p>Last updated: September 25, 2016</p>
                            <p>Please read these Terms of Service ("Terms", "Terms of Service") carefully before using
                                the https://www.github.com/mrwhiterk website (the "Service") operated by mrwhiterk
                                ("us", "we", or "our").</p>
                            <p>Your access to and use of the Service is conditioned on your acceptance of and compliance
                                with these Terms. These Terms apply to all visitors, users and others who access or use
                                the Service.</p>
                            <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree
                                with any part of the terms then you may not access the Service. This Terms of Service
                                was created with <a href="https://termsfeed.com/terms-service/generator/">the Terms of
                                    Service Generator from TermsFeed</a>.</p>
                            <p><strong>Accounts</strong></p>
                            <p>When you create an account with us, you must provide us information that is accurate,
                                complete, and current at all times. Failure to do so constitutes a breach of the Terms,
                                which may result in immediate termination of your account on our Service.</p>
                            <p>You are responsible for safeguarding the password that you use to access the Service and
                                for any activities or actions under your password, whether your password is with our
                                Service or a third-party service.</p>
                            <p>You agree not to disclose your password to any third party. You must notify us
                                immediately upon becoming aware of any breach of security or unauthorized use of your
                                account.</p>
                            <p><strong>Links To Other Web Sites</strong></p>
                            <p>Our Service may contain links to third-party web sites or services that are not owned or
                                controlled by mrwhiterk.</p>
                            <p>mrwhiterk has no control over, and assumes no responsibility for, the content, privacy
                                policies, or practices of any third party web sites or services. You further acknowledge
                                and agree that mrwhiterk shall not be responsible or liable, directly or indirectly, for
                                any damage or loss caused or alleged to be caused by or in connection with use of or
                                reliance on any such content, goods or services available on or through any such web
                                sites or services.</p>
                            <p>We strongly advise you to read the terms and conditions and privacy policies of any
                                third-party web sites or services that you visit.</p>
                            <p><strong>Termination</strong></p>
                            <p>We may terminate or suspend access to our Service immediately, without prior notice or
                                liability, for any reason whatsoever, including without limitation if you breach the
                                Terms.</p>
                            <p>All provisions of the Terms which by their nature should survive termination shall
                                survive termination, including, without limitation, ownership provisions, warranty
                                disclaimers, indemnity and limitations of liability.</p>
                            <p>We may terminate or suspend your account immediately, without prior notice or liability,
                                for any reason whatsoever, including without limitation if you breach the Terms.</p>
                            <p>Upon termination, your right to use the Service will immediately cease. If you wish to
                                terminate your account, you may simply discontinue using the Service.</p>
                            <p>All provisions of the Terms which by their nature should survive termination shall
                                survive termination, including, without limitation, ownership provisions, warranty
                                disclaimers, indemnity and limitations of liability.</p>
                            <p><strong>Governing Law</strong></p>
                            <p>These Terms shall be governed and construed in accordance with the laws of Colorado,
                                United States, without regard to its conflict of law provisions.</p>
                            <p>Our failure to enforce any right or provision of these Terms will not be considered a
                                waiver of those rights. If any provision of these Terms is held to be invalid or
                                unenforceable by a court, the remaining provisions of these Terms will remain in effect.
                                These Terms constitute the entire agreement between us regarding our Service, and
                                supersede and replace any prior agreements we might have between us regarding the
                                Service.</p>
                            <p><strong>Changes</strong></p>
                            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any
                                time. If a revision is material we will try to provide at least 30 days notice prior to
                                any new terms taking effect. What constitutes a material change will be determined at
                                our sole discretion.</p>
                            <p>By continuing to access or use our Service after those revisions become effective, you
                                agree to be bound by the revised terms. If you do not agree to the new terms, please
                                stop using the Service.</p>
                            <p><strong>Contact Us</strong></p>
                            <p>If you have any questions about these Terms, please contact us.</p>

</cms:editable>

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