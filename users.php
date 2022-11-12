<?php

    define('APP_PATH', dirname(__FILE__));
    
    require_once 'utils/classes/responses.class.php';
    require_once 'utils/classes/users.class.php';

    $_responses = new responses;
    $_users = new users;

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "getting data";

        if(isset($_GET['page'])){
            $page = $_GET['page'];
            $listUsers = $_users->listUsers($page);
            header('Content-Type: application/json');
            echo json_encode($listUsers);
            http_response_code(200);
        } else if (isset($_GET['id'])){
            $userId = $_GET['id'];
            $userData = $_users->obtainUser($userId);
            header('Content-Type: application/json');
            echo json_encode($userData);
            http_response_code(200);
        }
        
    } else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Recibe los datos enviados
        $postbody = file_get_contents("php://input");
        //Se envía al controlador
        $resp = $_users->post($postbody);
        //Se devuelve la respuesta
        header('Content-Type: application/json');//Indica el tipo de respuesta
        if(isset($resp["result"]["error_id"])){ //Verifica si existe en dataArray un subArray llamado result y hay un error id
            $responseCode = $resp["result"]["error_id"]; //Crea la variable con el error
            http_response_code($responseCode); 
        }else{
            http_response_code(200);   //Retorna un status 200 indicando que fué exitoso
        }

        echo json_encode($resp);
        
    } else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        
        $postbody = file_get_contents("php://input");

        $dataArray = $_users->put($postbody);

        header('Content-Type: application/json');//Indica el tipo de respuesta
        if(isset($dataArray["result"]["error_id"])){ //Verifica si existe en dataArray un subArray llamado result y hay un error id
            $responseCode = $dataArray["result"]["error_id"]; //Crea la variable con el error
            http_response_code($responseCode); 
        }else{
            http_response_code(200);   //Retorna un status 200 indicando que fué exitoso
        }

        echo json_encode($dataArray);
        
        
    } else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        
        $postbody = file_get_contents("php://input");

        $dataArray = $_users->delete($postbody);
        
        header('Content-Type: application/json');//Indica el tipo de respuesta
        if(isset($dataArray["result"]["error_id"])){ //Verifica si existe en dataArray un subArray llamado result y hay un error id
            $responseCode = $dataArray["result"]["error_id"]; //Crea la variable con el error
            http_response_code($responseCode); 
        }else{
            http_response_code(200);   //Retorna un status 200 indicando que fué exitoso
        }
        echo json_encode($dataArray);
    } else {
        header('Content-Type: application/json');
        $dataArray = $_responses->error_405();
        echo json_encode($dataArray);
    }
?>