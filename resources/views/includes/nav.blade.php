<nav>

    <hr>

    <!-- MAIN LINKS -->
    <ul>
        <li><a href="/">Gallery</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="http://instagram.com/jordanalamilla" target="_blank">Instagram</a></li>

        <!-- AUTH LINKS -->
        @guest

            {{-- <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}

        <!--LOGGED IN LINKS-->
        @else

            <li>//</li>
        
            {{-- DASHBOARD --}}
            @if( Auth::user()->type == 'admin' )
                <li><a href="/dashboard">Dashboard</a></li>
            @endif

            {{-- CART --}}
            {{-- <li>
                <i class="fas fa-shopping-cart"></i> 
                <a href="/cart">Cart</a>
            </li> --}}

            {{-- LOGOUT --}}
            <li>
                <a href="{{ route('logout') }}"

                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                    {{ __('Logout') }}
                </a>
            </li>

            {{-- CSRF ( HIDDEN ) --}}
            <form id="logout-form"
                action="{{ route('logout') }}"
                method="POST"
                style="display: none;">
                @csrf
            </form>

        @endguest
    </ul>

    <hr>

</nav>