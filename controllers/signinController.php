<?php
session_start();
include '../models/Apprenant.php';
if (isset($_POST['create'])) {
    
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
        $objsignin = new Apprenant();
        try{
        $row = $objsignin->signin($email,$pwd);
        $_SESSION['message']="welcome!";
        if ($_SESSION['id_role'] == 2) {
            header('Location: ../views/formateurPage.php');
        }
        elseif ($_SESSION['id_role'] == 1) {
            header('Location: ../views/adminPage.php');
        }
        header('location: ../views/apprenantPage.php');
        }catch(Exception $e){
            $_SESSION['error']=$e->getMessage();
            header('location: ../views/signup.php');
        }
        echo $_SESSION['error'];
        die();
}
    


?>