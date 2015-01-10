<script type="text/javascript" src="https://www.google.com/jsapi"></script>



<div class="main-section">

  <div class="row text-center">

    <div class="large-12 columns">
      <h2>Entwicklung</h2>
      <div class="padding-bottom" id="chart_line"></div>
    </div>
  </div>

  <div class="counter-area-6">
    <div class="row text-center">
      <div class="medium-6 columns">
        <h2>Projekte</h2>
        <div id="chart_projects"></div>
      </div>
      <div class="medium-6 columns">
        <h2>Bewerbungen</h2>
        <div id="chart_bewerbungen"></div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create Project-chart
        var data1 = new google.visualization.DataTable();
        data1.addColumn('string', 'Topping');
        data1.addColumn('number', 'Slices');
        data1.addRows([
          ['aktuell', 3],
          ['abgeschlossen', 1],
          ['ausstehend', 1]
          ]);

        // Set chart options
        var options1 = {
          'colors': ['#32aebd', '#293c4e', '#ff6c60'],
          'backgroundColor': 'transparent'

        };
        var chart1 = new google.visualization.PieChart(document.getElementById('chart_projects'));
        chart1.draw(data1, options1);

        // Create Bewerbung-Chart
        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', 'Topping');
        data2.addColumn('number', 'Slices');
        data2.addRows([
          ['angenommen', 2],
          ['abgelehnt', 14],
          ['ausstehend', 3],
          ]);

        // Set chart options
        var options2 = {

          'colors': ['#32aebd', '#293c4e', '#ff6c60'],
          'backgroundColor': 'transparent'

        };
        var chart2 = new google.visualization.PieChart(document.getElementById('chart_bewerbungen'));
        chart2.draw(data2, options2);


// Create line chart
var data_linechart = google.visualization.arrayToDataTable([
  ['', 'Bewerbungen', 'Projekte'],
  ['Jänner',  4,      0],
  ['Februar',  13,      3],
  ['März',  6,      1],
  ['April',  2,      0],
  ['Mai',  19,      4],
  ['Juni',  14,      2],
  ['Juli',  4,      0],
  ['August',  13,      3],
  ['September',  6,      3],
  ['Oktober',  2,      0],
  ['November',  11,      4],
  ['Dezember',  20,      2]
  ]);

var options_linechart = {
  title: '',
  backgroundColor: 'transparent',
  colors: ['#afafaf', '#32aebd'],
  hAxis: {title: '',  titleTextStyle: {color: '#333'}},
  vAxis: {minValue: 0}
};

var chart_linechart = new google.visualization.AreaChart(document.getElementById('chart_line'));
chart_linechart.draw(data_linechart, options_linechart);


}
</script>
