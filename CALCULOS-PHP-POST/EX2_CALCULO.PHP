<?php

$cal = '';

if (isset($_POST['btn_calcular'])) {
    $n1 = trim($_POST['n1']);
    $n2 = trim($_POST['n2']);
    $n3 = trim($_POST['n3']);
    $n4 = trim($_POST['n4']);
    $n5 = trim($_POST['n5']);
    $n6 = trim($_POST['n6']);
    $n7 = trim($_POST['n7']);

    if ($n1 == '') {
        echo 'Preencher o PRIMEIRO valor!';
    } else if ($n2 == '') {
        echo 'Preencher o SEGUNDO valor!';
    } else if ($n3 == '') {
        echo 'Preencher o TERCEIRO valor!';
    } else if ($n4 == '') {
        echo 'Preencher o QUARTO valor!';
    } else if ($n5 == '') {
        echo 'Preencher o QUINTO valor!';
    } else if ($n6 == '') {
        echo 'Preencher o SEXTO valor!';
    } else if ($n7 == '') {
        echo 'Preencher o SETIMO valor!';
    } else if (!is_numeric($n1) || !is_numeric($n2) || !is_numeric($n3) || !is_numeric($n4) || !is_numeric($n5) || !is_numeric($n6) || !is_numeric($n7)) {
        echo 'PREENCHER OS CAMPOS COM NÚMEROS!!';
    } else {

        $cal = $n1 + $n2 + $n3 + ($n4 * $n5 * $n6 * $n7);
    }
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO 2</title>
</head>

<body>

    <form action="ex2_calculo.php" method="post">

        <label>Digite o primeiro valor:</label>
        <input type="text" name="n1" value="<?= isset($n1) ? $n1 : '' ?>"><br>

        <label>Digite o segundo valor:</label>
        <input type="text" name="n2" value="<?= isset($n2) ? $n2 : '' ?>"><br>

        <label>Digite o terceiro valor:</label>
        <input type="text" name="n3" value="<?= isset($n3) ? $n3 : '' ?>"><br>

        <label>Digite o quarto valor:</label>
        <input type="text" name="n4" value="<?= isset($n4) ? $n4 : '' ?>"><br>

        <label>Digite o quinto valor:</label>
        <input type="text" name="n5" value="<?= isset($n5) ? $n5 : '' ?>"><br>

        <label>Digite o sexto valor:</label>
        <input type="text" name="n6" value="<?= isset($n6) ? $n6 : '' ?>"><br>

        <label>Digite o setimo valor:</label>
        <input type="text" name="n7" value="<?= isset($n7) ? $n7 : '' ?>"><br>

        <button name="btn_calcular">Calcular</button> <br><br>

        <span>Resultado</span>
        <input disabled value="<?= $cal ?>">

    </form>

</body>

</html>