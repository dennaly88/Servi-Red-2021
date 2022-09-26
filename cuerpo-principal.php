<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

         
          <button type="button" class="btn btn-primary btn-sm"><?php 


echo  date("d-M-Y");

?>
<?php 

date_default_timezone_set("America/Caracas");
$hora = date('h:i a',time() - 3600*date('I'));
print "&nbsp;$hora&nbsp;"; 

?><i class="bi bi-calendar-date-fill"></i></button>

              <a href="#" class="nav-link px-3 active">
                
                <span><button type="button" class="btn btn-danger btn-sm "> Servi-Red Enterprice  ©</button>
   </span>
              </a>
              
            
          
          </div>
        </div><br>



        <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card bg-white text-primary h-100">
            <div class="card-header bg-primary text-white"><i class="bi bi-broadcast-pin"></i>
         WIFI
              </div>
              <div class="card-body py-2">
              <a title="WIFI" href="principal-wifi.php">
              <img class="card-img-top" src="img/cuerpo/wifi.png" alt="Card image"></a>
             
               </div>
              <div class="card-footer bg-primary text-white d-flex">
                Ver<img href="img/cuerpo/wifi.png">
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>



          <div class="col-md-3 mb-3">
            <div class="card bg-white text-dark h-100">
            <div class="card-header text-white bg-primary">
            <i class="bi bi-diagram-3-fill"></i>
</i> SWITCHES
              </div>
              <div class="card-body py-2">
              <br>
              <a title="SWITCHES" href="principal-switches.php">
              <img class="card-img-top" src="img/cuerpo/swit.png" alt="Card image"></a>
              </div>
              <div class="card-footer d-flex text-white bg-primary">
                Ver
                <span class="ms-auto">
                  <i class="bi bi-chevron-right "></i>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card bg-white text-dark h-80">
            <div class="card-header text-white bg-primary">
            <i class="bi bi-inboxes-fill"></i>
</i> MATERIALES
              </div>
              <div class="card-body py-2">
              <a title="MATERIALES" href="principal-materiales.php">
              <img class="card-img-top" src="img/cuerpo/materiales.png" alt="Card image"></a>
              </div>
              <div class="card-footer d-flex text-white bg-primary">
                Ver
                <span class="ms-auto">
                  <i class="bi bi-chevron-right "></i>
                </span>
              </div>
            </div> 
          </div>

          <div class="col-md-3 mb-3">
            <div class="card bg-white text-dark h-100">
            <div class="card-header text-white bg-primary">
            <i class="bi bi-menu-button-wide-fill"></i>
</i>EQUIPOS
              </div>
              <div class="card-body py-2">
              <a title="EQUIPOS" href="principal-equipos.php">
              <img class="card-img-top" src="img/cuerpo/equipos.png" alt="Card image"></a>
              </div>
              <div class="card-footer d-flex text-white bg-primary">
                Ver
                <span class="ms-auto">
                  <i class="bi bi-chevron-right "></i>
                </span>
              </div>
            </div>
          </div>

      
       






    
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header bg-dark text-white" >
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                Cantidad de Equipos
              </div>
              <div class="card-body py-2">
               
              <?php include 'graficas/dan//grafica2.php'?>
             
              
              </div>
              <div class="card-footer d-flex text-white bg-dark">
                Ver
                <span class="ms-auto">
                  <i class="bi bi-chevron-right "></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-2 text-white">
            <div class="card h-100">
              <div class="card-header bg-dark text-white">
                <span class="me-2"><i class="bi bi-graph-down"></i></span>
                Servidores y Redes
              </div>
              <div class="card-body ">
                
              <img class="card-img-top" src="img/todo.jpg" alt="Card image">

              </div>
              <div class="card-footer d-flex text-white bg-dark">
                Ver
                <span class="ms-auto">
                  <i class="bi bi-chevron-right "></i>
                </span>
              </div>
            </div>
          </div>
        </div>

        
        
        
    </main>
    