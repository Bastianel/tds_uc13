<?php
    class UserModel {
            public function create($nome, $endereco, $email, $senha){
                echo "create: ". $nome . "<br>". $endereco."<br>" .$email."<br>" .$senha."<br>" ;
            } 
            public function delete(){
                echo "delete";
            } 
            public function update(){
                echo "update";
            }
            public function findall(){
                echo "findall";
            }
    }
?>