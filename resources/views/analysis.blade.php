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

  .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }

  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }

  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }

  input:checked+.slider {
    background-color: #2196F3;
  }

  input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }

  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }

  .typeahead,
  .tt-query,
  .tt-hint {
    height: 30px;
    padding: 8px 12px;
    font-size: 24px;
    line-height: 30px;
    border: 2px solid #ccc;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    outline: none;
  }

  .typeahead {
    background-color: #fff;
  }

  .typeahead:focus {
    border: 2px solid #0097cf;
  }

  .tt-query {
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  }

  .tt-hint {
    color: #999
  }

  .tt-dropdown-menu {
    width: 422px;
    margin-top: 3px;
    padding: 8px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
  }

  .tt-suggestion {
    padding: 3px 20px;
    font-size: 18px;
    line-height: 24px;
    color: black;
    background-color: white;
  }

  .tt-suggestion.tt-cursor {
    color: #fff;
    background-color: #0097cf;
  }

  .tt-suggestion p {
    margin: 0;
    font-size: 18px;
    text-align: left;
  }

  .twitter-typeahead {
    width: 100%;
  }

  footer {
    position: relative;
    padding: 10px 10px 0px 10px;
    bottom: 0;
    width: 100%;
    /* Height of the footer*/
    height: 20em;
    background: grey;
  }
</style>
@endsection

@section('content')
<div class="row mt-2">
  <div class="col-md-3">
    <div class="info-box bg-success">
      <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Vehicles</span>
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
        <span class="info-box-text">Spare Parts</span>
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
        <span class="info-box-text">Sold Vehicles</span>
        <span class="info-box-number">{{ $analysis['saledPostCount'] }}</span>
        <div class="progress">
          <div class="progress-bar" id="sold_post"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-box bg-gradient-primary">
      <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pending Vehicles</span>
        <span class="info-box-number">{{ $analysis['pending_post_count']}}</span>
        <div class="progress">
          <div class="progress-bar" id="pending_post_count"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Highest Sold Vehicles</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered" id="highest_sale_vehicles">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Vehicle Brand</th>
              <th>Progress</th>
              <th style="width: 40px">Label</th>
            </tr>
          </thead>
          <tbody>
            @foreach($analysis['heighest_sold_vehicles'] as $highestSale)
            <tr>
              <td>{{$loop->index}}</td>
              <td>{{$highestSale['vehicle']['vehicle_make']['make_name']}}</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td><span class="badge bg-danger"> % </span></td>
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
        <h3 class="card-title">Area Chart</h3>

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
        <h3 class="card-title">Bar Chart</h3>

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
        <h3 class="card-title">Line Chart</h3>

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
        <h3 class="card-title">Stacked Bar Chart</h3>

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
      dom: 'Bfrtip',
      "pageLength": 10,
    });
    let sold_percentage = "{{($analysis['saledPostCount'] / $analysis['vehicle_count']) * 100}}";
    let pending_percentage = "{{($analysis['pending_post_count'] / $analysis['vehicle_count']) * 100}}";

    $('#sold_post').html(sold_percentage + '%');
    $('#pending_post_count').html(pending_percentage + '%');

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
            label: 'Vehicles',
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
            label: 'Spareparts',
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
    })
  });
</script>
@endsection