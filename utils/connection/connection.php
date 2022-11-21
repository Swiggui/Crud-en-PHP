<?php


class connection {
    private $server;
    private $user;
    private $password;
    private $database;
    private $port;
    private $connection;
    function __construct(){
        $datalist = $this->dataConnection();
        foreach ($datalist as $key => $value){
            $this->server = $value['server'];
            $this->user = $value['user'];
            $this->password = $value['password'];
            $this->database = $value['database'];
            $this->port = $value['port'];
        }
        try {
            $this->connection = new mysqli($this->server, $this->user, $this->password, $this->database, $this->port);
        } catch (\Throwable $th) {
            echo "<h1>Error de conexión en la base de datos</h1>";
            die();
        }
        
        
    }
    private function dataConnection(){
        $direction = dirname(__FILE__);
        $jsondata = file_get_contents($direction . "./" ."config");
        return json_decode($jsondata, true);
    }

    //Metodo para convertir caracteres en UTF-8
    private function convertUTF8($array){
        array_walk_recursive($array, function(&$item, $key){
            if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
            }
        });
        return $array;
    }

    public function obtainData($sqlstr){
        
        $results = $this->connection->query($sqlstr);
        
        $resultsArray = array();
        foreach($results as $key){
            $resultsArray[] = $key;
        }
        return $this->convertUTF8($resultsArray);
    }

    public function nonQuery($sqlstr){
        $results = $this->connection->query($sqlstr);
        return $this->connection->affected_rows;


    }

    //Insert
    public function nonQueryId($sqlstr){
        $results = $this->connection->query($sqlstr);
        $rows = $this->connection->affected_rows;
        if ($rows >= 1){
            return $this->connection->insert_id;
        } else {
            return 0;
        }
    }


    //Encriptar
    protected function crypto($str){
        return sha1($str);
    }
}


?>