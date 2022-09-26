
<main class="mt-5 pt-3">
<center><br><br>
<div class="card border-secondary mb-3" style="max-width: 80rem;">
<div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <span><i class="bi bi-diagram-3-fill"></i></span> &nbsp;Switches
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  

<?php 
include('sql/conexion-dos.php');

    $sql="SELECT perfil from usuarios where '$variable'=usuario;";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
     ?>
    
      <?php  
            $tu=$mostrar['perfil']; 

            if ($tu == 'Administrador') {

              require("datatablas/cuerpo-switches1.php");
          } else
          if ($tu == 'Basico') {
          
          
          
              require("datatablas/cuerpo-switches2.php");
          } 

 

 


           
            ?>  
  <?php 
  }
   ?> 











                

                 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<div>


      </main>
     

       