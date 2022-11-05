<?php

    define('APP_PATH', dirname(__FILE__));

    require_once 'utils/classes/auth.class.php';
    require_once 'utils/classes/responses.class.php';

    $_auth = new auth; // se pone guion bajo para instanciar una clase y el new será la instancia de la clase
    $_responses = new responses;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //Recibe los datos
        $postbody = file_get_contents("php://input");

        //Se envía los datos al controlador
        $dataArray = $_auth->login($postbody);
        
        print_r($postbody);
    } else {
        echo "No";
    }

?>