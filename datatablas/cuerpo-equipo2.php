
<!doctype html>
<html lang="en">
  <head>
   
  <?php
    include "conexion-dos.php";
 
?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>
  </head>
  <body>
  
  
 
  <div class="modal fade" id="modalcrear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h6 class="modal-title text-white " id="exampleModalLabel"> <i class="bi bi-menu-button-wide-fill"></i>&nbsp; Equipo</h6>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <center><form action="sql/insertar-equipo.php" method="post">




<?php

$sql="SELECT * from tipos_equipo";
$result=mysqli_query($conexion,$sql);

?> 

<select class="form-control form-control-sm" placeholder name="equipo" required>
  <option selected>Equipo</option>
  <?php
  while($mostrar=mysqli_fetch_array($result)) {
    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
  }
  ?>
</select>
<br>
<?php

$sql="SELECT * from marca";
$result=mysqli_query($conexion,$sql);

?>

<select class="form-control form-control-sm" placeholder name="marca" required>
  <option selected>Marca</option>
  <?php
  while($mostrar=mysqli_fetch_array($result)) {
    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
  }
  ?>
</select>
<br>
  <input class="form-control form-control-sm" type="text" placeholder="Modelo" aria-label=".form-control-sm example"  name="modelo" value="" required><br>
  <input class="form-control form-control-sm" type="text" placeholder="Serial" aria-label=".form-control-sm example"  name="serial" value=""required><br>
  <input class="form-control form-control-sm" type="text" placeholder="Bien Nacional" aria-label=".form-control-sm example"  name="bien" value=""required><br>
  

    
      <br><button class="btn btn-info">Crear</button>
      
      
    </form>
      



      </div>
      
    </div>
  </div>
</div>

    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div>

                   
           
           <div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Serial</th>
                        <th>Bien Nacional</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <?php
		 
         $sql="SELECT * from equipo";
         $result=mysqli_query($conexion,$sql);
 
         while($mostrar=mysqli_fetch_array($result)){


                    ?>
                <tbody>
                    <tr>
            <td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['marca'] ?></td>
			<td><?php echo $mostrar['modelo'] ?></td>
			<td><?php echo $mostrar['ser'] ?></td>
			<td><?php echo $mostrar['bien'] ?></td>
		



                        <td>

                       

<script type="text/javascript">
   
function CanContinue () {
var confRet = window.confirm ("Deseas Eliminar el Equipo");
if (confRet) {
window.location='sql/eliminar-equipo.php?id=<?php echo $mostrar['id'];?>'; 

}
else {

 
}
}
</script>





                         <div class="text-center">
              
            </div>   

                    </td>
                    </tr>
                    
                     
                    
                </tbody>
                
                <?php
}
?>

                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Serial</th>
                        <th>Bien Nacional</th>
                        <th>Accion</th>
                    </tr>
                </tfoot>
               
            </table>  
         
           </div>
       </div> 
    </div>
   
   
    

    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    
      
<script>
//Idiomas con el 1er método   
$(document).ready(function() {
    $('#example').DataTable({ 
        "language": {
           "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
        
        });
});
 //Idiomas con el 2do método   
/* $(document).ready(function() {
  $('#example').DataTable({
    "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
         }
  });
}); */
</script>

      
  </body>