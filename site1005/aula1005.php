<?php
    $dados[]=array("nome" => "Maria", "data_nasc" => "10/10/1985", "salario"=> 2500, "cod_cargo" => 3);
    $dados[]=array("nome"=>"Joao", "data_nasc" => "1/1/1983", "salario"=>1500, "cod_cargo"=>1);
    $dados[]=array("nome"=>"Pedro", "data_nasc" => "15/11/1984", "salario"=>4500, "cod_cargo"=>4);
    $dados[]=array("nome"=>"Carla", "data_nasc" => "25/03/1994", "salario"=>1500, "cod_cargo"=>1);

    echo"<pre>";
    //print_r($dados);
    echo"</pres>";

    for($i = 0; $i < count($dados); $i++){
        echo "-----------------------";
        echo "<br>";
        echo "Nome:". $dados[$i]["nome"];
        echo "<br>";
        echo "Data de Nascimento:". $dados[$i]["data_nasc"];
        echo "<br>";
        echo "Salario:". $dados[$i]["salario"];
        echo "<br>";
        echo "Cargo:". $dados[$i]["cod_cargo"];
    }
    ?>
    