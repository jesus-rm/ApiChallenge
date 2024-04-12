@extends('layouts.dashboard')

@section('content')

<div class="pagetitle">
    <h1>Usuarios (Visitantes)</h1>
</div><!-- End Page Title -->

<section class="section mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista</h5>
                    <p>Los datos presentados a continuación son consultados directamente de la Base de datos</p>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>
                                    <b>N</b>ame
                                </th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Website</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($visitors as $visitor)
                            <tr>
                                <td>{{ $visitor->name }}</td>
                                <td>{{ $visitor->email }}</td>
                                <td>{{ $visitor->address->city }}</td>
                                <td>{{ $visitor->website }}</td>
                                <td>
                                    <a href="{{ route('visitor.show', $visitor->id) }}" class="btn btn-primary">Ver</a>
                                    <form action="{{ route('visitor.destroy', $visitor->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar al usuario?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection