@extends('layouts.admin')
@extends('layouts.styles')
@extends('layouts.scripts')
@extends('layouts.navbar')
@extends('layouts.footer')
@section('pageStyles')
<style>
  .has-error {
    color: red;
  }
</style>
@endsection

@section('content')
<div class="row mt-2">
  <div class="col-md-3">
    <div class="info-box bg-success">
      <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Vehicles</span>
        <span class="info-box-number">{{ $analysis['vehicle_count']}}</span>
        <!-- <div class="progress">
          <div class="progress-bar"></div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-box bg-gradient-warning">
      <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Spare Parts</span>
        <span class="info-box-number">{{ $analysis['spare_part_count']}}</span>
        <!-- <div class="progress">
          <div class="progress-bar"></div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-box bg-gradient-primary">
      <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Sold Vehicles</span>
        <span class="info-box-number">{{ $analysis['saledPostCount'] }}</span>
        <div class="progress">
          <progress class="progress-bar" id="sold_post" value="100" max="100"></progress>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-box bg-gradient-primary">
      <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Pending Vehicles</span>
        <span class="info-box-number">{{ $analysis['pending_post_count']}}</span>
        <div class="progress">
          <progress class="progress-bar" id="pending_post_count" value="0" max="100"></progress>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Highest Sold Vehicles</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered" id="highest_sale_vehicles">
          <thead>
            <tr>
              <th style="width: 5em">#</th>
              <th style="width: 10em">Vehicle Brand</th>
              <th style="width: 10em">Created Date</th>
              <!-- <th style="width: 5em">Label</th> -->
            </tr>
          </thead>
          <tbody>
            @foreach($analysis['heighest_sold_vehicles'] as $highestSale)
            <tr>
              <td>{{++$loop->index}}</td>
              <td>{{$highestSale['make_name']}}</td>
              <td>{{\Carbon\Carbon::parse($highestSale['created_at'])->format('Y-m-d')}}</td>
              <!-- <td><span class="badge bg-danger"> % </span></td> -->
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <!-- AREA CHART -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Sales of Year</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <div id="areaChartTwo" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="col-md-6">
    <!-- LINE CHART -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Sales of Year</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <div id="lineChartTwo" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <!-- AREA CHART -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Sales of Yeart</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="col-md-6">
    <!-- BAR CHART -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Sales of Year</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <!-- LINE CHART -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Sales of Year</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="col-md-6">
    <!-- STACKED BAR CHART -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Sales of Year</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection

@section('pageScripts')
<script>
  $(function() {

    $('#highest_sale_vehicles').DataTable({
      destroy: true,
      processing: true,
      serverSide: false,
      responsive: true,
      searching: false,
      "pageLength": 10,
    });

    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    let url = "./api/get_current_sales";
    var sold_vehicle_array;
    var pending_sales;

    ajaxRequest("GET", url, null, function(result) {
      console.log(result);
      sold_vehicle_array = result['vehicle_sales'];
      pending_sales = result['pending_sales'];

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

      var areaChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Auguest', 'September', 'November', 'December'],
        datasets: [{
            label: 'Sold Vehicles',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: sold_vehicle_array
          },
          {
            label: 'Pending Sale Vehicles',
            backgroundColor: 'rgba(210, 214, 222, 1)',
            borderColor: 'rgba(210, 214, 222, 1)',
            pointRadius: false,
            pointColor: 'rgba(210, 214, 222, 1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: pending_sales
          },
        ]
      }

      var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false,
            }
          }],
          yAxes: [{
            gridLines: {
              display: false,
            }
          }]
        }
      }

      // This will get the first returned node in the jQuery collection.
      new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
      })

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
      var lineChartOptions = $.extend(true, {}, areaChartOptions)
      var lineChartData = $.extend(true, {}, areaChartData)
      lineChartData.datasets[0].fill = false;
      lineChartData.datasets[1].fill = false;
      lineChartOptions.datasetFill = false

      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = $.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp1
      barChartData.datasets[1] = temp0

      var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
      }

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var stackedBarChartData = $.extend(true, {}, barChartData)

      var stackedBarChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }

      new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
      })

      function getSize(elementId) {
        return {
          width: document.getElementById(elementId).offsetWidth,
          height: document.getElementById(elementId).offsetHeight,
        }
      }

      let dataTwo = [
        [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
        sold_vehicle_array,
        pending_sales
      ];

      //--------------
      //- AREA CHART -
      //--------------

      const optsAreaChart = {
        ...getSize('areaChartTwo'),
        scales: {
          x: {
            time: false,
          },
          y: {
            range: [0, 100],
          },
        },
        series: [{},
          {
            fill: 'rgba(60,141,188,0.7)',
            stroke: 'rgba(60,141,188,1)',
          },
          {
            stroke: '#c1c7d1',
            fill: 'rgba(210, 214, 222, .7)',
          },
        ],
      };

      let areaChartTwo = new uPlot(optsAreaChart, dataTwo, document.getElementById('areaChartTwo'));

      const optsLineChart = {
        ...getSize('lineChartTwo'),
        scales: {
          x: {
            time: false,
          },
          y: {
            range: [0, 100],
          },
        },
        series: [{},
          {
            fill: 'transparent',
            width: 5,
            stroke: 'rgba(60,141,188,1)',
          },
          {
            stroke: '#c1c7d1',
            width: 5,
            fill: 'transparent',
          },
        ],
      };

      let lineChartTwo = new uPlot(optsLineChart, dataTwo, document.getElementById('lineChartTwo'));

      window.addEventListener("resize", e => {
        areaChartTwo.setSize(getSize('areaChartTwo'));
        areaChartTwo.setSize(getSize('lineChartTwo'));
      })
    })

  });
</script>
@endsection