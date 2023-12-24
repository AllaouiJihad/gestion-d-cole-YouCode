<?php

    include '../core/database.php';
class Role{
    private $id;
    private $role;

    public function addRole($role){
        $sql = "INSERT INTO `role`(`role`) VALUES ('$role')";
        $result = Database::connexion()->getPdo()->query($sql);
        if ($result) {
            echo "inserted successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . Database::connexion()->getPdo()->errorInfo()[2];
        }
    }
}