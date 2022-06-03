<?php
    require_once "../controller/user_controller.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Lista de usuarios <h2>

    <table border = 1>
    <tr>
        <td> id </td>
        <td> Nome </td>
        <td> endereço </td>
        <td> Excluir </td>
    </tr>
    <?php
    foreach($dados as $item){
        echo "<tr>";
        echo "<td>". $item['id']."</td>";
        echo "<td>". $item['name']."</td>";
        echo "<td>". $item['email']."</td>";
        echo "<td>". $item['address']."</td>";
        echo "<td><a href='#' onclick=delete(".$item["id"].")> x </a> </td>";
        echo"</tr>";
    }
    ?>
</body>
</html>
