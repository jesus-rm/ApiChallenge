@extends('layouts.dashboard')

@section('content')

<div class="pagetitle">
    <h1>Usuarios (Visitantes) <strong>API</strong></h1>
</div><!-- End Page Title -->

<section class="section mt-5">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <p class="mt-4">
                        Para sincronizar (llenar) la base de datos con la información de la API, haga clic en el siguiente botón.
                    </p>
                    <a href="{{ route('apivisitor.sinc') }}" class="btn btn-primary">Sincronizar Usuarios</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection