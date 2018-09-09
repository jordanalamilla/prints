<!--NAV-->
<div class="light">
    
    <nav>

        <div class="container">

            <div class="left space" id="nav-logo">

                <a href="{{ url('/') }}">
                    <img src="/img/rose_black.png"
                        alt="Black rose logo"
                        title="{{ config('app.name', 'Art by Jordan') }}">
                </a>
            </div>

            <div class="right space lowercase" id="nav-links">

                <a href="about.html">About</a>
                <a href="index.html#prints">Prints</a>
                <a href="index.html#contact">Contact</a>

                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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