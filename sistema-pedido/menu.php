<div class="menu">
    <span class="titulo-m"> painel de controle</span>
    <ul>
        <li><a href="index.php"><i class="icone ico1"></i><span>Página inicial</span></a></li>
    </ul>
    <dl>
        <dt><a href=""><i class="icone ico2"></i><span>Cliente</span></a></dt>
        <dd>
            <ul>
                <li><a href="index.php?link=4">Listagem de cliente</span></a></li>
                <li><a href="formulario_cliente.html"><span>Cadastro de cliente</span></a></li>
            </ul>
        </dd>

        <dt><a href=""><i class="icone ico3"></i><span>Produto</span></a></dt>
        <dd>
            <ul>
                <li><a href="lista_produto.html">Listagem de Produto</span></a></li>
                <li><a href="formulario_produto.html"><span>Cadastro de Produto</span></a></li>
            </ul>
        </dd>


        <dt><a href=""><i class="icone ico7"></i><span>Consulta</span></a></dt>
        <dd>
            <ul>
                <li><a href="lista_pedido_pedente.html"><span>Pedidos pendentes</span></a></li>
                <li><a href="lista_todos_pedidos.html"><span>Todos os pedidos</span></a></li>
            </ul>
        </dd>


        <dt><a href=""><i class="icone ico4"></i><span>Relatórios</span></a></dt>
        <dd>
            <li><a href="selecionar_rel_cliente.html"><span>Relatório de Pedidos</span></a></li>
        </dd>

        <dt><a href=""><i class="icone ico8"></i><span>Gráfico</span></a></dt>
        <dd>
            <li><a href="selecionar_grafico_cliente.html"><span>Gráfico diário</span></a></li>
        </dd>

    </dl>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        //Definimos que todos as tags dd terão display:none menos o primeiro filho
        $('dd:not(:first)').hide();
        //Ao clicar no link, executamos a funcao
        $('dt a').click(function () {
            //As tags dd's visíveis agora ficam com display:none
            $("dd:visible").slideUp("slow");
            //Apos, a funcao é transferida para seu pai, que procura o proximo irmao no codigo o tonando visível
            $(this).parent().next().slideDown("slow");
            return false;
        });
    });
</script>
