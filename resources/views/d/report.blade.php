@extends('d.dpartials.layouts')

@section('title')
<title>Cakra | {{ $title }}</title>
<style>
     @media print{
        .heder,.btn,.contanisse{display: none;}

    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endsection

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"><h2>Report 2022</h2>
            <a href="" class="btn btn-outline-success " style="margin-right: 80px" onclick="window.print()"> <i class="fa fa-print" aria-hidden="true"></i></a>

         </div>

        <div class="row">
            <div class="col-xl-8 col-lg-7">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3">
                      <h6 class="m-0 font-weight-bold text-primary">Grafik penjualan bulanan tahun 2022</h6>
                        {{-- <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/dashboard/user/create">Add Data</a></li>
                                </ul>
                            </div>
                        </div> --}}

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myChart"></canvas>
                        </div>
                        <hr>

                    </div>
                </div>

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3">
                      <h6 class="m-0 font-weight-bold text-primary">Grafik total barang terjual</h6>
                        {{-- <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/dashboard/user/create">Add Data</a></li>
                                </ul>
                            </div>
                        </div> --}}

                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script>

        const ydata = JSON.parse('{!! json_encode($months) !!}');
        // JSON.parse('{"name":"John", "age":30, "city":"New York"}');
        const xdata = JSON.parse('{!! json_encode($income) !!}');

        const data = {
          labels: ydata,
          datasets: [{
            label: 'Income graphics',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: xdata,
          }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {}
        };
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
</script>


<script>
const labels2 = JSON.parse('{!! json_encode($months) !!}');
const data2 = {
    labels: labels2,
    datasets: [{
        data: JSON.parse('{!! json_encode($count) !!}'),
        backgroundColor:['rgb(255, 61, 61)',
        'rgb(255, 245, 61)',
        'rgb(61, 64, 255)',
        'rgb(139, 255, 61)',
        'rgb(1, 200, 255)',
        'rgb(255, 132, 61)',
        'rgb(102, 204, 204)',
        'rgb(255, 171, 171)',
        'rgb(102, 153, 255)',
        'rgb(102, 102, 102)',
        'rgb(197, 163, 255)',
        'rgb(231, 255, 172)',
    ],
    }]
};
const config2 = {
  type: 'doughnut',
  data: data2,
  options: {}
};
const myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
)
</script>

@endsection
