<?php include "config/crud.php"; ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema de Pedidos</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--<link rel="stylesheet" type="text/css" href="css/style-m.css">-->

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script>
        $(function () {
            $('.mobmenu').click(function () {
                $('#menu .menu').slideToggle();
                $(this).toggleClass('active');
                return false;
            });
        });
    </script>


</head>

<body>
<div class="site">
    <!-- INICIO DO CABECALHO -->

    <?php include "cabecalho.php" ?>

    <!-- FIM DO CABECALHO -->

    <div class="conteudo">


        <!-- INICIO DO MENU -->

        <?php include "menu.php" ?>

        <!-- FINAL DO MENU -->

        <!-- INICIO DO CONTEUDO PRINCIPAL -->

        <div id="conteudocentral">

            <?php

            @$link = $_GET['link'];


            $pag[1] = "home.php";
            $pag[2] = "frm/frm_cliente.php";
            $pag[3] = "frm/agendamento.php";
            $pag[4] = "lst/lst_cliente.php";
            $pag[5] = "frm/frm_produto.php";
            $pag[6] = "lst/lst_produto.php";
            $pag[7] = "frm/frm_produto.php";
            $pag[8] = "lst/lst_agenda.php";
            $pag[9] = "frm/frm_agenda.php";
            $pag[10] = "lst/lst_pedido_pendente.php";
            $pag[11] = "frm/editar_pedido.php";
            $pag[12] = "lst/lst_todos_pedidos.php";
            $pag[13] = "lst/lst_detalhe_pedido.php";
            $pag[14] = "rel/selecionar_rel_cliente.php";
            $pag[15] = "rel/relatorio_pedido.php";
            $pag[16] = "grafico/selecionar_grafico_cliente.php";
            $pag[17] = "grafico/grafico_mensal.php";

            if (!empty($link)) {
                if (file_exists($pag[$link])) {
                    include $pag[$link];


                } else {
                    include "home.php";
                }
            } else {
                include "home.php";
            }
            ?>

            <!-- FINAL DO CONTEUDO PRINCIPAL -->


            <!-- INICIO DO RODAPE -->

            <?php include "rodape.php" ?>

            <!-- FINAL DO RODAPE -->


        </div>
</body>
</html>