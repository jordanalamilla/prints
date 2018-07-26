<nav>

    {{-- MAIN CONTAINER --}}
    <div>

        {{-- HOME LINK --}}
        <a href="/">{{ config('app.name', 'Art By Jordan') }}</a>

        {{-- LINKS CONTAINER --}}
        <div>

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li><a href="/">Gallery</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>

                {{-- LOGGED IN LINKS --}}
                @else
                        <li class="nav-item dropdown">

                            <a id="navbarDropdown"
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false" v-pre>

                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdown">

                                @if( Auth::user()->type == 'admin' )
                                    <a href="/dashboard">Dashboard</a>
                                @endif

                                <a href="/cart">Cart</a>

                                <a class="dropdown-item"
                                href="{{ route('logout') }}"

                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">

                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>



{{-- <nav>
    <ul>
        <li>
            <a href="/">Gallery</a>
        </li>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="/contact">Contact</a>
        </li>
        <li>
            <a href="/login">Login</a>
        </li>
        <li>
            <a href="/register">Register</a>
        </li>
        <li>
            <a href="/dashboard">Dashboard</a>
        </li>
    </ul>
</nav> --}}