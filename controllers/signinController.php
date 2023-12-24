<?php
session_start();
include '../models/User.php';
if (isset($_POST['create'])) {
    
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
        $objsignin = new User();
        try{
        $row = $objsignin->signin($email,$pwd);


        $_SESSION['permissions']=new Permission()->getPermissions($_SESSION['id_role']);
        header('location: ../views/main.php');
        }catch(Exception $e){
            $_SESSION['error']=$e->getMessage();
            header('location: ../views/signup.php');
        }
        echo $_SESSION['error'];
        die();
}
    


