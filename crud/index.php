<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Genérico </title>
</head>
<body>
<div align="center"><h1>CRUD GENÉRICO</h1></div>

<?php

    require ("crud.php");
        $conexao = abrirConexao();

<<<<<<< HEAD



    $deletar = deletar("editora", "id_editora = '40'");
    var_dump($deletar);
=======
        $dados = consultar("editora");

    echo "<pre>";
        print_r($dados);
    echo "</pre>";



>>>>>>> origin/master
?>

</body>
</html>