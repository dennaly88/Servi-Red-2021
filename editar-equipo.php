
<?php
$id = $_GET['id'];
include('sql/conexion-dos.php');
$m= "SELECT * FROM equipo where id= '$id'";
$result=mysqli_query($conexion,$m);
$mostrar=mysqli_fetch_array($result)


?>   

<?php

$sql="SELECT * from tipos_equipo";
$result=mysqli_query($conexion,$sql);

?> 


<center><form action="sql/modificar-equipo.php" method="post">
<input class="form-control form-control-sm" type="text" placeholder="Modelo" aria-label=".form-control-sm example"  name="edit_id" value="<?php echo $mostrar['id'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Modelo" aria-label=".form-control-sm example"  name="edit_nombre" value="<?php echo $mostrar['nombre'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Marca" aria-label=".form-control-sm example"  name="edit_marca" value="<?php echo $mostrar['marca'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Modelo" aria-label=".form-control-sm example"  name="edit_modelo" value="<?php echo $mostrar['modelo'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Serial" aria-label=".form-control-sm example"  name="edit_serial" value="<?php echo $mostrar['ser'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Bien Nacional" aria-label=".form-control-sm example"  name="edit_bien" value="<?php echo $mostrar['bien'];?>"><br>
  

    
      
      
      
    
      <br><button class="btn btn-primary btn-sm">Modificar</button>
      
      
    </form>
      
