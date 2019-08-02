<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="DataTables_2/datatables.min.css">
  <link rel="stylesheet" href="DataTables_2/DataTables-1.10.18/css/jquery.dataTables.min.css">
   <script type="text/javascript" src="jquery/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="jquery/js/jquery-1.9.1.js"></script>
</head>
<body>
      <div class="section group">
        <div class="col span_1_of_2">
  <canvas id="bar" width="989" height="494"></canvas>
</div>
</div>
<script type="text/javascript" src="Chart/Chart.min.js"></script>
<script type="text/javascript">
	
  var bar = document.getElementById("bar")
  var barChart = new Chart(bar,{
      type:'bar',
      data:{
            labels:['Red','Blue','Yellow','Green','Purple','Orange'],
            datasets:[{
              label: 'Nb of votes',
              data:[2,3,10,19,15,5],
              backgroundColor:[
              'rgba(255,99,132,0.2)',
              'rgba(54,162,235,0.2)',
              'rgba(255,206,86,0.2)',
              'rgba(75,192,192,0.2)',
              'rgba(153,102,255,0.2)',
              'rgba(255,159,64,0.2)',
              ],

              borderColor:[
              'rgba(255,99,132,0.2)',
              'rgba(54,162,235,0.2)',
              'rgba(255,206,86,0.2)',
              'rgba(75,192,192,0.2)',
              'rgba(153,102,255,0.2)',
              'rgba(255,159,64,0.2)',
              ],

              borderWidth: 1
            }]
      },

      options:{

          scales:{
            yAxes:[{
              ticks:{
                beginAtZero : true
              }
            }]
          }
      }
  })
</script>
</body>
</html>
