<?php
include_once('connect.php');
$obj = new dbconnect();
if(isset($_POST['user_log']))
{

    $reg_logmail = $_POST['logmail'];
    $reg_authpass = $_POST['authpass'];
    
    $obj->login($reg_logmail, $reg_authpass);
}

?>