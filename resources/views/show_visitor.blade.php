@extends('layouts.dashboard')

@section('content')

<div class="pagetitle">
    <h1>Detalles del usuario (visitante)</h1>
</div><!-- End Page Title -->

<section class="section mt-5 profile">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <h2>{{ $visitor->name }}</h2>
                    <h3>Id: {{ $visitor->id }}</h3>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body pt-3">
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#generales">Datos generales</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#direccion">Dirección</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#compania">Compañia</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="generales">
                            <h5 class="card-title"></h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nombre completo</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Nombre de usuario</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->username }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Sitio Web</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->website }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Teléfono</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->phone }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Correo electrónico</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->email }}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-overview" id="direccion">
                            <h5 class="card-title"></h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Calle</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->address->street }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Suite</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->address->suite }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Ciudad</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->address->city }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Código Postal</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->address->zipcode }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Geolocalización (latitud, longitud)</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->address->geo->lat }}, {{ $visitor->address->geo->lng }}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-overview" id="compania">
                            <h5 class="card-title"></h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nombre de la compañía</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->company->name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Frase de captura</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->company->catchPhrase }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Bs</div>
                                <div class="col-lg-9 col-md-8">{{ $visitor->company->bs }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection