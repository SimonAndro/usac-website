<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>USAC Decides</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">

    <style>
        blockquote {
            background: #f9f9f9;
            border-left: 10px solid #ccc;
            margin: 1.5em 10px;
            padding: 0.5em 10px;
            quotes: "\201C""\201D""\2018""\2019";
        }

        blockquote:before {
            color: #ccc;
            content: open-quote;
            font-size: 4em;
            line-height: 0.1em;
            margin-right: 0.25em;
            vertical-align: -0.4em;
        }

        blockquote p {
            display: inline;
        }
    </style>
</head>

<body style="overflow-x: hidden; overflow-y: scroll;">
    <!-- main content -->
    <div>
        <div class="text-center mt-2" style="position:fixed; top:0px; width:100%; z-index:10;">
            <div class="progress" style="display:none; height:50px;">
                <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                    role="progressbar" style="width: 10%; height:50px;">10%</div>
            </div>
        </div>
        <blockquote class="blockquote" style="margin-top:60px;">
            <p class="mb-0">Every Election is determined by those who show up.</p>
        </blockquote>
        <div class="container-fluid p-3">
            <div class="text-center">
                <img style="width:200px; height:auto;" class="" src="./assets/img/badge.png" alt="country league logo">
            </div>
            <div class="">
                <h1 class="text-center text-secondary" style="text-shadow: 2px 2px #fffffa;"> Voter Verification
                </h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <form class="mt-3 general-form" method="post" action="" onsubmit="return false">
                        <input type="hidden" name="action" value="get_voter">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="province" class="text-dark" style="font-size: 20px;">Province/City</label>
                                    <select name="studprovince" class="form-control" id="province">
                                        <option>Anhui</option>
                                        <option>Beijing</option>
                                        <option>Chongqing</option>
                                        <option>Fujian</option>
                                        <option>Hainan</option>
                                        <option>Heilongjiang</option>
                                        <option>Henan</option>
                                        <option>Hubei</option>
                                        <option>Hunan</option>
                                        <option>Jiangsu</option>
                                        <option>Jilin</option>
                                        <option>Liaoning</option>
                                        <option>Shaanxi</option>
                                        <option>Shandong</option>
                                        <option>Shanghai</option>
                                        <option>Sichuan</option>
                                        <option>Tianjin</option>
                                        <option>Zheijiang</option>
                                        <option>New Student</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="student-num" class="text-dark" style="font-size: 20px;">Surname</label>
                                    <input name="studname_sir" type="text" class="form-control" id="name_1"
                                        placeholder="Surname" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="student-num" class="text-dark" style="font-size: 20px;">Other
                                        name(s)</label>
                                    <input name="studname_other" type="text" class="form-control" id="name_2"
                                        placeholder="Other name(s)">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" style="font-size: 20px;" class="btn btn-primary btn-block">Retrieve
                                Info</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive" id="retrived-studs">
                        <div class="text-center h3 p-2 mt-4">Retrieved Info</div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Province</th>
                                    <th scope="col">University</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6">No Info Retrieved, select your province and enter your name to
                                        retrieve info.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications -->
    <div id="notifications">

    </div>

    <!-- download ticket Modal -->
    <div class="modal fade" id="id-downloadticket-modal" tabindex="-1" role="dialog"
        aria-labelledby="id-downloadticket-modal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Save Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div style="font-size: 12px;">
                        Note: The ticket is only issued once, save it before closing browser window
                    </div>
                    <hr class="m-0">
                    <div class="mt-2">
                        <img style="width: 100%; height: auto;" id="studnum-placeholder-img" src="" alt="ticket">
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a id="studnum-placeholder" href="./index.html" class="btn  btn-primary" target="_blank"
                        download>Download Ticket</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-right p-3">
        <strong>
            <small class="text-muted ">
                <a target="_blank" href="https://2times180.com/index.php">Powered by 2times180</a>
            </small>
        </strong>
    </footer>

    <script src="./assets/js/jquery-3.2.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/notify.js"></script>
    <script src="./assets/js/base.js"></script>

</body>

</html>