<?php

    include '../core/database.php';
    class User{
        private $lastname;
        private $firstname;
        private $email;
        private $phone;
        private $address;
        private $cin;
        private $birthdate;
        private $pwd;

        public function getAllApprenants(){
            $sql = "select * from utilisateur where id_role = 3";
            $row= Database::connexion()->getPdo()->query($sql)->fetch(PDO::FETCH_OBJ);
            return $row;
        }


        public function getUser($id){
            $sql = "select * from utilisateur where id_user = '$id";
            $row= Database::connexion()->getPdo()->query($sql)->fetch(PDO::FETCH_OBJ);
            return $row;
        }


        public function getAllFormateur(){
            $sql = "select * from utilisateur where id_role = 2";
            $row= Database::connexion()->getPdo()->query($sql)->fetch(PDO::FETCH_OBJ);
            return $row;
        }


        public function signup($lastname, $firstname, $email, $phone, $CIN, $birthdate, $password) {            
            $sql = "INSERT INTO utilisateur (lastname, firstname, email, phone, CIN, birthdate, password, id_role) 
                    VALUES ('$lastname','$firstname', '$email', '$phone','$CIN', '$birthdate', '$password', 3)";

            $result = Database::connexion()->getPdo()->query($sql);

            if ($result) {
                echo "inserted successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . Database::connexion()->getPdo()->errorInfo()[2];
            }
        }
        


        public function UpdateUser($lastname, $firstname, $email, $phone, $CIN, $birthdate,$password,$id){
            $sql ="UPDATE `utilisateur` SET `lastname`= :lastname,`firstname`= :firstname,`email`= :email,`phone`= :phone,`CIN`= :CIN,`birthdate`= :birthdate,`password`= :password WHERE `id_user`= :id";
            $stm= Database::connexion()->getPdo()->prepare($sql);
            $stm->bindParam(':lastname', $lastname);
            $stm->bindParam(':firstname', $firstname);
            $stm->bindParam(':email', $email);
            $stm->bindParam(':phone', $phone);
            $stm->bindParam(':CIN', $CIN);
            $stm->bindParam(':birthdate', $birthdate);
            $stm->bindParam(':password', $password);
            $stm->bindParam(':id', $id);


            $result = $stm->execute();

            if ($result) {
                echo "Record updated successfully";
            } 
            else {
                echo "Error: " . $stm . "<br>" . Database::connexion()->getPdo()->errorInfo()[2];            
            }

        }


        public function deleteUser($id) {
            $sql = "DELETE FROM `utilisateur` WHERE `id_user` = :id";
        
            $stm = Database::connexion()->getPdo()->prepare($sql);
        
            // Bind the parameter
            $stm->bindParam(':id', $id);
        
            // Execute the statement
            $result = $stm->execute();
        
            if ($result) {
                echo "deleted successfully";
            } else {
                echo "Error: " . $stm . "<br>" . Database::connexion()->getPdo()->errorInfo()[2];            
            }
        }
        
        public function signin($email,$pwd){
            echo "dkhal";
            $sql = "select * from utilisateur where email ='$email'";
            // echo $sql;
            $row= Database::connexion()->getPdo()->query($sql)->fetch(PDO::FETCH_OBJ);
            // echo $row;
            // die();
            if($row){
                if($row->password== $pwd){
                    $_SESSION['id'] = $row->id_user;
                    $_SESSION['firstname'] = $row->firstname;
                    $_SESSION['email'] = $row->email;
                    $_SESSION['id_role']=$row->id_role;
                }else{
                    throw new Exception("password incorrect");
                }
            }else{
                throw new Exception("email introvable");
            }
            
        }
    }
    
    
?>