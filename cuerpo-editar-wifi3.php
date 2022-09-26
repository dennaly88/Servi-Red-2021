
<?php
$id = $_GET['id'];
include('sql/conexion-dos.php');
$m= "SELECT * FROM wifi where id= '$id'";                              
$result=mysqli_query($conexion,$m);      
$mostrar=mysqli_fetch_array($result)


?>   

 


 





<center><form action="sql/modificar-wifi.php" method="post">
    <center>
    <input class="form-control form-control-sm" type="text" placeholder="Id" aria-label=".form-control-sm example"  name="edit_id" value="<?php echo $mostrar['id'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Ip" aria-label=".form-control-sm example"  name="edit_ip" value="<?php echo $mostrar['ip'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Clave Administrador" aria-label=".form-control-sm example"  name="edit_clave_admin" value="<?php echo $mostrar['clave_administrador'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="SSID" aria-label=".form-control-sm example"  name="edit_ssid" value="<?php echo $mostrar['SSID'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Clave" aria-label=".form-control-sm example"  name="edit_clave" value="<?php echo $mostrar['Clave'];?>"><br>
    <input class="form-control form-control-sm" type="text" placeholder="Ubicacion" aria-label=".form-control-sm example"  name="edit_ubicacion" value="<?php echo $mostrar['ubicacion'];?>"><br>
    
    <div class="form-group">



</div>








 





    
      <br><button class="btn btn-primary btn-sm">Modificar</button>
      
      
    </form>
      
