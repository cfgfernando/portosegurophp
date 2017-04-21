<!DOCTYPE html>
<?php
require ("config/config.php");


    if(isset($_POST["enviado"])){
        $txt_editora = $_POST["txt_editora"];

        $sql = "INSERT INTO editora (editora) VALUES ('$txt_editora')";
        $qry = mysqli_query($conexao, $sql);
        if(isset($qry)){
            header("location: lista_editora.php");
        }else{
            echo "Erro";
        }
    }
?>



<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
</head>
<body>
<center><a href="/index.html"><img src="/portoseguro.jpg" alt="Projeto Porto Seguro PHP"/></a></center>
    <h1 align="center">Sistema de Cadastro de Livros</h1>
    <hr>
    <br>
<form method="post">
    <table>
        <tr>
            <td>Editora</td>
            <td><input type="text" name="txt_editora"></td>
            <input type="hidden" name="enviado" value="ok">
            <td><input type="submit" value="Cadastrar"></td>
        </tr>
    </table>
</form>



</body>
</html>