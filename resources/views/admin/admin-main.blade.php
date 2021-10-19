@extends('layouts.app')
@section('content')
<ul class="nav nav-pills mt-1 bg-light" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-est-tab" data-toggle="pill" href="#pills-est" role="tab" aria-controls="pills-est" aria-selected="true">Estadistica</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-hist-tab" data-toggle="pill" href="#pills-hist" role="tab" aria-controls="pills-hist" aria-selected="false">Historial de compras</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-create-tab" data-toggle="pill" href="#pills-create" role="tab" aria-controls="pills-create" aria-selected="false">Creacion de cuentas</a>
    </li>
</ul>
<div class="tab-content mt-5" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-est" role="tabpanel" aria-labelledby="pills-est-tab">

      <div class="main ml-5 mr-5">
        <div class="container">
            <!-- Chart's container -->
            <div id="chart" style="height: 500px;"></div>
            <!-- Charting library -->
            <script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
            <!-- Chartisan -->
            <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>


            <script>
                const chart = new Chartisan({
                    el: '#chart',
                    url: "@chart('book_chart')",
                    hooks: new ChartisanHooks()
                    .colors()
                    .responsive()
                    .beginAtZero()
                    .title('Los libros mas vendidos')
                    .datasets([{ 
                        type: 'bar', 
                        backgroundColor: [
                            'rgba(58, 179, 18)',
                            'rgba(255, 159, 64)',
                            'rgba(255, 205, 86)',
                            'rgba(75, 192, 192)',
                            'rgba(54, 162, 235)',
                            'rgba(153, 102, 255)',
                            'rgba(201, 203, 207)',
                            'rgba(255, 99, 132)',
                            'rgba(192, 72, 12)',
                            'rgba(255, 237, 39)',
                        ],
                        fill: false 
                        }, 'bar']),
                });
            </script>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="pills-hist" role="tabpanel" aria-labelledby="pills-hist-tab">
      <div class="main">
        <div class="container">
          <p>Mundo</p>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="pills-create" role="tabpanel" aria-labelledby="pills-create-tab">
      <div class="main">
        <div class="container">
            <p>Programacion</p>
        </div>
      </div>
    </div>
</div>
@endsection