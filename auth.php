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
        header('Content-Type: application/json');//Indica el tipo de respuesta
        if(isset($datosArray["result"]["error_id"])){ //Verifica si existe en dataArray un subArray llamado result y hay un error id
            $responseCode = $dataArray["result"]["error_id"]; //Crea la variable con el error
            http_response_code($responseCode); 
        }else{
            http_response_code(200);   //Retorna un status 200 indicando que fué exitoso
        }
        
        
    } else {
        header('Content-Type: application/json');
        $dataArray = $_responses->error_405();
        
    }

    echo json_encode($dataArray);//Con json_encode el array se convierte en un string y permite con el echo imprimir el array mientras que print_r es más para depurar
?>