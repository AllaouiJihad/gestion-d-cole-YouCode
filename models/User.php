<?php

    include '../core/database.php';
    class User{
        private $id;
        private $lastname;
        private $firstname;
        private $email;
        private $phone;
        private $address;
        private $cin;
        private $birthdate;
        private $pwd;



         // Getter and Setter for $lastname
    public function getLastName() {
        return $this->lastname;
    }

    public function setLastName($lastname) {
        $this->lastname = $lastname;
    }

    // Getter and Setter for $firstname
    public function getFirstName() {
        return $this->firstname;
    }

    public function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }
    // Getter and Setter for $phone
    public function getPhone() {
        return $this->phone;
    }
    

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    // Getter and Setter for $cin
    public function getCin() {
        return $this->cin;
    }

    public function setCin($cin) {
        $this->cin = $cin;
    }

    // Getter and Setter for $birthdate
    public function getBirthdate() {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    // Getter and Setter for $pwd
    public function getPassword() {
        return $this->pwd;
    }

    public function setPassword($password) {
        $this->pwd = $password;
    }


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