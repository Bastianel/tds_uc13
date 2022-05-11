<html>
    <body>
        <h1> Cadastro de usuarios</h1>
         <table border = "1px">
<?php
$dados[] = "maria";
$dados[] = "pedro";
$dados[] = "jose";
$dados[] = "joao";
$dados[] = "ismael";
$dados[] = "lucas";
$dados[] = "igor";
$dados[] = "larissa";
$dados[] = "leonardo";
$dados[] = "gildo";

for($i=0; $i < count($dados); $i++){
    echo "<tr><td>". $dados[$i] . "<tr><td>";
}
?>
</table>
</body>
</html>
