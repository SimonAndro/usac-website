<?php
	include 'includes/session.php';
    require __DIR__."/../../includes/utils.php";
    require __DIR__.'/../../verification/vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $inputFileName = getConfig("data_file_name"); //name of file that store data

    $locking_file = getConfig("locking_file_name"); //name of locking file            


	if(isset($_POST['add'])){
        // Read excel file
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
        // get active worksheet
        $workSheet = $spreadsheet->getActiveSheet();

        $workSheet_array = $workSheet->toArray();

        $studID = count($workSheet_array);

        $edit_province = $_POST['province'];
        $edit_name = $_POST['name'];
        $edit_university = $_POST['university'];
        $edit_china = $_POST['china'];
        $edit_grad = $_POST['grad'];
        $edit_contact = $_POST['contact'];

        // set verified
        $workSheet->getCell("A" . $studID)->setValue($edit_province);
        $workSheet->getCell("B" . $studID)->setValue($edit_name);
        $workSheet->getCell("C" . $studID)->setValue($edit_university);
        $workSheet->getCell("D" . $studID)->setValue($studID);
        $workSheet->getCell("G" . $studID)->setValue($edit_china);
        $workSheet->getCell("H" . $studID)->setValue($edit_grad);
        $workSheet->getCell("I" . $studID)->setValue($edit_contact);
  
        //writing changes directly using loaded spreadsheet data
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        if (file_exists($locking_file)) {
            $_SESSION['error'] = "Server busy, try again later";
        } else {
            file_put_contents($locking_file, "locking file created"); // create cron locking file
            $writer->save($inputFileName);
            unlink($locking_file); //remove locking file
    
            $_SESSION['success'] = 'Voter register updated successfully: '.$studID;
        }

	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}
	header('location: voter_register.php');
?>