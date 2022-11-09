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


        //delvolvemos una respuesta
        header('Content-Type: application/json');
        if(isset($datosArray["result"]["error_id"])){
            $responseCode = $dataArray["result"]["error_id"];
            http_response_code($responseCode);
        }else{
            http_response_code(200);   
        }
        echo json_encode($dataArray);        
        
    } else {
        echo "No";
    }

?>