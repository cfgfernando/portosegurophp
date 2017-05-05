<?php

    @$acao = $_GET["acao"];
    @$id   = $_GET["id"];

    if ($id){
        $clientes = consultar("cliente", "WHERE id_cliente = {$id}");
            foreach ($clientes as $cliente);
            $nome = $cliente["cliente"];
            $email = $cliente["email"];
            $senha = $cliente["senha"];
    }
?>


	<div class="base-home">
		<div class="titulo_p"><strong></strong><p><i class="icone-l"></i><b>Formulário de Cadastro</b></p></div>
	<div class="base-formularios">
        <form action="./op/op_cliente.php" method="post">
			<br>
			<label>
				<span>Nome</span>
				<input type="text" name="txt_nome" value="<?php echo @$nome ?>" placeholder="Digite um  nome">
			</label>
			<label>
				<span>Email</span>
				<input type="text" name="txt_email" value="<?php echo @$email ?>" placeholder="Digite um  email">
			</label>

			<label class="esquerdo">
				<span>Senha</span>
				<input type="password" name="txt_senha" value="<?php echo @$senha ?>" placeholder="Digite uma senha">
			</label>	
			<div class="limpar">&nbsp;</div>
			<div>				
                <input type="submit" value ="<?php if ($acao =="") echo "Cadastrar"; else echo $acao ?>" class="but" >
			</div>


		</form>
	</div>
</div>
		
		
		

		

		
