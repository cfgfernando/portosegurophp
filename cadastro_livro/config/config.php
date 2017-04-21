<?php
    define("SERVIDOR", "127.0.0.1");
    define("USUARIO", "root");
    define("SENHA", "root");
    define("BANCO", "cadastro_livro");

    $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);
    mysqli_set_charset($conexao, 'utf8') or (mysqli_error($conexao));