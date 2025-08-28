<?php

if(isset($_POST['btn_verificar'])){
    $name = $_POST['nome'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    echo 'Nome Completo: ' . $name . '<br> Rua: ' . $rua . '<br> Bairro: ' . $bairro . '<br>CEP: ' . $cep;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="ex01.php" method="post">
    <label>Nome completo:</label>
    <input type="text" name="nome"><br>
    <label>Rua:</label>
    <input type="text" name="rua"><br>
    <label>Bairro:</label>
    <input type="text" name="bairro"><br>
    <label>CEP:</label>
    <input type="text" name="cep"><br>

    <button name="btn_verificar">Verificar</button>

    </form>
</body>

</html>