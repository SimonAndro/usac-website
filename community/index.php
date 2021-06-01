<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

function dump_to_file($things) //debuging
{ 
  
    if(file_exists("debug!.txt"))
    {
        file_put_contents("debug!.txt",
        date("H:i:s")."->".print_r($things,true)."\n",FILE_APPEND | LOCK_EX);
    }
    
}

define('OSSN_ALLOW_SYSTEM_START', TRUE);
require_once('system/start.php');
//page handler
$handler = input('h');
//page name
$page = input('p');

//check if there is no handler then load index page handler
if (empty($handler)) {
    $handler = 'index';
}
echo ossn_load_page($handler, $page);
