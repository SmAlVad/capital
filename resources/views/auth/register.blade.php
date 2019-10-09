@extends('layouts.auth')

@section('content')
    <div class="auth">
        <h1>Зарегистрироваться</h1>
        <h4>Уже есть аккаунт? <a href="{{ route('login') }}">Вход</a></h4>

        <form method="POST" action="{{ route('register') }}" class="auth-form">
            @csrf

            <div class="auth-form-input-wrapper">
                <label for="name">Имя</label>
                <input id="name"
                       type="text"
                       class="form-control @error('name') is-invalid @enderror"
                       name="email" value="{{ old('name') }}"
                       required
                       autocomplete="name"
                       autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="auth-form-input-wrapper auth-form-email">
                <label for="email">Email</label>
                <input id="email"
                       type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}"
                       required
                       autocomplete="email"
                       autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="auth-form-input-wrapper auth-form-password">
                <label for="password">Пароль</label>
                <input id="password"
                       type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password"
                       required
                       autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="auth-form-input-wrapper auth-form-password">
                <label for="referal">Реферал</label>
                <input id="referal"
                       type="text"
                       class="form-control @error('password') is-invalid @enderror"
                       name="referal"
                       required
                       autocomplete="current-referal">

                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="auth-submit-btn">Зарегистрироваться</button>
        </form>

    </div>

    <div class="home-link">
        <a href="{{ route('index') }}">
            <i class="fas fa-arrow-left mr-2"></i>
            на главную
        </a>
    </div>
@endsection
