<?php 

    require_once (APP_PATH . "/utils/connection/connection.php");
    require_once ('responses.class.php');

    class auth extends connection{

        public function login($json){

            $_responses = new responses;
            $data = json_decode($json, true);
            if(!isset($data['user']) || !isset($data['password'])){
                echo "nel";
                return $_responses->error_400();
            } else {
                $user = $data['user'];
                $password = $data['password'];
                $data = $this->getUserData($user);
                if($data){
                    //Si existe el usuario
                    echo "\n yes";
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



    }
?>