<?php

$reqAction = @$_GET["reqaction"];
switch($reqAction)
{
    case "export":
        if(!$authentication->isLoggedIn() || !$authentication->getUser()->isAdmin() ){
            echo "Access denied!";
            die();
        }

        $filename = "registered.xls"; // File Name
        // Download file
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Type: application/vnd.ms-excel");

        $sql = "SELECT name,name_last,university,grad_date,email FROM ".$usersTable->getTableName();
        $user_query = $usersTable->customQuery($sql);
        // Write data to file
        $flag = false;
        foreach($user_query as $row)
        {
    
            $user_x["fn"] = $row->getFirstName();
            $user_x["ln"] = $row->getLastName();
            $user_x["un"] = $row->getUniversity();
            $user_x["gd"] = $row->getGraduationDate();  
            $user_x["ed"] = $row->getEmail();
            

            if (!$flag) {
                $header_x["First Name"] = 1;
                $header_x["Last Name"] = 1;
                $header_x["University"] = 1;
                $header_x["Graduation Date"] = 1;
                $header_x["Email Address"] = 1;
                // display field/column names as first row
                echo implode("\t", array_keys($header_x)) . "\r\n";
                $flag = true;
            }
            echo implode("\t", array_values($user_x)) . "\r\n";
        }
    die();
    break;
}
