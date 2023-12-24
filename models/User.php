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

        public function getAllapprenants(){
            $sql = "select * from utilisateur where id_role = 3";
            $row= Database::connexion()->getPdo()->query($sql)->fetch(PDO::FETCH_OBJ);
            return $row;
        }
        public function signup($lastname, $firstname, $email, $phone, $CIN, $birthdate, $password) {            
            $sql = "INSERT INTO utilisateur (lastname, firstname, email, phone, CIN, birthdate, password, id_role) 
                    VALUES ('$lastname','$firstname', '$email', '$phone','$CIN', '$birthdate', '$password', 3)";

            $result = Database::connexion()->getPdo()->query($sql);

            if ($result) {
                echo "Record inserted successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . Database::connexion()->getPdo()->errorInfo()[2];
            }
        }
    

        // public function getAllapprenants(){
        //     return $this->connexion()->query('select * from utilisateur where id_role = 3')->fetchAll(PDO::FETCH_OBJ);
        // }
        // public function getApprenant($id){
        //     return $this->connexion()->query('select * from utilisateur where id = '.$id);
        // }
        // public function signup($lastname,$firstname,$email,$phone,$CIN,$birthdate,$password){
        //     $sql = "INSERT INTO `utilisateur`(`lastname`, `firstname`, `email`, `phone`, `CIN`, `birthdate`, `password`, `id_role`) VALUES ('$lastname','$firstname','$email','$phone','$CIN','$birthdate','$password',3)";
        //     return $this->connexion()->prepare($sql)->execute();
        // }
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