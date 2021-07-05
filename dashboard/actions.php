<?php

$reqAction = @$_GET["reqaction"];
if (isset($_GET) and isset($reqAction)) {
    switch ($reqAction) {
        case "export":
            if (!$authentication->isLoggedIn() || !$authentication->getUser()->isAdmin()) {
                echo "Access denied!";
                die();
            }

            $filename = "registered.xls"; // File Name
            // Download file
            header("Content-Disposition: attachment; filename=\"$filename\"");
            header("Content-Type: application/vnd.ms-excel");

            $sql = "SELECT name,name_last,university,grad_date,email FROM " . $usersTable->getTableName();
            $user_query = $usersTable->customQuery($sql);
            // Write data to file
            $flag = false;
            foreach ($user_query as $row) {

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
}

$val = @$_POST['val'];
$reqAction = @$val["reqaction"];
dump_to_file($val);
if (isset($_POST) and isset($val) and isset($reqAction)) {
    switch ($reqAction) {
        case "update_user":
            if (!$authentication->isLoggedIn()) {
                $msg = "error";
                $errors[] = "Access denied";
            } else {

                $valid = true;
                $errors = array();
                $msg = "error";
                $toUpdate = $usersTable->findById(@$val["userId"]);

                if (!empty($val['email'])) {

                    if (filter_var($val['email'], FILTER_VALIDATE_EMAIL) == false) {
                        $valid = false;
                        $errors[] = 'Invalid email address';
                    } else if (strlen($val['email']) > 300) {
                        $valid = false;
                        $errors[] = 'Email should be less than 30 characters';
                    } else { //if the email is not blank and valid:
                        //convert the email to lowercase
                        $val['email'] = htmlspecialchars(strtolower(trim($val['email'])));

                        // update email
                        $userUpdate["email"] = $val['email'];

                    }
                }

                $val['newpass'] = trim($val['newpass']);
                if (!empty($val['newpass']) && !empty($val['oldpass'])) {

                    if (isset($toUpdate)) {
                        if (password_verify($val['oldpass'], $toUpdate->getPassword())) {
                            if (strlen($val['newpass']) < 8) {
                                $valid = false;
                                $errors[] = 'new Password too short';
                            } else if ($val['newpass'] === $val['oldpass']) {
                                $valid = false;
                                $errors[] = 'new and old Password can\'t be the same';
                            } else {
                                $userUpdate["password"] = password_hash($val['newpass'], PASSWORD_DEFAULT);

                                $ossn_salt = ossn_generateSalt();
                                $ossn_password = ossn_generate_password($val["newpass"], $ossn_salt);
                                $ossn_fields["password"] = $ossn_password;
                                $ossn_fields["salt"] = $ossn_salt;

                                $np_password = md5($val["newpass"]);
                                $np_fields["password"] = $np_password;
                            }
                        } else {
                            $valid = false;
                            $errors[] = 'invalid old Password';
                        }
                    }

                }

                $val['name_first'] = trim($val['name_first']);
                if (!empty($val['name_first'])) {
                    if (strlen($val['name_first']) < 3) {
                        $valid = false;
                        $errors[] = 'First Name too short';
                    } else {
                        $userUpdate["name"] = htmlspecialchars($val['name_first']);
                    }
                }

                $val['name_last'] = trim($val['name_last']);
                if (!empty($val['name_last'])) {
                    if (strlen($val['name_last']) < 3) {
                        $valid = false;
                        $errors[] = 'Last name too short';
                    } else {
                        $userUpdate["name_last"] = htmlspecialchars($val['name_last']);
                    }
                }

                $val['university'] = trim($val['university']);
                if (!empty($val['university'])) {
                    if (strlen($val['university']) < 4) {
                        $valid = false;
                        $errors[] = 'University name too short';
                    } else {

                        $userUpdate["university"] = htmlspecialchars($val['university']);
                    }
                }

                $val['grad_year'] = trim($val['grad_year']);
                if (!empty($val['grad_year'])) {
                    if (strlen($val['grad_year']) < 5) {
                        $valid = false;
                        $errors[] = 'Invalid grad year';
                    } else {
                        $userUpdate["grad_date"] = htmlspecialchars($val['grad_year']);
                    }
                }

                $val['birthdate'] = trim($val['birthdate']);
                if (!empty($val['birthdate'])) {
                    if (strlen($val['birthdate']) < 5) {
                        $valid = false;
                        $errors[] = 'Invalid birth date';
                    } else {
                        $userUpdate["date_birth"] = htmlspecialchars($val['birthdate']);
                    }
                }

                $val['gender'] = trim($val['gender']);
                if (!empty($val['gender'])) {
                    if (strlen($val['gender']) < 4) {
                        $valid = false;
                        $errors[] = 'Invalid gender';
                    } else {
                        $userUpdate["gender"] = ($val['gender'] === "male") ? "male" : "female";
                    }

                }

                if ($authentication->getUser()->isAdmin()) {
                    if (!empty($val["role"])) {
                        $userUpdate["role"] = ($val["role"] == 1) ? 1 : 0;
                    }
                }

                if ($valid and !empty($toUpdate)) {
                    $userUpdate["id"] = $val["userId"];

                    if ($savedUser = $usersTable->save($userUpdate)) {
                        $msg = "success";

                        //update on other platforms
                        // update on social platform
                        $ossn_fields["username"] = explode(" ", $savedUser->getName())[0];
                        $ossn_fields["email"] = $savedUser->getEmail();
                        $ossn_fields["first_name"] = $savedUser->getFirstName();
                        $ossn_fields["last_name"] = $savedUser->getLastName();

                        // update on newsportal
                        $np_fields["fullname"] = $savedUser->getFirstName() . " " . $savedUser->getLastName();
                        $np_fields["username"] = explode(" ", $savedUser->getName())[0];
                        $np_fields["email"] = $savedUser->getEmail();

                        /*
                         * update on newsportal
                         */
                        $np_pdo = create_np_pdo();
                        if ($np_pdo) {
                            $np_users_table = new \Ninja\DatabaseTable($np_pdo, 'users', 'usid', 'User');
                            $sql = "SELECT * FROM " . $np_users_table->getTableName() . " WHERE email=?";
                            $np_res = $np_users_table->customQuery($sql, $toUpdate->getEmail());
                            $np_user = $np_res[0];
                            if (!empty($np_user->{"usid"})) {
                                $np_fields["usid"] = $np_user->{"usid"};
                                $np_users_table->save($np_fields);
                            }else{
                                $errors[] = 'Update failed on newsportal';
                            }
                        }else{
                            $errors[] = 'Update failed on newsportal';
                        }

                        /*
                         * update on social community
                         */
                        $ossn_pdo = create_ossn_pdo();
                        if ($ossn_pdo) {
                            $ossn_users_table = new \Ninja\DatabaseTable($ossn_pdo, 'ossn_users', 'guid', 'User');
                            $sql = "SELECT * FROM " . $ossn_users_table->getTableName() . " WHERE email=?";
                            $ossn_res = $ossn_users_table->customQuery($sql, $toUpdate->getEmail());
                            $ossn_user = $ossn_res[0];
                            if (!empty($ossn_user->{"guid"})) {
                                $ossn_fields["guid"] = $ossn_user->{"guid"};
                                $ossn_users_table->save($ossn_fields);
                            }else{
                                $errors[] = 'Update failed on social community';
                            }
                        }else{
                            $errors[] = 'Update failed on social community';
                        }
                    }
                }

            }
            $output["msg"] = $msg;
            $output["errors"] = $errors;
            $output = json_encode($output);
            header('Content-Type: application/json');
            echo $output;
            die();
            break;
    }
}
