<?php

    include '../core/database.php';

    class Classe extends Database{
        private $level;
        private $promotion;
        private $name;
        
        public function addClasse($level,$promotion,$name){
           $sql ="INSERT INTO `classe`(`level`, `classename`, `promotion`, `formateur`) VALUES ('$level','$promotion','$name','')";
           $result = Database::connexion()->getPdo()->query($sql);

            if ($result) {
                echo "inserted successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . Database::connexion()->getPdo()->errorInfo()[2];
            }
        }


        public function UpdateClasse($level,$promotion,$name,$id){
            $sql ="UPDATE `classe` SET `level`= :level,`classename`= :name,`promotion`=:promotion WHERE id_classe = :id";
            $stm= Database::connexion()->getPdo()->prepare($sql);
            $stm->bindParam(':level', $level);
            $stm->bindParam(':name', $name);
            $stm->bindParam(':promotion', $promotion);
            $stm->bindParam(':id', $id);


            $result = $stm->execute();

            if ($result) {
                echo "updated successfully";
            } 
            else {
                echo "Error: " . $stm . "<br>" . Database::connexion()->getPdo()->errorInfo()[2];            
            }

        }

        public function deleteClasse($id) {
            $sql = "DELETE FROM `utilisateur` WHERE `id_classe` = :id";
        
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

    }