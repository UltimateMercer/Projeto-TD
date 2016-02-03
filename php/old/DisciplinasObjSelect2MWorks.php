<?php

include_once "../class/Carrega.class.php";

  if (isset($_POST['enviar']))
  {
      $object = new Disciplinas();
      $object->disciplina = $_POST['disciplina'];
      $object->curso = $_POST['curso'];

      $object->Inserir();

      header("Location:ViewDisciplinaObj.php");
  }
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

    <link rel="stylesheet" href="../plugins/select2/select2.css">
    <link rel="stylesheet" href="../plugins/select2/select2-bootstrap.css">

    <!--link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script-->
<script type="text/javascript">
$( "#dropdown" ).select2({
  theme: "bootstrap"
});
</script>

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
                    <h1 class="page-header">Disciplinas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulário de cadastro de disciplina
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" name="caddisciplina" method="post" action="<?php $SELF_PHP;?>">
                                      <div class="form-group">
                                          <label for="disciplina">Disciplina:</label>
                                          <input type="text" class="form-control" id="disciplina" name="disciplina" placeholder="Digite a disciplina aqui" autofocus required>
                                      </div>
                                      <div class="form-group">
                                        <label for="curso">Curso:</label>
                                        <select class="form-control select2"  name="curso[]" id="curso" multiple="multiple">
                                          <option value="">Selecione o cursos</option>
                                          <?php $cursoSelect = new Cursos();
                                                $cursoSelect->cursoSelect();
                                          ?>
                                        </select>
                                      </div>

                                        <br>
                                        <button type="submit" name="enviar" value="enviar" class="btn btn-success btn-lg btn-block"><i class="fa fa-check"></i> Enviar </button>
                                        <br>
                                        <button type="reset" name="limpar" value="limpar" class="btn btn-outline btn-danger btn-lg btn-block"><i class="fa fa-magic"></i> Limpar </button>

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
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script type="text/javascript" src="../plugins/select2/select2.js"></script>
    <script type="text/javascript">
    $( ".select2" ).select2({
      theme: "bootstrap"
    });
</script>
</body>
</html>