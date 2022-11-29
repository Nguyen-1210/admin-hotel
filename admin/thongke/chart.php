<<<<<<< HEAD
<div class="row">

<div id="piechart"></div>
=======
<link rel="stylesheet" href="./css/components/list.css">
<div class="dash-content">
    <div class="title" style="margin: 40px;">
       
    </div>

<div id="piechart" style="width: 100%;height: 400px;"></div>
>>>>>>> chart

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
<<<<<<< HEAD
    ['Task', 'Hours per Day'],
    <?php
        $tongdm = count($listthongke);
        $i = 1;
=======
    ['Task', 'Doanh thu '],
    <?php
        $tongdm = count($listthongke);
        $i = 1;
        
>>>>>>> chart
        foreach ($listthongke as $thongke) {
            extract($thongke);

            if($i == $tongdm) $dauphay = ""; else $dauphay = ",";
<<<<<<< HEAD
            echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
            $i += 1;
        }
    
=======
            echo "['".$thongke['tendm']."', ".$thongke['maxprice']."]".$dauphay;
            $i += 1;
        }
        
>>>>>>> chart
    ?>
]);

  // Optional; add a title and set the width and height of the chart
<<<<<<< HEAD
  var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':1100, 'height':800};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
=======
  var options = {title:'Thống kê sản phẩm theo danh mục',
  
};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.LineChart(document.getElementById('piechart'));
//   Chart.defaults.backgroundColor = '#9BD0F5';
>>>>>>> chart
  chart.draw(data, options);
}
</script>
</div>