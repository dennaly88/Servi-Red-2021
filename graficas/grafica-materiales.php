<?php 

require ("conexion-dos.php");
$pp=0;
$pc=0;
$bc=0;
$cs=0;
$ck=0;
$ct=0;
$o=0;
$j=0;
$c=0;
$can=0;
$caj=0;
$t=0;
$ram=0;
$tu=0;
$un=0;
 ?>
 <?php 
		$sql="SELECT cantidad from materiales where nombre='Patch Panel';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $pp=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Pacth Cord';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $pc=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Bobina de Cable';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $bc=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Cable Stack';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $cs=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Cable KVM';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $ck=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Cable Telefónico';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $ct=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Organizadores';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $o=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Jack';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $j=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Conectores';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $c=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Canaletas';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $can=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Cajetines';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $caj=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Tapas';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $t=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Ramplug';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $ram=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Tuercas';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $tu=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>
     <?php 
		$sql="SELECT cantidad from materiales where nombre='Uniones';";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		
			<?php  
            $un=$mostrar['cantidad']; 
           
            ?>	
	<?php 
	}
	 ?>

<?php 

?>

<?php 

	
$suma=$pp+$pc+$bc+$cs+$ck+$ct+$o+$j+$c+$can+$caj+$t+$ram+$tu+$un;

 
 ?>

<?php 

$pp=($pp/$suma)*100;
$pc=($pc/$suma)*100;
$bc=($bc/$suma)*100;
$cs=($cs/$suma)*100;
$ck=($ck/$suma)*100;
$ct=($ct/$suma)*100;
$o=($o/$suma)*100;
$j=($j/$suma)*100;
$c=($c/$suma)*100;
$can=($can/$suma)*100;
$caj=($caj/$suma)*100;
$t=($t/$suma)*100;
$ram=($ram/$suma)*100;
$tu=($tu/$suma)*100;
$un=($un/$suma)*100;





	 ?>






<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SERVI-RED</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="graficas/code/highcharts.js"></script>
<script src="graficas/code/modules/exporting.js"></script>
<script src="graficas/code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>



		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Materiales SERVI-RED'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
        name: 'MATERIALES',
        colorByPoint: true,
        data: [<?php
                
                ?>
            
            
            
            
            {
            name: 'Patch Panel',
            y: <?php 
echo $pp;
?>,



            sliced: true,
            selected: true
        }, {
            name: 'Pacth Cord',
            y: <?php 
echo $pc;
?>
        }, {
            name: 'Bobina de Cable',
            y: <?php 
echo $bc;
?>
        }, {
            name: 'Cable Stack',
            y: <?php 
echo $cs;
?>
        }, {
            name: 'Cable KVM',
            y: <?php 
echo $ck;
?>
        }, {
            name: 'Cable Telefónico',
            y: <?php 
echo $ct;
?>
        }, {
            name: 'Organizadores',
            y: <?php 
echo $o;
?>,
        }, 
        
        {
            name: 'Jack',
            y: <?php 
echo $j;
?>,
        }, {
            name: 'Conectores',
            y: <?php 
echo $c;
?>,
        }, {
            name: 'Canaletas',
            y: <?php 
echo $can;
?>,
        }, {
            name: 'Cajetines',
            y: <?php 
echo $caj;
?>,
        }, {
            name: 'Tapas',
            y: <?php 
echo $t;
?>,
        }, 
        
        {
            name: 'Ramplug',
            y: <?php 
echo $ram;
?>,
        }, 
        {
            name: 'Tuercas',
            y: <?php 
echo $tu;
?>,
        },
        
        {
            name: 'Uniones',
            y: <?php 
echo $un;
?>,
        }]
    }]
});
		</script>
	</body>
</html>
