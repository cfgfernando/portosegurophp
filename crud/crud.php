<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 05/04/17
 * Time: 20:12
 */

require ("config.php");

/**
 * Abrir conexao com o banco de dados
 */
function abrirConexao(){

    $conexao = @mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die(mysqli_connect_error());
    mysqli_set_charset($conexao, CHARSET);
    return $conexao;

}

/**
 * fechar conexao com o banco de dados $conexao
 */
function fecharConexao($conexao){
    @mysqli_close($conexao) or die(mysqli_error($conexao));
}

function executar($sql){

    $conexao = abrirConexao($sql);
    $qry = @mysqli_query($conexao, $sql) or die(@mysqli_error($conexao));

    fecharConexao($conexao);
    return $qry;

}

function consultar($tabela, $condicao=null, $campos="*"){

    $sql = "SELECT {$campos} FROM {$tabela} {$condicao} ";
    $qry = executar($sql);


    if(!mysqli_num_rows($qry))
        return false;

    else{
        while ($linha = @mysqli_fetch_array($qry)){
            $dados[] = $linha;
        }
        return $dados;
    }
}

function inserir($tabela, array $dados){

<<<<<<< HEAD
        $campos = implode(", ", array_keys($dados));
        $valores = " ' ". implode(" ', ' ", $dados). "'";
        $sql = "INSERT INTO $tabela ({$campos}) VALUES ({$valores})";

        return executar($sql);
}

function alterar ($tabela, array $dados, $condicao){

    foreach ($dados as $chave => $valor)
        $campos[] = "{$chave} = '{$valor}' ";

        $campos = implode(", ", $campos);
        $sql = "UPDATE {$tabela} SET {$campos} WHERE $condicao";

    return executar($sql);

}

function deletar($tabela, $condicao){

    $sql = "DELETE FROM {$tabela} WHERE {$condicao}";

    return executar($sql);
=======

>>>>>>> origin/master
}



