<html>
<body>
     <table border="1">
        <?php
            $entrada = 4;
            for ($i = 0; $i <= 10; $i++) {
                $resultado = $entrada * $i;
                echo "<tr><td>" .$entrada. " X ". $i. "=". $resultado."</td></tr>";
            
            }
        ?>
    </table>
</body>
</html>