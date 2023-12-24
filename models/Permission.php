<?php

    include '../core/database.php';

    class Permission{
        public function getPermissions($id_role){
            $sql= "SELECT `privilege` FROM `privilege` JOIN role_privilege ON privilege.id_pri = role_privilege.id_privilege JOIN role ON role_privilege.id_role = role.id_role WHERE role.id_role = '$id_role'";
            $row= Database::connexion()->getPdo()->query($sql)->fetchAll(PDO::FETCH_COLUMN);
            return $row;
        }
    }