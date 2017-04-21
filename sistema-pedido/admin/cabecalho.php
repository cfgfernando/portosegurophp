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
    <div class="base-topo">
        <div class="conteudo">
            <img src="img/logo.png" class="logo">
            <div class="usuario"><a href="">Olá, Jairo Sousa
                    <small>jairo.com2@gmail.com</small>
                </a>
                <div class="thumb"><img src="img/img-user.png"></div>
            </div>
        </div>
        <div class="admin">
            <div class="conteudo">ÀREA ADMINISTRATIVA</div>
        </div>
    </div>