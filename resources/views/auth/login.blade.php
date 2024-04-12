@extends('layouts.auth')

@section('content')

<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">{{ __('Login') }}</h5>
            <p class="text-center small">Introduzca su correo electrónico y contraseña para iniciar sesión</p>
        </div>

        <form class="row g-3" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="col-12">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
            </div>

            <div class="col-12">
                <p class="small mb-0">
                    ¿No tiene una cuenta?
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </p>
            </div>
        </form>

    </div>
</div>

@endsection