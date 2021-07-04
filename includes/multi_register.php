<?php
//Social community registration
/**
 * Create OSSN PDO
 * 
 * @return pdo objcet
 */
function create_ossn_pdo()
{
    
    $Ossn = new \stdClass();
    $config_dir = __DIR__.'/../community/configurations';
    if(file_exists($config_dir.'/LOCAL.DEV')) // load dev config
    {
        require_once $config_dir."/ossn.config.db.dev.php";
    }else{
        require_once $config_dir."/ossn.config.db.php";
    }

    $host = $Ossn->host;
    $dbname = $Ossn->database;
    $user = $Ossn->user;
    $password = $Ossn->password;
    
    try{
        $ossn_pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);
        $ossn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
        $pdo_error = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();

        return false;
    }
    return $ossn_pdo;
}

/**
 * Generate salt.
 *
 * @return string
 */
function ossn_generateSalt() {
    return substr(uniqid(), 5);
}

/**
 * Generate password.
 *
 * @return string
 */
function ossn_generate_password($password = '', $salt = '') {
    $algo = 'md5';
    switch($algo) {
            case 'bcrypt':
                    return password_hash($password . $salt, PASSWORD_BCRYPT);
                    break;
            case 'argon2i':
                    return password_hash($password . $salt, PASSWORD_ARGON2I);
                    break;
    }
    //default is always md5 no matter what algo used (then above)
    return md5($password . $salt);
}

//Newsportal registration
/**
 * Create News portal PDO
 * 
 * @return pdo objcet
 */
function create_np_pdo()
{
    $config_dir = __DIR__.'/../newsportal/admin';
    if(file_exists($config_dir.'/LOCAL.DEV')) // load dev config
    {
        require_once $config_dir."/config.dev.php";
    }else{
        require_once $config_dir."/config.php";
    }

    $host = $server;
    $dbname = $database;
    $user = $user;
    $password = $password;
    
    try{
        $np_pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);
        $np_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
        $pdo_error = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();

        return false;
    }
    return $np_pdo;
}

function np_get_keys()
{
    $tipser = 'JvKnrQWPsThuJteNQAuH';
    $keys = sha1(uniqid($tipser.mt_rand(),true));
    $keys = substr($keys,0,35);
    return $keys;
}

function np_get_ipos()
{
    $ipse = $_SERVER['REMOTE_ADDR'];
    return $ipse; 
}