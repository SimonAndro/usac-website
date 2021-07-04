<?php
/* news portal */
require_once ('salt.php');
require_once ('classes/securesession.class.php');
function sso_isloggedIn(){

}

function sso_loggin($ah)
{
    $ss = new SecSession();
    $ss->check_browser = true;
    $ss->check_ip_blocks = 2;
    $ss->secure_word = $salt;
    $ss->regenerate_id = true;
    $ss->Open();
    $_SESSION['INC_USER_ID'] = $ah->fields['usid'];
    $_SESSION['INC_USER_NAME'] = $ah->fields['username'];
    $_SESSION['INC_USER_THUMB'] = $ah->fields['thumbs'];
    $_SESSION['INC_USER_PRIV'] = $ah->fields['privilege'];
    $_SESSION['loggedin'] = true;
    $incsess = md5(uniqid(rand(),TRUE));
    $_SESSION['inecsess'] = $incsess;
    session_write_close();
    $incuser = $ah->fields['usid'];
    $ah->MoveNext();
}

function sso_logout()
{
    
}
