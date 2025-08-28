<?php

if (isset($_POST['btn_mostrar'])) {
    $nomedoprato = trim($_POST['nomedoprato']);
    $desc = trim($_POST['desc']);
    $preco = trim($_POST['preco']);
    $ing = trim($_POST['ing']);

    if ($nomedoprato == '') {
        echo 'Preencha o campo NOME DO PRATO';
    } else if ($desc == '') {
        echo 'Preencha o campo DESCRIÇÂO';
    } else if ($preco == '') {
        echo 'Preencha o campo PREÇO';
    } else if ($ing == '') {
        echo 'Preenche o campo INGREDIENTES';
    } else {

        echo "$nomedoprato <br> $desc <br> $preco <br> $ing";
    }
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ex1_formulario.php" method="post">

        <label for="">Nome do prato:</label>
        <input type="text" name="nomedoprato" value="<?= isset($nomedoprato) ? $nomedoprato : '' ?>">

        <label for="">Descrição:</label>
        <input type="text" name="desc" value="<?= isset($desc) ? $desc : '' ?>">

        <label for="">Preço:</label>
        <input type="text" name="preco" value="<?= isset($preco) ? $preco : '' ?>">

        <label for="">Ingredientes:</label>
        <input type="text" name="ing" value="<?= isset($ing) ? $ing : '' ?>">

        <button name="btn_mostrar">Mostrar</button>


    </form>

</body>

</html>