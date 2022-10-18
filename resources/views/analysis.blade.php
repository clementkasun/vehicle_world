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

  .container-fluid {
    max-width: 1500px;
  }
</style>
@endsection

@section('content')
<div class="row mt-2">
  <div class="col-md-3">
    <div class="info-box bg-success">
      <span class="info-box-icon"><i class="fa-solid fa-car"></i></span>
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
      <span class="info-box-icon"><i class="fa-solid fa-gear"></i></span>
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
    <div class="info-box bg-gradient-secondary">
      <span class="info-box-icon"><i class="fa-solid fa-car text-success"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Sold Vehicles</span>
        <span class="info-box-number">{{ $analysis['saledPostCount'] }}</span>
        <div class="progress">
          <progress class="progress-bar w-100" id="sold_post" max="100"></progress>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-box bg-gradient-primary">
      <span class="info-box-icon"><i class="fa-solid fa-car text-warning"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total Pending Vehicles</span>
        <span class="info-box-number">{{ $analysis['pending_post_count']}}</span>
        <div class="progress">
          <progress class="progress-bar w-100" value="100" id="pending_post_count" max="100"></progress>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Highest Sold Vehicles (This month)</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="highest_sale_vehicles">
          <thead>
            <tr>
              <th style="width: 5em">#</th>
              <th>Vehicle Brand</th>
              <th>Created Date</th>
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
  <div class="col-md-6">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Highest Sellers (This month)</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="highest_sallers">
          <thead>
            <tr>
              <th style="width: 5em">#</th>
              <th>Seller Name</th>
              <th>Brand</th>
              <th>Created Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach($analysis['heighest_sellers'] as $highestSeller)
            <tr>
              <td>{{++$loop->index}}</td>
              <td>{{$highestSeller['seller_name']}}</td>
              <td>{{$highestSeller['make_name']}}</td>
              <td>{{\Carbon\Carbon::parse($highestSale['created_at'])->format('Y-m-d')}}</td>
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
    <!-- LINE CHART -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Monthly sales</h3>

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
    <!-- LINE CHART -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Year wise sales</h3>

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
          <canvas id="lineChartTwo" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <!-- DONUT CHART -->
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Vehicle wise sales</h3>

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
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="col-md-6">
    <!-- BAR CHART -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Monthly sales and pending sales</h3>

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
      "bLengthChange": false,
    });

    $('#highest_sallers').DataTable({
      destroy: true,
      processing: true,
      serverSide: false,
      responsive: true,
      searching: false,
      "pageLength": 10,
      "bLengthChange": false,
    });

    let per_url = "./api/get_percentages";

    ajaxRequest("GET", per_url, null, function(result) {
     
      $('#sold_post').val(result['saled_vehi_per']);
      $('#pending_post_count').val(result['pending_vehi_per']);
    
    });

    let url = "./api/get_monthly_sales";
    var sold_vehicle_array;
    var pending_sales;

    ajaxRequest("GET", url, null, function(result) {
      sold_vehicle_array = result['vehicle_sales'];
      pending_sales = result['pending_sales'];

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

      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')

      // This will get the first returned node in the jQuery collection.
      new Chart(lineChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
      })

      //-------------
      //- LINE CHART -
      //--------------
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

    })

    let url_yearly = "./api/get_yearly_sales";
    var years = [];
    var yearly_data = [];

    ajaxRequest("GET", url_yearly, null, function(result) {
      years = result['years'];
      yearly_data = result['counts'];

      var areaChartData = {
        labels: years,
        datasets: [{
          label: 'Sales',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: yearly_data
        }, ]
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

      var lineChartCanvas = $('#lineChartTwo').get(0).getContext('2d')

      // This will get the first returned node in the jQuery collection.
      new Chart(lineChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
      })

      //-------------
      //- LINE CHART -
      //--------------
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
    });

  });

  let vehicle_wise_data_url = "./api/get_sales_vehicle_wise";
  var labels = [];
  var counts = [];

  ajaxRequest("GET", vehicle_wise_data_url, null, function(result) {
    labels = result.labels;
    counts = result.counts;
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
      labels: labels,
      datasets: [{
        data: counts,
        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }]
    }
    var donutOptions = {
      maintainAspectRatio: false,
      responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  });
</script>
@endsection