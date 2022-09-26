
<?php
$id = $_GET['id'];
include('sql/conexion-dos.php');
$m= "SELECT * FROM switches where id= '$id'";
$result=mysqli_query($conexion,$m);
$mostrar=mysqli_fetch_array($result)


?>   




<center><form action="sql/modificar-switches.php" method="post">
<input class="form-control form-control-sm" type="text" placeholder="Id" aria-label=".form-control-sm example"  name="edit_id" value="<?php echo $mostrar['id'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Ip" aria-label=".form-control-sm example"  name="edit_ip" value="<?php echo $mostrar['ip'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Usuario" aria-label=".form-control-sm example"  name="edit_usuario" value="<?php echo $mostrar['usuario'];?>"><br>
<input class="form-control form-control-sm" type="text" placeholder="Clave" aria-label=".form-control-sm example"  name="edit_clave" value="<?php echo $mostrar['clave'];?>"><br>

  

    
      
      
      
    
      <br><button class="btn btn-primary btn-sm">Modificar</button>
      
      
    </form>
      
