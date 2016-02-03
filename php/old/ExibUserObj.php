<?php
 include_once "../class/Carrega.class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Painel de Controle</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <!--Topo -->
          <?php include "topolinks.html"; ?>
          <!--Topo -->

          <!--Menu Lateral -->
          <?php include "menu.html"; ?>
          <!--Menu Lateral -->

        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuários</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Usuário
                        </div>

<?php

  $cod = $_POST["cod"];

  if (isset($_POST["exibir"]))
  {
    $exib = new Usuarios();
    $comp = $exib->exibir($cod);

      if ($exib != null)
      {
?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                  <h4>Nome: </h4>
                                    <blockquote>
                                      <p><?php echo $comp->nome;?></p>
                                    </blockquote>
                                  <h4>E-mail: </h4>
                                    <blockquote>
                                      <p><?php echo $comp->email; ?></p>
                                    </blockquote>
                                  <h4>Permissão: </h4>
                                    <blockquote>
                                      <p><?php echo $comp->type; ?></p>
                                    </blockquote>
                                <form class="" action="EditUserObj.php" method="post">
                                  <input type="hidden" name="cod" value="<?php echo $comp->cod; ?>"/>
                                  <!--input type="submit" name="editar" value="Editar" class="btn btn-primary btn-lg btn-block"/-->
                                  <button type="submit" name="editar" value="editar" class="btn btn-outline btn-warning btn-lg btn-block"><i class="fa fa-edit"></i> Editar </button>
                                  <br>
                                  <button type="button" name="voltar" onclick="history.go(-1)" class="btn btn-outline btn-default btn-lg btn-block"><i class="fa fa-undo"></i> Voltar </button>
                                  <!--input type="button" name="cancelar" value="Cancelar" onclick="history.go(-1)" class="btn btn-danger btn-lg btn-block"/-->
                                </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>

    <?php
          }
        }
    ?>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>