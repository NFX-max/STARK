<?php

if(isset($_POST['btn_mostrar'])){
    $livro = $_POST['livro'];
    $edit = $_POST['edit'];
    $ano = $_POST['ano'];
    $aut = $_POST['aut'];
    $qtd = $_POST['qtd'];
    $valor = $_POST['valor'];
    $resu = $_POST['resu'];

    if($livro == ''){
        echo 'Preencher campo NOME DO LIVRO.';
    }
    else if ($edit == ''){
        echo 'Preencher campo EDITORA.';
    }
     else if ($ano == ''){
        echo 'Preencher campo ANO.';
    }
     else if ($aut == ''){
        echo 'Preencher campo AUTORES.';
    }
     else if ($qtd == ''){
        echo 'Preencher campo Qtd de PAGINAS.';
    }
     else if ($valor == ''){
        echo 'Preencher campo VALOR DO LIVRO.';
    }
     else if ($resu == ''){
        echo 'Preencher campo RESUMO.';
    }
    else {
        echo "NOME DO LIVRO: $livro |  ANO: $ano <br> 
        EDITORA: $edit | Qtd de PAGINAS: $qtd <br>
        AUTORES: $aut <br>
        VALOR DO LIVRO: $valor <br>
        RESUMO: $resu";
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
    
    <form action="ex3_formalario.php" method="post">

        <label for="">Nome do livro:</label>
        <input type="text" name="livro" value="<?= isset($livro) ? $livro : '' ?>">

        <label for="">Editora:</label>
        <input type="text" name="edit" value="<?= isset($edit) ? $edit : '' ?>">

        <label for="">Ano:</label>
        <input type="text" name="ano" value="<?= isset($ano) ? $ano : '' ?>">

        <label for="">Autores:</label>
        <input type="text" name="aut" value="<?= isset($aut) ? $aut : '' ?>">

        <label for=""> Qtd de páginas:</label>
        <input type="text" name="qtd" value="<?= isset($qtd) ? $qtd : '' ?>">

        <label for="">Valor do livro:</label>
        <input type="text" name="valor" value="<?= isset($valor) ? $valor : '' ?>">

        <label for="">Resumo:</label>
        <input type="text" name="resu" value="<?= isset($resu) ? $resu : '' ?>">


        <button name="btn_mostrar">Mostrar</button>



    </form>

</body>
</html>