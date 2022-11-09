<?php 

    require_once (APP_PATH . "/utils/connection/connection.php");
    require_once ('responses.class.php');

    class auth extends connection{

        public function login($json){

            $_responses = new responses;
            $data = json_decode($json, true);
            if(!isset($data['user']) || !isset($data['password'])){
                return $_responses->error_400();
            } else {
                $user = $data['user'];
                $password = $data['password'];
                $data = $this->getUserData($user);
                if($data){
                    //Si existe el usuario
                    $password = parent::crypto($password);
                    if($password == $data[0]["contrasena"]){
                        //Crea el token
                        $verify = $this->insertToken($data[0]["id_usuario"]);
                        if($verify){
                            //Si se guardó el token

                            $result = $_responses->response;
                            $result['result'] = array(
                                "token" => $verify
                            );
                            return $result;
                        } else{
                            //Si no se guardó el token
                            return $_responses->error_500("Error interno, no se ha podido guardar");
                        }
                    } else {
                        return $_responses->error_200("La contraseña es inválida, intentelo de nuevo");
                    }
                } else {
                    //Si no existe
                    return $_responses->error_200("No existe el usuario $user");
                }
            }
        }
        private function getUserData($user){
            $query = "SELECT id_usuario, contrasena FROM tb_usuarios WHERE usuario = '$user';";
            
            $data = parent::obtainData($query);
            if(isset($data[0]["id_usuario"])){
                return $data;
            } else {
                return 0;
            }
        }

        private function insertToken($userID){
            $value = true;
            //Devuelve un string en hexadecimal
            //Genera una cadena de bytes semi-aleatorias
            $token = bin2hex(openssl_random_pseudo_bytes(16, $value));
            $state = "Active";
            $date = date("Y-m-d H:i");
            $query = "INSERT INTO tb_token_usuarios (id_usuario, token, estado, fecha) VALUES ('$userID', '$token', '$state', '$date');";
            $verify = parent::nonQuery($query);
            if($verify){
                return $token;
            } else {
                return 0;
            }
        }

    }
?>