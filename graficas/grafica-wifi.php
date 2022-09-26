<?php 

require ("conexion-dos.php");
$s2=0;
$s1=0;
$pb=0;
$p1=0;
$p2=0;
$p3=0;
$p4=0;


 ?>

<?php
require ("conexion-dos.php");

$sql="SELECT * from wifi where 'Sotano 2'=ubicacion;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $s2=$s2+1; 
   
    ?>	
<?php 
}
?>

<?php
require ("conexion-dos.php");

$sql="SELECT * from wifi where 'Sotano 1'=ubicacion;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $s1=$s1+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from wifi where 'Planta Baja'=ubicacion;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $pb=$pb+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from wifi where 'Piso 1'=ubicacion;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $p1=$p1+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from wifi where 'Piso 2'=ubicacion;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $p2=$p2+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from wifi where 'Piso 3'=ubicacion;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $p3=$p3+1; 
   
    ?>	
<?php 
}
?>
<?php
require ("conexion-dos.php");

$sql="SELECT * from wifi where 'Piso 4'=ubicacion;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
 ?>

    <?php

    $p4=$p4+1; 
   
    ?>	
<?php 
}
?>

<?php 
$suma=$s2+$s1+$pb+$p1+$p2+$p3+$p4;
?>

<?php 

$ts2=($s2/$suma)*100;
$ts1=($s1/$suma)*100;
$tpb=($pb/$suma)*100;
$tp1=($p1/$suma)*100;
$tp2=($p2/$suma)*100;
$tp3=($p3/$suma)*100;
$tp4=($p4/$suma)*100;

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
<script src="graficas/code/modules/data.js"></script>
<script src="graficas/code/modules/drilldown.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Wifi Por Ubicacion'
    },
    subtitle: {
        text: ' SERVI-RED'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Wifi por Ubicacion",
            colorByPoint: true,
            data: [
                {
                    name: "Sotano 2",
                    y:<?php echo $ts2;?>,
                    drilldown: "Sotano 2"
                },
                {
                    name: "Sotano 1",
                    y:<?php echo $ts1;?>,
                    drilldown: "Sotano 1"
                },
                {
                    name: "Planta Baja",
                    y:<?php echo $tpb;?>,
                    drilldown: "Planta Baja"
                },
                {
                    name: "Piso 1",
                    y:<?php echo $tp1;?>,
                    drilldown: "Piso 1"
                },
                {
                    name: "Piso 2",
                    y:<?php echo $tp2;?>,
                    drilldown: "Piso 2"
                },
                {
                    name: "Piso 3",
                    y:<?php echo $tp3;?>,
                    drilldown: "Piso 3"
                },
                {
                    name: "Piso 4",
                    y:<?php echo $tp4;?>,
                    drilldown: "Piso 4"
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Chrome",
                id: "Chrome",
                data: [
                    [
                        "v65.0",
                        0.1
                    ],
                    [
                        "v64.0",
                        1.3
                    ],
                    [
                        "v63.0",
                        53.02
                    ],
                    [
                        "v62.0",
                        1.4
                    ],
                    [
                        "v61.0",
                        0.88
                    ],
                    [
                        "v60.0",
                        0.56
                    ],
                    [
                        "v59.0",
                        0.45
                    ],
                    [
                        "v58.0",
                        0.49
                    ],
                    [
                        "v57.0",
                        0.32
                    ],
                    [
                        "v56.0",
                        0.29
                    ],
                    [
                        "v55.0",
                        0.79
                    ],
                    [
                        "v54.0",
                        0.18
                    ],
                    [
                        "v51.0",
                        0.13
                    ],
                    [
                        "v49.0",
                        2.16
                    ],
                    [
                        "v48.0",
                        0.13
                    ],
                    [
                        "v47.0",
                        0.11
                    ],
                    [
                        "v43.0",
                        0.17
                    ],
                    [
                        "v29.0",
                        0.26
                    ]
                ]
            },
            {
                name: "Firefox",
                id: "Firefox",
                data: [
                    [
                        "v58.0",
                        1.02
                    ],
                    [
                        "v57.0",
                        7.36
                    ],
                    [
                        "v56.0",
                        0.35
                    ],
                    [
                        "v55.0",
                        0.11
                    ],
                    [
                        "v54.0",
                        0.1
                    ],
                    [
                        "v52.0",
                        0.95
                    ],
                    [
                        "v51.0",
                        0.15
                    ],
                    [
                        "v50.0",
                        0.1
                    ],
                    [
                        "v48.0",
                        0.31
                    ],
                    [
                        "v47.0",
                        0.12
                    ]
                ]
            },
            {
                name: "Internet Explorer",
                id: "Internet Explorer",
                data: [
                    [
                        "v11.0",
                        6.2
                    ],
                    [
                        "v10.0",
                        0.29
                    ],
                    [
                        "v9.0",
                        0.27
                    ],
                    [
                        "v8.0",
                        0.47
                    ]
                ]
            },
            {
                name: "Safari",
                id: "Safari",
                data: [
                    [
                        "v11.0",
                        3.39
                    ],
                    [
                        "v10.1",
                        0.96
                    ],
                    [
                        "v10.0",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "v9.0",
                        0.13
                    ],
                    [
                        "v5.1",
                        0.2
                    ]
                ]
            },
            {
                name: "Edge",
                id: "Edge",
                data: [
                    [
                        "v16",
                        2.6
                    ],
                    [
                        "v15",
                        0.92
                    ],
                    [
                        "v14",
                        0.4
                    ],
                    [
                        "v13",
                        0.1
                    ]
                ]
            },
            {
                name: "Opera",
                id: "Opera",
                data: [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            }
        ]
    }
});
		</script>
	</body>
</html>
