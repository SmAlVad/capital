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
                       class="form-control  @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}"
                       required
                       autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-form-input-wrapper auth-form-email">
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

            <div class="auth-form-input-wrapper auth-form-password">
                <label for="password">Пароль</label>
                <input id="password"
                       type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password"
                       required>

                @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="auth-form-input-wrapper auth-form-password">
                <label for="referal">Реферал</label>
                <input id="referal"
                       type="text"
                       class="form-control @error('referal') is-invalid @enderror"
                       name="referal" value="{{ old('referal') }}"
                       required>

                @error('referal')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
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
