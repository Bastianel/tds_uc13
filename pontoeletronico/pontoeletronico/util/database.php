<?php

    class Database{
        private $user = 'root';
        private $password = '';
        private $server_ip = 'localhost';
        private $database_name = 'ponto_eletronico';

        public function connect(){
            $con = new PDO("mysql:host=" . $this->server_ip . ";dbname=" . $this->database_name, $this->user, $this->password); 
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        }
        public function disconnect(){
        }
    }

    $db = new Database();

    $db->connect();

?>