
<?php
$id = $_GET['id'];
include('sql/conexion-dos.php');
$m= "SELECT * FROM usuarios where id= '$id'";
$result=mysqli_query($conexion,$m);
$mostrar=mysqli_fetch_array($result)


?>   










<center><form action="sql/modificar.php" method="post">
    <center>
    <input class="form-control form-control-sm" type="text" placeholder="Nombres" aria-label=".form-control-sm example"  name="edit_id" value="<?php echo $mostrar['id'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Nombres" aria-label=".form-control-sm example"  name="edit_nombres" value="<?php echo $mostrar['nombres'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Apellidos" aria-label=".form-control-sm example"  name="edit_apellidos" value="<?php echo $mostrar['apellidos'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Cedula" aria-label=".form-control-sm example"  name="edit_cedula" value="<?php echo $mostrar['cedula'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Usuario" aria-label=".form-control-sm example"  name="edit_usuario" value="<?php echo $mostrar['usuario'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="text" aria-label=".form-control-sm example"  name="edit_contraseña" value="<?php echo $mostrar['contraseña'];?>"><br>
    <?php

$sql="SELECT * from tipo_perfil";
$result=mysqli_query($conexion,$sql);

?>
    <div class="form-group">


<label for="recipient-name" class="col-form-label"></label>
<select class="form-control form-control-sm" placeholder name="edit_perfil" required>
  <option selected>Elige una opción</option>
  <?php
  while($mostrar=mysqli_fetch_array($result)) {
    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
  }
  ?>
</select>
</div>








 





    
      <br><button class="btn btn-primary btn-sm">Modificar</button>
      
      
    </form>
      
