<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);


      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Month', 'Bolivia', 'Meta'],
         ['2004/05',  165,      1000.6],
         ['2005/06',  135,      900],
         ['2006/07',  157,      1200],
         ['2007/08',  139,      800.4],
         ['2008/09',  136,      900.6]
      ]);

    var options = {
      title : 'Monthly Coffee Production by Country',
      vAxis: {title: 'Produção'},
      hAxis: {title: 'Mês'},
      seriesType: 'bars',
      series: {1: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width:100%; min-height: 800px"></div>
  </body>
</html>
