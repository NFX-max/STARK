<?php

$cal1 = '';

if (isset($_POST['btn_calcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    if ($n1 == '') {
        echo 'Preencher campo DIGITE O PRIMEIRO VALOR!';
    } else if ($n2 == '') {
        echo 'Preencher o campo DIGITE O SEGUNDO VALOR!';
    } else if ($n3 == '') {
        echo 'Preencher o campo DIGITE O TERCEIRO VALOR!';
    } else if (!is_numeric($n1) || !is_numeric($n2) || !is_numeric($n3)) {
        echo 'Preencher os campos com números!';
    } else if ($n2 == 0) {
        echo 'Não é possível dividir por zero!';
    } else {
        $cal1 = ($n1 + $n3) / $n2;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO CALCULO EX1</title>
</head>

<body>

    <form action="ex1_calculo.php" method="post">

        <label>Digite o primeiro valor:</label>
        <input type="text" name="n1" value="<?= isset($n1) ? $n1 : '' ?>">

        <label>Digite o segundo valor:</label>
        <input type="text" name="n2" value="<?= isset($n2) ? $n2 : '' ?>">

        <label>Digite o terceiro valor:</label>
        <input type="text" name="n3" value="<?= isset($n3) ? $n3 : '' ?>">

        <button name="btn_calcular">Calcular</button>

        <span>Resultado</span>
        <input disabled value="<?= $cal1 ?>">

    </form>

</body>

</html>