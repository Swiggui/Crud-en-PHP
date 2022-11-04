<?php

    require_once 'utils/classes/auth.class.php';
    require_once 'utils/classes/responses.class.php';

    $_auth = new auth; // se pone guion bajo para instanciar una clase y el new será la instancia de la clase
    $_responses = new responses;

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $postbody = file_get_contents("php://input");
        $dataArray = $_auth->login($postbody);
        print_r(json_encode($dataArray));
    } else {
        echo "No";
    }

?>