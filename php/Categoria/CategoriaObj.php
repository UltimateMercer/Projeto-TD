<?php

include_once "../../class/Carrega.class.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
	   jQuery(document).ready(function(){
		jQuery('#form_cat').submit(function(){
			var dados = jQuery(this).serialize();

			jQuery.ajax({
				type: "POST",
				url: "CadCategoria.php",
				data: dados,
				success: function(data)
				{
					alert(data);
				}
			});
			return false;
		});
	});
</script-->
  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
      <?php include '../inc/topotime.html';

            include '../inc/menutime.html';
      ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

          <h1>
            Categorias
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->

            <!-- right column -->
            <div class="col-lg-12">
              <!-- Horizontal Form -->
              <div id="cadCat">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Cadastro de categorias</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" id="form_cat" action="CrudCategoria.php" method="post">
                  <div class="box-body">
                      <div class="form-group">
                        <label for="dia" class="col-sm-2 control-label">Categoria:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="categoria" placeholder="Digite o categoria aqui" autofocus required>
                        </div>
                      </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" name="enviar" value="enviar" class="btn btn-success btn-flat btn-block"><i class="fa fa-check"></i> Enviar </button>
                    <br>
                    <button type="reset" class="btn btn-default btn-flat btn-block btn-sm"><i class="fa fa-magic"></i> Limpar </button>

                  </div><!-- /.box-footer -->
                </form>

              </div><!-- /.box -->
              <!-- general form elements disabled -->
              </div>
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        include '../inc/footer.html';
        include '../inc/control-sidebar.html';
      ?>
    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

  </body>
</html>
