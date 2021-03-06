@extends('layouts.main')

@section('content')

    {{-- {{ var_dump($datos) }} --}}

    {{-- @foreach ($datos as $item)
        <p>{{ $item }}</p>
    @endforeach --}}

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Clover - {{ $mes }}
        </h1>
        <div class="btn-group dropright">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Filtrar por Mes
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 1]) }}">
                    Enero
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 2]) }}">
                    Febrero
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 3]) }}">
                    Marzo
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 4]) }}">
                    Abril
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 5]) }}">
                    Mayo
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 6]) }}">
                    Junio
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 7]) }}">
                    Julio
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 8]) }}">
                    Agosto
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 9]) }}">
                    Septiembre
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 10]) }}">
                    Octubre
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 11]) }}">
                    Noviembre
                </a>
                <a class="dropdown-item" href="{{ route('clovers.mes', ['mes' => 12]) }}">
                    Diciembre
                </a>
            </div>
        </div>
    </div>

    {{-- <form method="POST" action="{{ route('clovers.filter') }}">
        @csrf
        <div class="form-row">
            <div class="input-group mb-3 col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">{!!  trans('messages.from') !!}</span>
                </div>
                <input autocomplete="off" type="date" class="form-control" name="from" aria-describedby="help"
                    placeholder="From">
                <small id="help" class="form-text text-muted"><b></b></small>
            </div>

            <div class="input-group mb-3 col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">{!!  trans('messages.to') !!}</span>
                </div>
                <input autocomplete="off" type="date" class="form-control" name="to" aria-describedby="help"
                    placeholder="From">
                <small id="help" class="form-text text-muted"><b></b></small>
            </div>

            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-danger shadow rounded">{!!  trans('messages.filter') !!}</button>
            </div>
        </div>
    </form> --}}

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
        <div class="col-md-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                {!! trans('messages.orders') !!} </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $orders }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
        <div class="col-md-6">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                {!! trans('messages.sales') !!}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                ${{ number_format($sales, 2) }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row my-4">

        <!-- Area Chart -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">{!! trans('messages.annual') !!}</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Meses:</div>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 1, 'desde' => 1, 'hasta' => 31]) }}">
                                Enero
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 2, 'desde' => 1, 'hasta' => 31]) }}">
                                Febrero
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 3, 'desde' => 1, 'hasta' => 31]) }}">
                                Marzo
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 4, 'desde' => 1, 'hasta' => 31]) }}">
                                Abril
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 5, 'desde' => 1, 'hasta' => 31]) }}">
                                Mayo
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 6, 'desde' => 1, 'hasta' => 31]) }}">
                                Junio
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 7, 'desde' => 1, 'hasta' => 31]) }}">
                                Julio
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 8, 'desde' => 1, 'hasta' => 31]) }}">
                                Agosto
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 9, 'desde' => 1, 'hasta' => 31]) }}">
                                Septiembre
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 10, 'desde' => 1, 'hasta' => 31]) }}">
                                Octubre
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 11, 'desde' => 1, 'hasta' => 31]) }}">
                                Noviembre
                            </a>
                            <a class="dropdown-item"
                                href="{{ route('clovers.mes', ['mes' => 12, 'desde' => 1, 'hasta' => 31]) }}">
                                Diciembre
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        // Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10",
                    "11", "12", "13", "14", "15", "16", "17", "18", "19", "20",
                    "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31",
                ],
                datasets: [{
                    label: "Earnings",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [
                        {{ $datos[0] }}, {{ $datos[1] }}, {{ $datos[2] }},
                        {{ $datos[3] }}, {{ $datos[4] }},
                        {{ $datos[5] }}, {{ $datos[6] }}, {{ $datos[7] }},
                        {{ $datos[8] }}, {{ $datos[9] }},
                        {{ $datos[10] }}, {{ $datos[11] }}, {{ $datos[12] }},
                        {{ $datos[13] }}, {{ $datos[14] }},
                        {{ $datos[15] }}, {{ $datos[16] }}, {{ $datos[17] }},
                        {{ $datos[18] }}, {{ $datos[19] }},
                        {{ $datos[20] }}, {{ $datos[21] }}, {{ $datos[22] }},
                        {{ $datos[23] }}, {{ $datos[24] }},
                        {{ $datos[25] }}, {{ $datos[26] }}, {{ $datos[27] }},
                        {{ $datos[28] }}, {{ $datos[29] }},
                        {{ $datos[30] }}
                    ],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return '$' + number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });

    </script>

@endsection
