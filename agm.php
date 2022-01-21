<?php require_once( 'admin/cms.php' ); ?>

<cms:php>
    global $CTX;
    $CTX->set( 'u_page', "2022 AGM", 'global' );
</cms:php>

<!--== Header Area Start ==-->
<cms:embed 'header.php' />
<!--== Header Area End ==-->

<style>
    .st0 {
        background: -moz-linear-gradient(0% 50% 0deg, rgba(255, 193, 0, 1) 0%, rgba(255, 173, 0, 1) 27.77%, rgba(255, 151, 0, 1) 53.45%);
        background: -webkit-linear-gradient(0deg, rgba(255, 193, 0, 1) 0%, rgba(255, 173, 0, 1) 27.77%, rgba(255, 151, 0, 1) 53.45%);
        background: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0, rgba(255, 193, 0, 1)), color-stop(0.2777, rgba(255, 173, 0, 1)), color-stop(0.5345, rgba(255, 151, 0, 1)));
        background: -o-linear-gradient(0deg, rgba(255, 193, 0, 1) 0%, rgba(255, 173, 0, 1) 27.77%, rgba(255, 151, 0, 1) 53.45%);
        background: -ms-linear-gradient(0deg, rgba(255, 193, 0, 1) 0%, rgba(255, 173, 0, 1) 27.77%, rgba(255, 151, 0, 1) 53.45%);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFC100', endColorstr='#FF9700' ,GradientType=0)";
        background: linear-gradient(90deg, rgba(255, 193, 0, 1) 0%, rgba(255, 173, 0, 1) 27.77%, rgba(255, 151, 0, 1) 53.45%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFC100', endColorstr='#FF9700', GradientType=1);
        height: 5px;
        margin-top: 5px;
    }

    .st1 {
        background: -moz-linear-gradient(0% 50% 0deg, rgba(56, 56, 58, 1) 0%, rgba(38, 38, 38, 1) 84.66%, rgba(34, 34, 34, 1) 100%);
        background: -webkit-linear-gradient(0deg, rgba(56, 56, 58, 1) 0%, rgba(38, 38, 38, 1) 84.66%, rgba(34, 34, 34, 1) 100%);
        background: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0, rgba(56, 56, 58, 1)), color-stop(0.8466, rgba(38, 38, 38, 1)), color-stop(1, rgba(34, 34, 34, 1)));
        background: -o-linear-gradient(0deg, rgba(56, 56, 58, 1) 0%, rgba(38, 38, 38, 1) 84.66%, rgba(34, 34, 34, 1) 100%);
        background: -ms-linear-gradient(0deg, rgba(56, 56, 58, 1) 0%, rgba(38, 38, 38, 1) 84.66%, rgba(34, 34, 34, 1) 100%);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#38383A', endColorstr='#222222' ,GradientType=0)";
        background: linear-gradient(90deg, rgba(56, 56, 58, 1) 0%, rgba(38, 38, 38, 1) 84.66%, rgba(34, 34, 34, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#38383A', endColorstr='#222222', GradientType=1);
        width: 100%;
        color: #FFF;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even)>th,
    tr:nth-child(even)>td {
        border: 1px solid black;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
        color: black;
        border: 1px solid black;
    }
</style>

<!--== Blog Page Content Start ==-->
<div id="page-content-wrap">
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
                    <div class="col-md-3 mt-3">
                        <div class="mx-auto" style="text-align:center; width: 200px;">
                            <div>TRADE HIVE</div>

                            <img style="width: 100%;" src="./sponsors/tradehive.jpg" alt="">

                            <div style="text-align:left;">e-commerce platform, air cargo, money transfers
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="mx-auto" style="text-align:center; width: 200px;">
                            <div>MIMA TECHNOLOGIES LTD</div>

                            <img style="width: 100%;" src="./sponsors/mimatech.jpg" alt="">

                            <div style="text-align:left;">for all advanced security systems
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="mx-auto" style="text-align:center; width: 200px;">
                            <h3 style="margin: 0px;">
                                ADVERTISE HERE
                            </h3>
                        </div>
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

<!--== Blog Page Content End ==-->

<!--== Footer Area Start ==-->
<cms:embed 'footer.php' />
<!--== Footer Area End ==-->

<?php COUCH::invoke(); ?>