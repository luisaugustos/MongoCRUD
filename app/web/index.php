<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portarias</title>
        <base href="<?= BASE_URL ?>" >

        <!-- Bootstrap -->
        <link href="app/web/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <link href="app/web/css/media.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body style="">
        <!------------------------------ Topo ------------------------------>

        <nav class="navbar navbar-default" id="navbar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Menus</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Portarias</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <div class="hidden-lg hidden-md hidden-sm">
                        <ul class="nav navbar-nav">
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">

                <!------------------------------ Menu Lateral ------------------------------>
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Menu</div>
                        <div class="panel-body">
                                <a class="list-group-item btn" href="portaria/inserir">
                                    Cadastrar Portaria
                                </a>
                                <a class="list-group-item btn" href="portaria">
                                    Listar Portarias
                                </a>
                        </div>
                    </div>
                </div>

                <!------------------------------ Principal ------------------------------>
                <div class="col-md-10">
                    <div class="container-fluid">
                        <?php include_once($controller->getContent()); ?>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!------------------------------ JS ------------------------------>
        <script src="app/web/js/jquery.min.js"></script>
        <script src="app/web/js/bootstrap.min.js"></script>

    </body>
</html>