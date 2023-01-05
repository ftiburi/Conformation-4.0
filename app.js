var ctx = document.getElementById('myChart');


var chart = ctx.getContext("2d");

chart.fillstyle = "red";
chart.fillRect(0, 0, 100, 100);

chart.fillstyle = "yellow";
chart.fillRect(200, 0, 100, 100);

chart.fillstyle = "green";
chart.fillRect(230, 0, 50, 100);