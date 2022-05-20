<?php
    require_once "../model/user_model.php";

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $conf_senha = $_POST["conf_senha"];

    $userModel = new UserModel();// criar objeto    
    $userModel -> create($nome, $endereco, $email, $senha);// chamar função

?>