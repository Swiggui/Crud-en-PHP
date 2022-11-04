<?php
    

    require_once "utils/connection/connection.php";

    $connection = new connection;

    $query = "insert into tb_usuarios (contraseña) value('hola')";

    print_r($connection->nonQueryId($query));
?>