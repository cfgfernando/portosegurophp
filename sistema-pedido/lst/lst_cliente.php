<div class="base-home">
    <div class="titulo_p"><strong></strong>
        <p><i class="icone-l"></i><b>LISTAGEM DE CLIENTES</b></p></div>
    <div class="base-lista">

        <a href="formulario_cliente.html" class="but esq">Cadastrar cliente</a>

        <div class="limpar">&nbsp;</div>

        <table width="100%" cellpadding="0" cellspacing="0" class="tabela">

            <thead>
            <tr>
                <th width="40%" align="left">Nome:</th>
                <th width="40%" align="center">Email:</th>
                <th colspan="2" align="center">Editar</th>
            </tr>
            <?php
            $i = 0;
            $clientes = consultar("cliente");
            foreach ($clientes as $cliente){
            if ($i++ % 2 == 0) {
                $cor = "ativo";

            } else {
                $cor = "ativo2";
            }

            ?>
            </thead>
            <tbody>

            <tr class="<?php echo $cor ?>">

                <td><?php echo $cliente["cliente"] ?></td>
                <td align="center"><?php echo $cliente["email"] ?></td>
                <td align="center"><a href="#" class="editar but">Editar</a></td>
                <td align="center"><a href="#" class="excluir but">Excluir</a></td>
            </tr>

            <?php } ?>


            </tbody>

        </table>


    </div>
</div>






