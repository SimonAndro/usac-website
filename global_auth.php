<?php
try {
	include __DIR__ . '/includes/autoload.php';
	include __DIR__ . '/includes/utils.php';
    include __DIR__ . '/includes/multi_register.php';
    include __DIR__ . '/includes/DatabaseConnection.php';
    include __DIR__ . '/includes/User.php';

    $usersTable = new \Ninja\DatabaseTable($pdo, 'students', 'id', 'User');
    $core_config_table = new \Ninja\DatabaseTable($pdo , 'core_config', 'id', 'User');
    $authentication = new \Ninja\Authentication($usersTable, 'email', 'password');

}
catch (PDOException $e) {

	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();

    echo $title."->".$output;
    die();
}
?>