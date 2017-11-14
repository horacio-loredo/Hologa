<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Month', 'Tarjeta Amiga', 'Famsa', 'Coppel', 'Metro', '', 'linea'],
         ['2017/08',  165,      938,         522,             998,           0,      165],  
         ['2017/09',  135,      1120,        599,             1268,          0,      135],
         ['2017/10',  157,      1167,        587,             807,           0,      157],
         ['2017/11',  139,      1110,        615,             968,           0,      139],
         ['2017/12',  136,      691,         629,             1026,          0,      136]
      ]);

    var options = {
      title : 'Recuperacion Mensual Sedi',
      vAxis: {title: 'Monto'},
      hAxis: {title: 'Carteras 2017'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
