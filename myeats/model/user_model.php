<?php

    require_once "../util/database.php";

    class UserModel{

        public function create($name, $address, $email, $password){
            $db = new Database();
            $con = $db->connect(); //-> faz com que o connect seja um objeto
            $sql = "insert into user(name, email, address, password) values (:name, :email, :password,  :address)";
            $stmt = $con -> prepare($sql);
            $passwordcripto = sha-1($password);

            $result = $stmt -> execute(["name" => $name, "email" => $email, "password" => $password, "address" => $address]);

        }
        public function delete(){
            echo "delete";
        }
        public function update(){
            echo "update";
        }
        public function findall(){
            echo "find all";
        }




    }





?>