<!DOCTYPE html>
<html lang="en">

    
    
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
<!--  Horizontal Tool Bar -->   
    <style>
        body {
            margin: 0;
        }
        
        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        
        ul.topnav li {
            float: left;
        }
        
        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        ul.topnav li a:hover:not(.active) {
            background-color: #111;
        }
        
        ul.topnav li a.active {
            background-color: #2304aa;
        }
        
        ul.topnav li.right {
            float: right;
        }
        
        @media screen and (max-width: 600px) {
            ul.topnav li.right,
            ul.topnav li {
                float: none;
            }
        }
        
       

    </style>
    
 
    <title> Universal Metal Forming 4.0 Portal </title>
</head>

<body>
    
        
<?php

include 'create_temperature.php';

?>
    
<!--  Horizontal Tool Bar --> 
    <ul class="topnav">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="setup.html">Setup</a></li>
        <li><a href="readme.html">Readme</a></li>
        <li class="right"><a href="#about">About</a></li>
    </ul>
    


<!--  MAIN TILE -->
    <h1> Universal Metal Forming 4.0 Portal </h1>


<!--  First board - Equipement & microcontroller selected  -->
    
    <h3 id="box_1">
        
  Monitored equipment<br>
   <?php
   $valor = $_GET["equipment"];
   echo "$valor ";
   ?><br>

  Microcontroler used<br>
   <?php
   $valor2 = $_GET["microcontroler"];
   echo "$valor2 ";
   ?><br>

 First variable monitored<br>
   <?php
   $var1 = $_GET["var1"];
   echo "$var1 ";
   ?><br>
   
 Second variable monitored<br>
   <?php
   $var2 = $_GET["var2"];
   echo "$var2 ";
   ?><br>
   
<!--  Second board - First variable selected line chart  --> 

<?php
     include 'connection.php';
	global $connect;
	$query = "SELECT id, temperature FROM `sensor` ORDER BY `id` DESC LIMIT 10";
	$result = mysqli_query($connect, $query);
	
	foreach($result as $data)
	{
	$dadosx[] = $data['id'];
	$dadosy[] = $data['temperature'];
	}
  mysqli_close($connect);
?>



</h3>
<p id="box_2">
  <canvas id="myChart" width="400" height="100"></canvas>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
  const ctx = document.getElementById('myChart');
  const temp = <?php echo json_encode($dadosx)?>;
  const time = <?php echo json_encode($dadosy)?>;
  

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: temp,
     
      datasets: [{
        label: 'temperature',
        data: time,
        borderWidth: 1
             }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
   myChart.update('none');
        chart.update();
        chart.refresh();
</script>
</a></p>

<!--  Third board - ??????????????  -->

<p id="box_2">
Last Conection

<?php
include 'connection.php';
$query = "SELECT * FROM `sensor` ORDER BY `id` DESC LIMIT 1";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
// echo "<br>Número do registro:   ". $row["id"];
// echo "<br>Valor da temperatura:    ". $row["temperature"];
echo "<br> Last registered:    ". $row["time"];
// echo "<br>";
?>

</a></p>

<!--  Fourth board - ??????????????  -->

<p id="box_2">

//<?php

//if($_SERVER["REQUEST_METHOD"]=="GET"){
//	include 'connection.php';
//	showTemperature();
//}

//function showTemperature()
//{
//	global $connect;
	
	//$query = "SELECT * FROM `sensor` WHERE 1";
//	$query = "SELECT * FROM `sensor`  \n"

//    . " ORDER BY `id` DESC LIMIT 10";
    
    
    
//	$result = mysqli_query($connect, $query);
//	$number_of_rows = mysqli_num_rows($result);
//	$number_of_lenght = mysqli_fetch_lengths($result);

//	echo "<br>Numero de linhas   " . $number_of_rows;

	
//	$row = mysqli_fetch_assoc($result);

	
// echo "<br>Número do registro:   ". $row["id"];
// echo "<br>Valor da temperatura:    ". $row["temperature"];
// echo "<br>Horário do registro:    ". $row["time"];
// echo "<br>";
 
 
//$sql = "SELECT * FROM `sensor`  \n"

//    . " ORDER BY `id` DESC LIMIT 10";
    
//$result = mysqli_query($connect,$sql);

// Numeric array
//$row = mysqli_fetch_array($result, MYSQLI_NUM);
//printf ("%s %s\n", $row[0], $row[0]);



//echo "<br>";
// Associative array
//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//echo "Temperature".$row["temperature"];
//echo "CCCCCCCC";

//echo "<br>";
//echo "<br>";
//print json_encode($row);
//echo "<br>";
//echo "<br>";
//echo "<br>";

//printf ("ids: %s temperaturas: %s\n", $row["id"], $row["temperature"]);
//echo "<br>";

//$cont = 40;

//$sql = "SELECT temperature FROM `sensor`  \n"

//    . " ORDER BY `id` DESC LIMIT $cont";

//if ($result = mysqli_query($connect, $sql)) {
  // Fetch one and one row
//  while ($row = mysqli_fetch_array($result)) {
//    printf ("%s\n",$row[0]);
    
 //   echo "<br>";
    
    //ptint json_encode($row[0]);
    //printf ("%s\n",$row[0]);
    //print json_encode($row[0]);
    //echo "<br>";
//  }
//  mysqli_free_result($result);
//}
//echo "<br>";
//echo "<br>";
//echo "<br>";
//$cont=0;
//$sql = "SELECT temperature FROM `sensor` ORDER BY `id` DESC LIMIT 15";
//$result = mysqli_query($connect, $sql);

//while($cont<=4)
//{
//$row = mysqli_fetch_row($result);
//printf ("%s\n",$row[0]);

//$datarray[$cont] = $row[$cont];

//echo "<br>";

//$cont++;
//}
//echo "<br>";
//echo "<br>";
//echo $datarray[0];
//echo $datarray[1];
//echo $datarray[2];
//echo $datarray[3];
//echo $datarray[4];
//echo "<br>";
//echo "<br>";

//echo json_encode($datarray);



// Free result set
//mysqli_free_result($r);

//printf ("%s (%s)\n", $r[0]);
	
//mysqli_close($connect);


	
//}
//?>



</a></p>

</body>
</html>
