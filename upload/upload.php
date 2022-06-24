<?php

$dir = "imagens";
$file = $_FILES["arquivo"];
if(move_uploaded_file($file["tmp_name"], "$dir/".$file["name"])){
    echo "Arquivo enviado com sucesso!";
}
else{
    echo "Erro, o arquivo n&atilde; o pode ser enviado.";
}
?>