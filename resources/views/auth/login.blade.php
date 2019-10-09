@extends('layouts.auth')

@section('content')
<div class="auth">
    <h1>Войти</h1>
    <h4>Новичок на сайте? <a href="{{ route('register') }}">Зарегистрироваться</a></h4>

    <form method="POST" action="{{ route('login') }}" class="auth-form">
        @csrf

        <div class="auth-form-input-wrapper">
            <label for="email">Email</label>
            <input id="email"
                   type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}"
                   required
                   autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <div class="auth-form-input-wrapper">
            <label for="password">Пароль</label>
            <input id="password"
                   type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   name="password"
                   required>

            @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="auth-form-remember">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Запомнить меня</label>
        </div>


        <button type="submit" class="auth-submit-btn">Войти</button>

    </form>
</div>

<div class="home-link">
    <a href="{{ route('index') }}">
        <i class="fas fa-arrow-left mr-2"></i>
        на главную
    </a>
</div>
@endsection
