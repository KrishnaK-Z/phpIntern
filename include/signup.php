<?php
include_once('connect.php');
$obj = new dbconnect();
if(isset($_POST['logon']))
{
    $reg_fname = $_POST['fname'];
    $reg_lname = $_POST['lname'];
    $reg_gender = $_POST['gender'];
    $reg_logmail = $_POST['logmail'];
    $reg_status = $_POST['status'];
    $reg_authpass = $_POST['authpass'];
    $reg_file = $_FILES['file'];
    $reg_confpass = $_POST['confpass'];

    $file_temp_name = $reg_file['tmp_name'];
    $file_name = $reg_file['name'];
    $ext =  strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $check_exsist = $obj->checkAvail($reg_logmail);

    if( empty($reg_fname) || empty($reg_lname) || empty($reg_logmail) || empty($reg_authpass))
    {
        header("location: ../register.php?field=empty");
        exit();
    }
    else if($reg_authpass != $reg_confpass)
    {
        header("location: ../register.php?passconfirm=error");
        exit();
    }

    else
    {
        if($check_exsist)
        {
            echo "<script>alert('Email Already Exist')</script>";  
            header("location: ../register.php");
            exit();
        }
        else
        {
            $obj->signup($reg_fname, $reg_lname, $file_temp_name, $reg_gender, $reg_logmail, $reg_status, $reg_authpass, $ext);
            echo "<script>alert('Registration Successful')</script>"; 
            exit();
        }

    }

}

if(isset($_POST['user_log']))
{

    $reg_logmail = $_POST['logmail'];
    $reg_authpass = $_POST['authpass'];
    
    
    $obj->login($reg_logmail, $reg_authpass);
}

?>