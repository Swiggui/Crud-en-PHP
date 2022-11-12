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
        private $token = "";
        
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

            if(!isset($data['token'])){
                return $_responses->error_401();
            } else {
                $this->token = $data['token'];
                $arrayToken = $this->searchToken();
                if($arrayToken){

                } else {
                    return $_responses->error_401("El token enviado no es válido o expiró");
                }
            }

            //if(!isset($data['user']) ||  !isset($data['password']) || !isset($data['email']) || !isset($data['name']) || !isset($data['lastname']) || !isset($data['role'])){
            //    return $_responses->error_400();
            //} else {
            //    $this->name = $data['name'];
            //    $this->lastname = $data['lastname'];
            //    $this->user = $data['user'];
            //    $this->password = parent::crypto($data['password']);
            //    $this->role = $data['role'];
            //    $this->email = $data['email'];
            //    if(isset($data['phone'])){
            //        $this->phone = $data['phone'];
            //    }
            //    try {
            //        $resp = $this->insertUser();
            //        $answer = $_responses->response;
            //        $answer["result"] = array(
            //            "userId" => $resp
            //        );
            //        return $answer;
            //    } catch (mysqli_sql_exception $e) {
            //        return $_responses->error_500();
            //    }
            //    
            //}
        }

        public function put($json){
            $_responses = new responses;
            $data = json_decode( $json, true);
            if(!isset($data['userID'])){
                return $_responses->error_400();
            } else {
                $this->userID = $data['userID'];
                if(isset($data['name'])){ $this->name = $data['name']; }
                if(isset($data['lastname'])){ $this->lastname = $data['lastname']; }
                if(isset($data['user'])){ $this->user = $data['user']; }
                if(isset($data['password'])){ $this->password = parent::crypto($data['password']); }
                if(isset($data['role'])){ $this->role = $data['role']; }
                if(isset($data['email'])){ $this->email = $data['email']; }
                if(isset($data['phone'])){ $this->phone = $data['phone']; }
                try {
                    $resp = $this->modifyUser();
                    if($resp){
                        $answer = $_responses->response;
                        $answer["result"] = array(
                            "userId" => $this->userID
                        );
                        return $answer;
                    } else {
                        return $_responses->error_500();
                    }
                } catch (mysqli_sql_exception $e) {
                    return $_responses->error_500();
                }
            }
        }

        public function delete($json){
            $_responses = new responses;
            $data = json_decode($json, true);
            if(!isset($data['userID'])){
                return $_responses->error_400();
            } else {
                $this->userID = $data['userID'];
                $resp = $this->deleteUser();
                if($resp){
                    $response = $_responses->response;
                    $response["result"] = array(
                        "userID" => $this->userID
                    );
                    return $response;
                } else {
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

        
        private function modifyUser(){
            $query = "UPDATE " . $this->table . " SET nombre = '" . $this->name . "', apellido = '" . $this->lastname . "', usuario = '" . $this->user . "', contrasena = '" . $this->password . "', rol = '" . $this->role . "', correo = '" . $this->email . "', nro_cel = '" . $this->phone . "' WHERE id_usuario = '" . $this->userID . "'"; 

            $resp = parent::nonQuery($query);
            if($resp >= 1){
                return $resp;
            } else {
                return 0;
            }
        }

        private function deleteUser(){
            $query = "DELETE FROM " . $this->table . " WHERE id_usuario = '" . $this->userID . "'";
            $resp = parent::nonQuery($query);
            if ($resp >= 1){
                return $resp;
            } else {
                return 0;
            }
        }

        private function searchToken(){
            $query = "SELECT id_token, id_usuario, estado FROM tb_token_usuarios WHERE token = '" . $this->token . "' AND estado = 'Activo'";
            $resp = parent::obtainData($query);
            if($resp){
                return $resp;
            } else {
                return 0;
            }
        }

        private function updateToken($tokenID){
            $data = date("Y:m:d m:i");
            $query = "UPDATE tb_token_usuarios SET fecha = '$date' WHERE id_token = '$tokenID'";
            $resp = parent::nonQuery($query);
            if($resp >= 1){
                return $resp;
            } else {
                return 0;
            }
        }
    }
?>