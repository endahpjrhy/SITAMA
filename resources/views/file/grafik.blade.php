@extends('layouts.app')
@section('content')

@php
    $blm = $data->where('status', 1)->count();
    $terima = $data->where('status', 3)->count();
    $tolak = $data->where('status', 4)->count();
    $total = $data->where('status', '!=', NULL)->count();
    $laki = $data->where('status', '!=', NULL)->where('jenis_kelamin', kelamin()[0])->count();
    $perempuan = $data->where('status', '!=', NULL)->where('jenis_kelamin', kelamin()[1])->count();

@endphp
<div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{$blm}} </div>
                    <div>Belum Dikonfirmasi</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-success">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>

                    <div class="fs-4 fw-semibold">{{$terima}} </div>
                    <div>Diterima</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart2" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-danger">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{$tolak}} </div>
                    <div>Ditolak</div>
                  </div>
                 
                </div>
                <div class="c-chart-wrapper mt-3" style="height:70px;">
                  <canvas class="chart" id="card-chart3" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{$total}} </div>
                    <div>Total Pendaftar</div>
                  </div>
                  
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart4" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
<div class="card mb-4">
            <div class="card-body">
<div class="d-flex justify-content-between">
                <div>
                  <h4 class="card-title mb-0">Grafik Pendaftaran</h4>

                </div>
              </div>
              <div class="c-chart-wrapper text-center" style="height:600px;margin-top:40px;">
                  <canvas  class="chart" id="myChart" style="width:100%;max-width:1200px"></canvas>

                {{-- <canvas class="chart" id="main-chart" height="300"></canvas> --}}
              </div>              
            </div>
          </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
var xValues = ["Diterima", "Ditolak", "Total"];
var yValues = [{{$terima}}, {{$tolak}}, {{$total}}];
var barColors = ["green", "red","orange"];
  new Chart(myChart, {
    type: 'bar',
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,

        label: xValues,
        data: yValues,
        // borderWidth: 1
      }]
    },
    options: {
       legend: {
        display: false
    },
    tooltips: {
        callbacks: {
           label: function(tooltipItem) {
                  return tooltipItem.yLabel;
           }
        }
    }
      // scales: {
      //   y: {
      //     beginAtZero: true
      //   }
      // }
    }
  });
</script>
 
{{-- <script src="/assets/js/main.js"></script> --}}
@endsection