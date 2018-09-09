<!--NAV-->
<div class="light">
    
    <nav>

        <div class="container">

            <!--ROSE LOGO-->
            <div class="left space" id="nav-logo">

                <a href="{{ url('/') }}">
                    <img src="/img/rose_black.png"
                        alt="Black rose logo"
                        title="{{ config('app.name', 'Art by Jordan') }}">
                </a>
            </div>

            <!--NAV LINKS-->
            <div class="right space lowercase" id="nav-links">

                <!--PERSISTENT LINKS-->
                <a href="/about">About</a>
                <a href="/#prints">Prints</a>
                <a href="/contact">Contact</a>

                <!--LOGGED OUT LINKS-->
                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                <!--LOGGED IN LINKS-->
                @else
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                @endguest

            </div>
        </div>
    </nav>
</div>