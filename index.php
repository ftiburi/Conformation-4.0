<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

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
    <title>Conformation 4.0 Portal </title>
</head>

<body>
    <ul class="topnav">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="setup.html">Setup</a></li>
        <li><a href="readme.html">Readme</a></li>
        <li class="right"><a href="#about">About</a></li>
    </ul>
    <h1>Conformation 4.0 </h1>
    <h3 id="box_1">Monitored equipment<br>
    <?php
  $valor = $_GET["equipment"];
  echo "$valor ";?><br>

  Microcontroler used<br>
    <?php
  $valor2 = $_GET["microcontroler"];
  echo "$valor2 ";
   ?>
</h3>
<p id="box_2">
  <canvas id="myChart" width="400" height="100"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</body>
<?php
include 'show_temperature_1_element.php';
include 'create_temperature.php';
?>
<p id="box_2">
<script>
  const ctx = document.getElementById('myChart');
  

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['1', '2', '3', '4', '5', '6'],
      datasets: [{
        label: 'temperature',
        data: [0, 1, 2, 4, 5, 0],
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
</script>
</a></p>

<p id="box_2"><a href="setup.html">SETUP</a></p>

</html>