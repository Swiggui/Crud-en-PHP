<?php 

define('APP_PATH', dirname(__FILE__) . '/../../');
echo APP_PATH;
    require_once (APP_PATH . "utils/connection/connection.php");
    require_once 'responses.class.php';

    class auth extends connection{

        public function login($json){
            $_responses = new responses;
            $data = json_decode($json, true);
            if(isset($data['usuario']) || isset($data['password'])){
                return responses->error_400();
            } else {
                echo "todo nais";
            }
        }

    }
?>