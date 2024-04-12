@extends('layouts.dashboard')

@section('content')

<div class="pagetitle">
    <h1>Publicaciones</h1>
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
                                <th width="15%">
                                    <b>N</b>ame creator
                                </th>
                                <th width="20%">Title</th>
                                <th width="50%">Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->visitor->name }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline;">
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