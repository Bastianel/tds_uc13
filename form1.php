<html>
    <body>
    <form name="frm_dados" action="processa-dados-form.php" method="POST">
        Nome:  <input type name="nome"/><br>
        Idade: <input type name="idade"/><br>
        Telefone: <input type name="telefone"/><br>
        Sexo: <input type="radio" name="sexo" id="sexo"> Feminino <input type="radio" name="sexo" id="sexo"> Masculino><br>
        Interesses: <br> <input type="checkbox" nome="interesses" id="">Java <br> <input type="checkbox" nome="sexo" id=""> BDA <br> <input type="checkbox" nome="sexo" id="">
        PHP <br> <input type="checkbox" nome="sexo" id=""> JavaScript <br> <input type="checkbox" nome="sexo" id=""> Html/Css <br>
        <input type="submit" name="btn_enviar" value="EnviarDados"/><br>
        Fotos <input type="file" name="Fotos">
    </form>
    </body>
</html>