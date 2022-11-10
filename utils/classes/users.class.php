<?php

    require_once (APP_PATH . "/utils/connection/connection.php");
    require_once ('responses.class.php');

    class users extends connection {

        private $table = "tb_usuarios";
        private $userID = "";
        private $user = "";
        private $password = "";
        private $name = "";
        private $lastname = "";
        private $email = "";
        private $phone = "";
        
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

        public function post($json){
            $_responses = new responses;
            $data = json_decode( $json, true);
            if(!isset($data['user']) ||  !isset($data['password']) || !isset($data['email']) || !isset($data['name']) || !isset($data['lastname']) || !isset($data['role'])){
                return $_responses->error_400();
            } else {
                $this->name = $data['name'];
                $this->lastname = $data['lastname'];
                $this->user = $data['user'];
                $this->password = parent::crypto($data['password']);
                $this->role = $data['role'];
                $this->email = $data['email'];
                if(isset($data['phone'])){
                    $this->phone = $data['phone'];
                }
                try {
                    $resp = $this->insertUser();
                    $answer = $_responses->response;
                    $answer["result"] = array(
                        "userId" => $resp
                    );
                    return $answer;
                } catch (mysqli_sql_exception $e) {
                    return $_responses->error_500();
                }
                
            }
        }

        private function insertUser(){
            $query = "INSERT INTO " . $this->table . "(nombre, apellido, usuario, contrasena, rol, correo, nro_cel) 
            VALUES 
            ('" . $this->name . "', '" . $this->lastname . "', '" . $this->user . "', '" . $this->password . "', '" . $this->role . "', '" . $this->email . "', '" . $this->phone . "');";

            $resp = parent::nonQueryId($query);
            if($resp){
                return $resp;
            } else {
                return 0;
            }
        }
    }
?>