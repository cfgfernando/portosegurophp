<!DOCTYPE html>
<?php
  require ("config/config.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
</head>
<body>
<div>
    <center><a href="/index.html"><img src="/portoseguro.jpg" alt="Projeto Porto Seguro PHP"/></a></center>
    <h1 align="center">Sistema de Cadastro de Livros</h1>
    <hr>
    <a href="index.html">Home</a> | <a href="nova_editora.php">Novo Cadastro</a>
    <table border="1" width="50%">
        <tr>
            <td width="5%" align="center"><b>ID</b></td>
            <td width="30%" align="center"><b>Editora</b></td>
            <td colspan="2" width="15%" align="center"><b>Opção</b></td>
        </tr>
        <?php
            $qry = mysqli_query($conexao, "SELECT * FROM editora");
            while ($linha = mysqli_fetch_array($qry)){

        ?>
        <tr>
            <td align="center"><?php echo $linha["id_editora"]?></td>
            <td><?php echo $linha["editora"]?></td>
            <td align="center"> <a href="<?php echo "editar_editora.php?id=". $linha["id_editora"]?>">Editar</a> </td>
            <td align="center"> <a href="<?php echo "excluir_editora.php?id=". $linha["id_editora"]?>">Excluir</a> </td>
        </tr>

        <?php } ?>

    </table>


</div>
</body>
</html>