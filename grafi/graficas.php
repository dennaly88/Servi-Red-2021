<?php 

require ("sql/conexion.php");

 ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="main-container">
<br>
<center>
<link rel="stylesheet" href="css/fondo.css">
<br><br>
<div class="card text-center w-50">
  <div class="card-header">
  </div>
  <div class="card-body">

  


  <?php 
		$sql="SELECT cantidad from materiales where nombre='RJ11';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $rj11=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='KEYSTONE';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
			<?php  
            $k=$mostrar['cantidad']; 
             
            ?>
	<?php 
	}
	 ?>
      <?php 
		$sql="SELECT cantidad from materiales where nombre='RJ45';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
		<?php  
            $rj45=$mostrar['cantidad']; 
           
            ?>
            <?php  
            ?>
	<?php 
	}
	 ?>
      <?php 
		$sql="SELECT cantidad from materiales where nombre='Ponchadora';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $p=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
      <?php 
		$sql="SELECT cantidad from materiales where nombre='Btmeter B Rj11';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $bt=$mostrar['cantidad']; 
           
            ?>
			
            <?php  
            ?>
	<?php 
	}
	 ?>
      <?php 
		$sql="SELECT cantidad from materiales where nombre='Escaleras';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $e=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>






<?php 
	
$suma=$rj11+$k+$rj45+$p+$bt+$e;

 
 ?>
 <br><br>
 <?php 

$trj11=($rj11/$suma)*100;
$tk=($k/$suma)*100;
$trj45=($rj45/$suma)*100;
$tp=($p/$suma)*100;
$tbt=($bt/$suma)*100;
$te=($e/$suma)*100;
	 ?>


</body>

		
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<style type="text/css">







input[type="number"] {
    min-width: 50px;
}

		</style><?php 

require ("sql/conexion.php");

 ?>
	
    <?php 
 include('sql/conexion.php');
 
           ?>
	<body>
<script src="js/jpgraph.js"></script> 
<script src="js/jpgraph_exporting.js"></script>
<script src="js/jpgraph_export_data.js"></script>
<script src="js/jpgraph_acce.js"></script>


    <div id="container"></div>
    
</figure>
<link rel="stylesheet" href="css/fondo.css">


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Graficas de Materiales   Total     <?php echo $suma
 ?>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'RJ11',
        colorByPoint: true,
        data: [<?php
                
        ?>
            
            
          
            
            
            {
            name: 'RJ11',
            y: <?php 
echo $trj11;
?>,
            sliced: true,
            selected: true
        }, 
         {
            name: 'KEYSTONES',
            y: <?php 
echo $tk;
?>
        }, {
            name: 'RJ45',
            y: <?php 
echo $trj45;
?>
        }, {
            name: 'PONCHADORAS',
            y: <?php 
echo $tp;
?>
        }, {
            name: 'ESCALERAS',
            y: <?php 
echo $tbt;
?>
        },   {
            name: 'Btmeter B Rj11',
            y: <?php 
echo $te;
?>
        }]
    }]
});
		</script>
	</body>




    </html>




    <?php  require("footer.php");?>