
<?php
$id = $_GET['id'];
include('sql/conexion-dos.php');
$m= "SELECT * FROM switches where id= '$id'";
$result=mysqli_query($conexion,$m);
$mostrar=mysqli_fetch_array($result)


?>   










<center><form action="sql/modificar-switche.php" method="post">
    <center>
    <input class="form-control form-control-sm" type="text" placeholder="Id" aria-label=".form-control-sm example"  name="edit_id" value="<?php echo $mostrar['id'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Ip" aria-label=".form-control-sm example"  name="edit_ip" value="<?php echo $mostrar['ip'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Usuario" aria-label=".form-control-sm example"  name="edit_usuario" value="<?php echo $mostrar['usuario'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Contraseña" aria-label=".form-control-sm example"  name="edit_contraseña" value="<?php echo $mostrar['clave'];?>"><br>

   <?php

$sql="SELECT * from ubicacion";
$result=mysqli_query($conexion,$sql);

?> 
<select class="form-control form-control-sm" placeholder name="edit_ubicacion" required>
  <option selected>Ubicacion</option>
  <?php
  while($mostrar=mysqli_fetch_array($result)) {
    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
  }
  ?>
</select>
    








 





    
      <br><button class="btn btn-primary btn-sm">Modificar</button>
      
      
    </form>
      
