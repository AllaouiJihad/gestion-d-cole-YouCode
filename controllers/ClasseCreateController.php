<?php
include '../models/Classe.php';
if(isset($_POST['create'])){


    $ClassModel = new Classe();
    $name = $_POST['name'];
    $promotion = $_POST['promotion'];
    $level = $_POST['level'];    

    
    try{
        
    $ClassModel->addClasse($level,$promotion,$name);
        $_SESSION['message'] = 'classe created successfully';
        // header('Location: /crud_oop');
    }catch(PDOException $e){
        $_SESSION['message'] = 'Error creating classe';
        // header('Location: /crud_oop/product/add');
    }
    

}