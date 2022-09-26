
<?php
$id = $_GET['id'];
include('sql/conexion-dos.php');
$m= "SELECT * FROM materiales where id= '$id'";
$result=mysqli_query($conexion,$m);
$mostrar=mysqli_fetch_array($result)


?>   




<center><form action="sql/modificar-materiales.php" method="post">
<input class="form-control form-control-sm" type="text" placeholder="ID" aria-label=".form-control-sm example"  name="edit_id" value="<?php echo $mostrar['id'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Nombre" aria-label=".form-control-sm example"  name="edit_nombre" value="<?php echo $mostrar['nombre'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Unidad" aria-label=".form-control-sm example"  name="edit_unidad" value="<?php echo $mostrar['unidad'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Cantidad" aria-label=".form-control-sm example"  name="edit_cantidad" value="<?php echo $mostrar['cantidad'];?>"><br>

  

    
      
      
      
    
      <br><button class="btn btn-primary btn-sm">Modificar</button>
      
      
    </form>
      
