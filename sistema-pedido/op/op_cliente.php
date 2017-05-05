<?php


require ("../config/crud.php");

@$nome = ($_POST['txt_nome']);
@$email = ($_POST["txt_email"]);
@$senha = ($_POST["txt_senha"]);

$dados = array(

    "cliente" => $nome,
    "email"   => $email,
    "senha"   => $senha

);

 inserir("cliente", $dados, true);


