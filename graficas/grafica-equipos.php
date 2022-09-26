
<?php 

require ("conexion-dos.php");
$r=0;
$s=0;
$f=0;
$b=0;
$p=0;
$dis=0;
$me=0;
$cpu=0;
$mo=0;
$ser=0;
$ups=0;
$t=0;
$mo=0;
$re=0;
$reg=0;
$dd=0;
$tv=0;
$wi=0;


 ?>


<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Router'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $r=$r+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Switch'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $s=$s+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Firewall'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $f=$f+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Bahía'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $b=$b+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Procesador'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $p=$p+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Disipador'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $dis=$dis+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Memoria Ram'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $me=$me+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Cpu'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $cpu=$cpu+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Monitor'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $mo=$mo+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Servidor'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $ser=$ser+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Ups'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $ups=$ups+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Teclados'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $t=$t+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Mouse'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $mo=$mo+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Regulador'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $reg=$reg+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Regleta'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $reg=$reg+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Disco Duros'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $dd=$dd+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Tv'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $tv=$tv+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from equipo where 'Wifi'=nombre;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $wi=$wi+1; 
   
    ?>	
<?php 
}
?>



    






		
	 





<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="graficas/code/highcharts.js"></script>
<script src="graficas/code/modules/exporting.js"></script>
<script src="graficas/code/modules/export-data.js"></script>

<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>



		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'SERVI-RED Equipos'
    },
    subtitle: {
        text: ' <a href="http://servired.ddns.net/">servired.ddns.net</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
    },
    series: [{
        name: 'Population',
        data: [
            
            ['Router', <?php echo $r;?>],
            ['Switch', <?php echo $s;?>],
            ['Firewall', <?php echo $f;?>],
            ['Bahía', <?php echo $b;?>],
            ['Procesador', <?php echo $p;?>],
            ['Disipador', <?php echo $dis;?>],
            ['Memoria Ram', <?php echo $me;?>],
            ['Cpu', <?php echo $cpu;?>],
            ['Monitor', <?php echo $mo;?>],
            ['Servidor', <?php echo $ser;?>],
            ['Ups', <?php echo $ups;?>],
            ['Teclados', <?php echo $t;?>],
            ['Mouse', <?php echo $mo;?>],
            ['Regulador', <?php echo $re;?>],
            ['Regleta', <?php echo $reg;?>],
            ['Disco Duros', <?php echo $dd;?>],
            ['Tv', <?php echo $tv;?>],
            ['Wifi',<?php echo $wi;?>]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
		</script>
	</body>
</html>
