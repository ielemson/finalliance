@php
    $setting = \App\Models\Setting::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
  <meta name="keyword" content="AVIO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
  <title>{{$setting->website_title}}  :: Dashboard</title>
  <!-- Application vendor css url -->
  <link rel="stylesheet" href="{{asset('dashboard/cssbundle/dataTables.min.css')}}">
  <!-- project css file  -->
  <link rel="stylesheet" href="{{asset('dashboard/css/avio-style.css')}}">
  <!-- Jquery Core Js -->
  <script src="{{asset('dashboard/js/plugins.js')}}"></script>
</head>

<body data-avio="theme-blue">
@yield('content')
  <!-- project js file url -->
  <!-- Jquery Page Js -->
  <script src="{{asset('dashboard/js/theme.js')}}"></script>
  <!-- Plugin Js -->
  <script src="{{asset('dashboard/js/bundle/apexcharts.bundle.js')}}"></script>
  <script src="{{asset('dashboard/js/bundle/dataTables.bundle.js')}}"></script>
  <!-- Jquery Page Js -->
  <script>
    // AVIO Revenue
    var options = {
      chart: {
        height: 260,
        type: 'line',
        toolbar: {
          show: false,
        },
      },
      colors: ['var(--chart-color1)', 'var(--chart-color5)'],
      series: [{
        name: 'Income',
        type: 'line',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
      }, {
        name: 'Expenses',
        type: 'line',
        data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
      }],
      stroke: {
        width: [2, 2]
      },
      labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
      xaxis: {
        type: 'datetime'
      },
      yaxis: [{
        title: {
          text: 'Income',
        },
      }, {
        opposite: true,
        title: {
          text: 'Expenses'
        }
      }]
    }
    var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);
    chart.render();
    // Sales by Category
    var options = {
      chart: {
        height: 280,
        type: 'donut',
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        show: true,
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      series: [55, 35, 10],
    }
    var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);
    chart.render();
    // Uses of Energy
    $(document).ready(function() {
      var options = {
        chart: {
          height: 335,
          type: 'heatmap',
          toolbar: {
            show: false,
          },
        },
        dataLabels: {
          enabled: false
        },
        grid: {
          padding: {
            right: 0
          }
        },
        colors: ["#ffc122"],
        series: [{
          name: 'Kitchen',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Apple Tv',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Sound Ststem',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Air Conditioner',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Fridge',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Washing Machine',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Bath Room',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Garden',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }, {
          name: 'Store Room',
          data: generateHeatmapData(8, {
            min: 0,
            max: 90
          })
        }],
      }
      var chart = new ApexCharts(document.querySelector("#apex-UsesofEnergy"), options);

      function generateHeatmapData(count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
          var x = 'D' + (i + 1).toString();
          var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
          series.push({
            x: x,
            y: y
          });
          i++;
        }
        return series;
      }
      chart.render();
    });
  </script>
</body>


</html>