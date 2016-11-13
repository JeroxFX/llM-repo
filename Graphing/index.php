<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

$c_title = "";
$c_data = "";

if(isset($_GET['c_title'])){
   $c_title = $_GET['c_title'];
}

if(isset($_GET['c_data'])){
   $c_data = $_GET['c_data'];
}

//$output = "['hh:mm:dd:mm:yy',  32],['hh:mm:dd:mm:yy',  19]";

$output = "";

$handle = fopen("$c_data", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $pieces = explode(" ", $line);
        $l_date = $pieces[0];
        $l_rtime = $pieces[1];
        
        $output .= "['$l_date', $l_rtime],";
    }

    fclose($handle);
} else {
    $output = "['ERROR: File is busy or i have no permission', 999]";
} 

?>

<html>
    <head>
        <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['hh:mm:dd:mm:yy', '<?php echo $c_title;?>'],
                
            <?php echo $output;?>
          //['hh:mm:dd:mm:yy',  32]
        ]);

        var options = {
          title: '<?php echo $c_title;?>',
          hAxis: {title: '<?php echo $c_title;?>',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    </head>
    <body style=background-color:#263238;>
            <div id="chart_div" style="color: #263238; margin:0; width:100%;"></div>
    </body>
</html>