<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <script type="text/javascript">
        google.charts.load('current',{'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', <?php echo 30 ?>],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch Tv', 2],
                ['Sleep', 7],
                ['Cute', 1]
            ]);

            var options = {
                title: 'Job Employment'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <!-- endofChartingexample -->

 
    
    <!-- 1stbatch for cdn for google charts -->
   

    <!-- end of cdn 1st charts -->
</body>
</html>
</body>
</html>