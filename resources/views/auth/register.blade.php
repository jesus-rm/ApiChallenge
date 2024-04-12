@extends('layouts.auth')

@section('content')

<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">{{ __('Register') }}</h5>
            <p class="text-center small">Introduzca sus datos personales para crear una cuenta</p>
        </div>

        <form class="row g-3" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="col-12">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">{{ __('Register') }}</button>
            </div>
            <div class="col-12">
                <p class="small mb-0">
                    ¿Ya tienes una cuenta?
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </p>
            </div>
        </form>

    </div>
</div>

@endsection