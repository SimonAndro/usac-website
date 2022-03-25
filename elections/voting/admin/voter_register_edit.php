<?php
	include 'includes/session.php';
    require __DIR__."/../../includes/utils.php";
    require __DIR__.'/../../verification/vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $inputFileName = getConfig("data_file_name"); //name of file that store data

    $locking_file = getConfig("locking_file_name"); //name of locking file            


	if(isset($_POST['edit'])){
        // Read excel file
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
        // get active worksheet
        $workSheet = $spreadsheet->getActiveSheet();

        $studID = $_POST['id'];

        $edit_province = $_POST['province'];
        $edit_name = $_POST['name'];
        $edit_university = $_POST['university'];
        $edit_china = $_POST['china'];
        $edit_grad = $_POST['grad'];
        $edit_contact = $_POST['contact'];
        $edit_email = $_POST['email'];
        $edit_verify = $_POST['verify'];

        // set verified
        $workSheet->getCell("A" . ($studID + 1))->setValue($edit_province);
        $workSheet->getCell("B" . ($studID + 1))->setValue($edit_name);
        $workSheet->getCell("C" . ($studID + 1))->setValue($edit_university);
        $workSheet->getCell("G" . ($studID + 1))->setValue($edit_china);
        $workSheet->getCell("H" . ($studID + 1))->setValue($edit_grad);
        $workSheet->getCell("I" . ($studID + 1))->setValue($edit_contact);
        $workSheet->getCell("J" . ($studID + 1))->setValue($edit_email);
        $workSheet->getCell("K" . ($studID + 1))->setValue($edit_verify);
  
        //writing changes directly using loaded spreadsheet data
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        if (file_exists($locking_file)) {
            $_SESSION['error'] = "Server busy, try again later";
        } else {
            file_put_contents($locking_file, "locking file created"); // create cron locking file
            $writer->save($inputFileName);
            unlink($locking_file); //remove locking file
    
            $_SESSION['success'] = 'Voter updated successfully';
        }
		
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voter_register.php');

?>