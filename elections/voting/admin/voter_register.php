<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Raw Voters Register
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Voter Register</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <?php
                    if(isset($_SESSION['error'])){
                    echo "
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-warning'></i> Error!</h4>
                        ".$_SESSION['error']."
                        </div>
                    ";
                    unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                    echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> Success!</h4>
                        ".$_SESSION['success']."
                        </div>
                    ";
                    unset($_SESSION['success']);
                    }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>id</th>
                                        <th>province</th>
                                        <th>name</th>
                                        <th>university</th>
                                        <th>vi</th>
                                        <th>vp</th>
                                        <th>china</th>
                                        <th>grad</th>
                                        <th>contact</th>
                                        <th>email</th>
                                        <th>verified</th>
                                        <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php                    
                                            require __DIR__."/../../includes/utils.php";
                                            require __DIR__.'/../../verification/vendor/autoload.php';
                                            use PhpOffice\PhpSpreadsheet\IOFactory;
                                            
                                            $inputFileName = getConfig("data_file_name"); //name of file that store data
                                            
                                            $locking_file = getConfig("locking_file_name"); //name of locking file            
                                            
                                            // Read excel file
                                            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
                                            // get active worksheet
                                            $workSheet = $spreadsheet->getActiveSheet();

                                            $workSheet_array = $workSheet->toArray();

                                            unset($workSheet_array[0]);

                                            foreach($workSheet_array as $val){ 
                                                $row = array('province' => $val[0], 'name' => $val[1], 'university' => $val[2], 'id' => $val[3], 'vi' => $val[4], 'vp' => $val[5], 'china' => $val[6], 'grad' => $val[7], 'contact' => $val[8], 'email' => $val[9], 'verified' => $val[10]);                        
                                                echo "
                                                    <tr>
                                                    <td>".$row['id']."</td>
                                                    <td>".$row['province']."</td>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['university']."</td> 
                                                    <td>".$row['vi']."</td>
                                                    <td>".$row['vp']."</td>   
                                                    <td>".$row['china']."</td> 
                                                    <td>".$row['grad']."</td>
                                                    <td>".$row['contact']."</td>   
                                                    <td>".$row['email']."</td>
                                                    <td>".$row['verified']."</td>                        
                                                    <td>
                                                        <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                                                        <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                                                    </td>
                                                    </tr>
                                                ";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php include 'includes/footer.php'; ?>
            <?php include 'includes/voter_register_modal.php'; ?>
        </div>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function () {
            $(document).on('click', '.edit', function (e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.photo', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });

        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'voter_register_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (response) {
                    $('.id').val(response.id);

                    $('.fullname').html(response.name);

                    $('#edit_province').val(response.province);
                    $('#edit_name').val(response.name);
                    $('#edit_university').val(response.university);
                    $('#edit_china').val(response.china);
                    $('#edit_grad').val(response.grad);
                    $('#edit_contact').val(response.contact);
                    $('#edit_email').val(response.email);
                    $('#edit_verify').val(response.verified);

                }
            });
        }
    </script>
</body>

</html>