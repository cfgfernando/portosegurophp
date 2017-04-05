<!DOCTYPE html>
<?php
require ("config/config.php");

    $id_editora = isset($_GET["id"])? $_GET["id"]:NULL;
    if(isset($_POST["enviado"])){
        $id_editora  = $_POST["id"];
        $txt_editora = $_POST["txt_editora"];

        $sql = "UPDATE editora set editora = '$txt_editora' WHERE  id_editora = '$id_editora' ";
        $qry = mysqli_query($conexao, $sql);
        if(isset($qry)){
            header("location: lista_editora.php");
        }else{
        echo "Erro";
    }
}

    if(isset($id_editora)){
        $sql = "SELECT * FROM editora WHERE id_editora = ". $id_editora;
        $qry = mysqli_query($conexao, $sql);
        $editora = mysqli_fetch_array($qry);

    }
        $txt_editora = isset($editora["editora"])? $editora["editora"]:NULL;

?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
</head>
<body>
<center><a href="/index.html"><img src="/portoseguro.jpg" alt="Projeto Porto Seguro PHP"/></a></center>
<h1 align="center">Editar Editora</h1>
<hr>
<br>
<form method="post">
    <table>
        <tr>
            <td>Editora</td>
            <td><input type="text" name="txt_editora" value="<?php echo $txt_editora ?>"></td>
            <input type="hidden" name="enviado" value="ok">
            <input type="hidden" name="id" value="<?php echo $id_editora ?>">
            <td><input type="submit" value="Alterar"></td>
        </tr>
    </table>
</form>



</body>
</html>