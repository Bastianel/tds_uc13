<?php
    $estados = "parana; rio grande; santa catarina";
    echo $estados;
    echo "<br>";

    $arrayEstados = explode(";", $estados);
    echo "<br>";
    print_r($arrayEstados);
    echo "<br>";
?>