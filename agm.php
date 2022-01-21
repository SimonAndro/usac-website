<?php require_once 'admin/cms.php';?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "about", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<cms:template title='Page About Us Intro'>
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
                    <h1 class="h2">About Us</h1>
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

<!--== Committee Page Content Start ==-->
<section id="page-content-wrap">
    <div class="about-page-content-wrap section-padding">
        <div class="st1">
            <div style=" padding: 20px;">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div style="display: flex; align-items: center; justify-content: space-evenly;">
                                <div style="padding: 5px;">
                                    <h1>
                                        <div style="color: #ff9700;">USAC</div>
                                        <div>AGM</div>
                                        <div>
                                            20<span style="color: #ff9700;">22</span>
                                        </div>
                                    </h1>
                                </div>
                                <div style="padding: 5px; ">
                                    <h1>
                                        5th
                                        <div>
                                            Feb
                                        </div>
                                        <div class="st0">

                                        </div>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-auto" style="margin-top: 30px;">
                            <div style="text-align: center;">
                                <div style="font-size: 22px;">
                                    19.00 - 21.00 Hrs
                                </div>
                                <div style="display: flex; align-items: center; justify-content: center;">
                                    <div style="padding: 10px 10px 0 0;">
                                        <img src="./zoom.png" alt="">
                                    </div>
                                    <div style="font-size: 22px;">
                                        <div>
                                            ID: 883 2300 5397
                                        </div>
                                        <div>
                                            Password: 212121
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:30px; margin-bottom: 10px;">
                        <div class="col-md-4">
                            <h4 style="color: #ff9700;">
                                REPORTING ON THE YEAR'S EVENTS
                            </h4>
                            <div>
                                Get to listen from the USAC representatives as they report about the events,
                                achivements and
                                accountability for the year.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 style="color: #ff9700;">
                                DISCUSSION OF ISSUES OF GENERAL CONCERN
                            </h4>
                            <div>
                                Issues have been reported, and we want to discuss how they can be handled going
                                forward.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 style="color: #ff9700;">
                                INSPIRATION FROM SPECIAL GUESTS
                            </h4>
                            <div>
                                Dont miss to be inspired from experiences shared by our special ghests.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="st0">
                </div>
                <div style="margin: 20px 0;">
                    <h4>Sponsored By:</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div style="text-align:center; width: 150px;">
                                <div>TRADE HIVE</div>

                                <img style="width: 100%;" src="./sponsors/tradehive.jpg" alt="">

                                <div style="text-align:left;">e-commerce platform, air cargo, money transfers</div>
                            </div>
                        </div>
                        <!-- <div style="float:left; width: 150px; text-align: center; margin: 10px;">
                        <div>TRADE HIVE</div>
                        <div style="width: 150px;">
                            <img style="width: 100%;" src="./sponsors/tradehive.jpg" alt="">
                        </div>
                        <div style="text-align:left;">e-commerce platform, air cargo, money transfers</div>
                    </div> -->
                        <div class="col-md-8">
                            <h3 style="margin: 50px;">
                                ADVERTISE HERE
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="st0">
                </div>
                <div style="margin-top: 10px;">
                    <h4>AGENDA</h4>
                    <div>
                        <table>
                            <tr>
                                <th>
                                    Item
                                </th>
                                <th>
                                    In charge
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    USAC Vision
                                </th>
                                <th>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    USAC Mission
                                </th>
                                <th>

                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Call to Order
                                </td>
                                <td>
                                    Chairman
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Anthems/Prayer
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Introduction Remarks
                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Minutes from Prv AGM
                                </td>
                                <td>
                                    Secretary
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Financial Report
                                </td>
                                <td>
                                    Treasurer
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Welfare Report
                                </td>
                                <td>
                                    Welfare & culture rep
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Remarks from UGIC representative
                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    General assessment
                                </td>
                                <td>
                                    President
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Guest of Honor’s Remarks
                                </td>
                                <td>
                                    GOH
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    Appreciation remarks
                                </td>
                                <td>
                                    Students
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Announcements/adverts from student entrepreneurs
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    AOB
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Departure at leisure/ entertainment
                                </td>
                                <td>
                                    DJ
                                </td>
                            </tr>
                        </table>

                        <div style="margin: 20px;">NB: The agenda set is to be followed precisely</div>
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

<?php COUCH::invoke();?>