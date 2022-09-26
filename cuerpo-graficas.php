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
        
        </div>
      </div><br><br><br>

      <center><button type="button" class="btn btn-primary btn-sm"><span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>Graficas</button><br><br><br>

      <div class="row">
      <div class="col-md-3 mb-3">
          <div class="card bg-white text-primary h-100">
          <div class="card-header bg-secondary text-dark"><i class="bi bi-broadcast-pin"></i>
          <b>  WIFI</b>
            </div>
            <div class="card-body py-2">
            <a title="WIFI GRAFICAS" href="principal-grafica-wifi.php">
            <img class="card-img-top" src="img/cuerpo/wifi.png" alt="Card image">
            </a>
             </div>
            <div class="card-footer bg-secondary text-dark d-flex">
            <b>Graficas </b><img href="img/cuerpo/wifi.png">
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>



        <div class="col-md-3 mb-3">
          <div class="card bg-white text-dark h-100">
          <div class="card-header text-dark bg-secondary">
          <i class="bi bi-diagram-3-fill"></i>
</i>  <b>SWITCHES </b>
            </div>
            <div class="card-body py-2">
            <br>
            <a title="SWITCHES GRAFICAS"  href="principal-graficas-switches.php">
            <img class="card-img-top" src="img/cuerpo/swit.png" alt="Card image"> </a>
            </div>
            <div class="card-footer d-flex text-dark bg-secondary">
            <b>Graficas </b>
              <span class="ms-auto">
                <i class="bi bi-chevron-right "></i>
              </span>
            </div>
          </div>
        </div>





       
          







        <div class="col-md-3 mb-3">
          <div class="card bg-white text-dark h-80">
          <div class="card-header text-dark bg-secondary">
          <i class="bi bi-inboxes-fill"></i>
</i>  <b>MATERIALES </b>
            </div>
            <div class="card-body py-2">
            <a title="MATERIALES GRAFICAS"  href="principal-grafica-materiales.php">
            <img class="card-img-top" src="img/cuerpo/materiales.png" alt="Card image"> </a>
            </div>
            <div class="card-footer d-flex text-dark bg-secondary">
            <b>Graficas </b>
              <span class="ms-auto">
                <i class="bi bi-chevron-right "></i>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card bg-white text-dark h-100">
          <div class="card-header text-dark bg-secondary">
          <i class="bi bi-menu-button-wide-fill"></i>
</i><b>EQUIPOS</b>
            </div>
            <div class="card-body py-2">
            <a title="EQUIPOS GRAFICAS"  href="principal-grafica-equipos.php">
            <img class="card-img-top" src="img/cuerpo/equipos.png" alt="Card image"> </a>
            </div>
            <div class="card-footer d-flex text-dark bg-secondary">
            <b>Graficas</b>
              <span class="ms-auto">
                <i class="bi bi-chevron-right "></i>
              </span>
            </div>
          </div>
        </div>

    
     






  
      
           
            

      
      
      
  </main>
  