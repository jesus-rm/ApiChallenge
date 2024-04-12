@extends('layouts.dashboard')

@section('content')

<div class="pagetitle">
    <h1>{{ __('Dashboard') }}</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <!-- Visitors Card -->
                <div class="col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Usuarios <span> (Visitantes) </span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $numVisitors }}</h6>
                                    <span class="text-success small pt-1 fw-bold">(DB MySQL)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posts Card -->
                <div class="col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Posts</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-file-earmark-post"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $numPosts }}</h6>
                                    <span class="text-success small pt-1 fw-bold">(DB MySQL)</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Reports -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">N° Posts <span>/ Visitantes</span></h5>
                            <div id="reportsChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const data = @json($data);

                                    new ApexCharts(document.querySelector("#reportsChart"), {
                                        series: [{
                                            name: 'Número de Posts',
                                            data: Object.values(data),
                                        }],
                                        chart: {
                                            height: 350,
                                            type: 'bar', // Utilizamos un gráfico de barras para representar la cantidad de publicaciones por usuario
                                            toolbar: {
                                                show: false
                                            },
                                        },
                                        plotOptions: {
                                            bar: {
                                                horizontal: false, // Las barras estarán en vertical
                                                columnWidth: '55%', // Ancho de las columnas
                                                endingShape: 'rounded' // Forma de las barras
                                            },
                                        },
                                        dataLabels: {
                                            enabled: false
                                        },
                                        stroke: {
                                            show: true,
                                            width: 2,
                                            colors: ['transparent']
                                        },
                                        xaxis: {
                                            categories: Object.keys(data), // Utilizamos las claves de los datos como categorías (nombres de usuario)
                                        },
                                        yaxis: {
                                            title: {
                                                text: 'Cantidad de publicaciones' // Título del eje Y
                                            }
                                        },
                                        fill: {
                                            opacity: 1
                                        },
                                        tooltip: {
                                            y: {
                                                formatter: function(val) {
                                                    return val + " publicaciones"
                                                }
                                            }
                                        }
                                    }).render();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection