<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
require '../init.php';
$conteudo = $route();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Design Patterns com Php</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Ativar navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Design Patterns</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="\">Home</a></li>
                <li><a href="/">Sobre nós</a></li>
                <li><a href="/">Contato</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/">Opção</a></li>
                        <li><a href="/">Outra opção</a></li>
                        <li><a href="/">Mais alguma coisa</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Sub menu</li>
                        <li><a href="/">Outro ítem</a></li>
                        <li><a href="/">Mais um ítem</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<!-- Begin page content -->
<div class="container">
    <?php
    require_once 'includes/' . $conteudo . '.php';
    ?>
</div>


<div class="footer">
    <div class="container">
        <p class="text-muted">Bem-vindo à <a href="/">Design Patterns com PHP</a> - Todos os direitos reservados
            - <?php echo date('Y'); ?></p>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
