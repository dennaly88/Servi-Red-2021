<html lang="en">
  <head>
  <link rel="shortcut icon" href="img/favi.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SERVI-RED</title>
   

<?php 

include 'sql/conexion.php';
include 'sql/usuario.php';

?>


    <link href="librerias/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="librerias/css/fondo.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/css/fondo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
	<script src="librerias/js/jquery-1.11.0.min.js"></script>





<br><br><br><br>
<center><div class="card" style="width: 32em" ; >
<script>
		$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();

				var current = $(this).attr('action');

				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}

				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
				}
			})
		})
	</script>

    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                <center><img src="img/1.ico"><center><br>
                    <input class="form-control form-control-sm" name="usuario" placeholder="Usuario" value="" type="text" required >
                </div>

                


   <br><div class="input-group">
		<input class="form-control" type="password" placeholder="Contraseña" name="contraseña" required>
		<span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"  name="contraseña" placeholder="Contraseña" require></span>
	</div>
  <br>




 




             
                <button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Enviar</button>
                <h6><p class="mt-5 mb-3 text-muted">Servi-Red </p></h6>
  <h5><p class="mt-5 mb-3 text-muted">©Todos los Derechos Reservados</p></h5>
            </form>
        </div>
    </div>
</div>




  </div>
</div>
<br><br>


<?php
unset($usu);
$usu1=$_GET["usu"];





      if($usu1<8){

       
    } else{

require ("mensajes/mensaje.php");



    }


   
     
?>
<?php include 'mensajes.php'?>

</html>
