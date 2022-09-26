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
        </div><br>



     






    
          <center><div class="col-md-6 mb-2 text-white">
            <div class="card h-100">
              <div class="card-header bg-dark text-white">
                <span class="me-2"><i class="bi bi-graph-down"></i></span>
                Switches
              </div>
              <div class="card-body ">
                
              <?php include 'graficas/grafica-switches.php'?>

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
    