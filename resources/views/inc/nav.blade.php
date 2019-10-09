<nav class="site-navigation">

    <ul>
        <li class="logo">
            <img src="images/logo.jpg" alt="Капитал центр Благовещенск">
        </li>
        <li><a href="#" class="active">Главная</a></li>
        <li><a href="#">О проекте</a></li>
        <li><a href="#">Стратегии</a></li>
        <li><a href="#">Гарантии</a></li>
        <li><a href="#">Отзывы</a></li>
        <li><a href="#">О нас</a></li>

        @guest
            <li>
                <a class="log-in" href="{{ route('login') }}">Войти</a>
            </li>
{{--            @if (Route::has('register'))--}}
{{--                <li class="">--}}
{{--                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                </li>--}}
{{--            @endif--}}
        @else
            <li class="">
                <a class="" href="#">
                    {{ Auth::user()->name }}
                </a>

                <div class="">
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

</nav>
