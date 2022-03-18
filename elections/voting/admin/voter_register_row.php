<?php 
// edit_province
// edit_name
// edit_university
// edit_id
// edit_vi
// edit_vp
// edit_china
// edit_grad
// edit_contact
// edit_email
// edit_verified 
	include 'includes/session.php';

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

	if(isset($_POST['id'])){
		$studID = $_POST['id'];
	
        $val = $workSheet_array[$studID];

        $row = array('province' => $val[0], 'name' => $val[1], 'university' => $val[2], 'id' => $val[3], 'vi' => $val[4], 'vp' => $val[5], 'china' => $val[6], 'grad' => $val[7], 'contact' => $val[8], 'email' => $val[9], 'verified' => $val[10]);
            
		echo json_encode($row);
	}
?>


