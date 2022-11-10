<?php

    require_once (APP_PATH . "/utils/connection/connection.php");
    require_once ('responses.class.php');

    class users extends connection {

        private $table = "tb_usuarios";
        
        public function listUsers($page){
            $start = 0;
            $quantity = 100;
            if($page > 1){
                $start = ($quantity * ($page - 1)) + 1;
                $quantity = $quantity * $page;
            }

            $query = "SELECT id_usuario, usuario, rol, nombre, apellido, correo, nro_cel FROM " . $this->table . " LIMIT $start, $quantity";
            $data = parent::obtainData($query);
            return ($data);
        }

        public function obtainUser($id){
            $query = "SELECT id_usuario, usuario, rol, nombre, apellido, correo, nro_cel FROM " . $this->table . " WHERE id_usuario = $id";
            return parent::obtainData($query);
        }
    }
?>