<?php

if (isset($_POST['btn_mostrar'])) {
    $empresa = trim($_POST['empresa']);
    $site = trim($_POST['site']);
    $face = trim($_POST['face']);
    $insta = trim($_POST['insta']);
    $desc = trim($_POST['desc']);

    if ($empresa == '') {
        echo 'Preencher o campo NOME DA EMPRESA!!';
    } else if ($site == '') {
        echo 'Preencher o campo SITE!!';
    } else if ($face == '') {
        echo 'Preencher o campo FACEBOOK!!';
    } else if ($insta == '') {
        echo 'Preencher o campo INSTAGRAM!!';
    } else if ($desc == '') {
        echo 'Preencher o campo DESCRIÇÃO!!';
    }
    else{
        echo "$empresa <br> $site <br> $face <br> $insta <br> $desc ";
    }
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

    <form action="ex2_formulario.php" method="post">


        <label for="">Nome da empresa</label>
        <input type="text" name="empresa" value="<?= isset($empresa) ? $empresa : '' ?>">

        <label for="">Site</label>
        <input type="text" name="site" value="<?= isset($site) ? $site : '' ?>">


        <Label>Facebook</Label>
        <input type="text" name="face" value="<?= isset($face) ? $face : '' ?>">

        <label>Instagram</label>
        <input type="text" name="insta" value="<?= isset($insta) ? $insta : '' ?>">


        <label for=""> Descrição</label>
        <input type="text" name="desc" value="<?= isset($desc) ? $desc : '' ?>">


        <button name="btn_mostrar">Mostrar</button>


    </form>
</body>

</html>