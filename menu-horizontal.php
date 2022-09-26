


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>




          
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >
          <button class= "btn-dark">
          <img class="card-img-top " src="img/1.ico" alt="Card image"> </button> &nbsp;Servi-Red
         
       

<?php 

session_start();
$usuario = $_SESSION['username'];
$variable=$_SESSION['usuario'];

?>  


<?php 
include('sql/conexion-dos.php');

		$sql="SELECT perfil from usuarios where '$variable'=usuario;";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $tu=$mostrar['perfil']; 
           
            ?>	
	<?php 
	}
	 ?> 































   
         
        
          </a > 
        
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
           
              
              <button class="btn btn-dark" type="submit">
             
              <i class="bi bi-facebook" href="https://www.facebook.com/"></i>&nbsp;
              <i class="bi bi-twitter"></i>&nbsp;
              <i class="bi bi-whatsapp"></i>&nbsp;
              <i class="bi bi-github"></i>&nbsp;
              <i class="bi bi-instagram"></i>&nbsp;
              <i class="bi bi-twitch"></i>&nbsp;
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <?php echo  "    " . $_SESSION['usuario']; ?></i>
                <i class="bi bi-person-fill"><?php echo  "    " . $tu; ?></i>
                
              </a>
              <ul class="dropdown-menu dropdown-menu-end bg-dark ">
                <li><a class="dropdown-item bg-dark text-white" href="destruir.php">Cerrar Sesion</a></li>
                
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    