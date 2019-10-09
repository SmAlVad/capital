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
        @else
            <li>
                <a class="log-in" href="{{ route('home') }}">
                    <i class="far fa-user mr-2"></i>
                    {{ Auth::user()->name }}
                </a>
            </li>

            <li>
                <a class="log-out" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>

</nav>
