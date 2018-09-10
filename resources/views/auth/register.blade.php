@extends('layouts.app')

@section('content')


<div class="light">

    <div class="container">

        <form class="padding" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf

            <!-- NAME -->
            <div class="form-group padding">

                <label class="space" for="name">{{ __('Name') }}</label>

                <div>
                    <input id="name"
                        type="text"
                        class="full space form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name"
                        placeholder="Jordan Doe"
                        value="{{ old('name') }}"
                        required
                        autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                </div>

            </div>

            <!-- EMAIL -->
            <div class="form-group padding">

                <label class="space" for="email">{{ __('E-Mail Address') }}</label>

                <div>
                    <input id="email"
                        type="email"
                        class="full space form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email"
                        placeholder="jordan.doe@gmail.com"
                        value="{{ old('email') }}"
                        required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

            </div>

            <!-- PASSWORD -->
            <div class="form-group padding">

                <label class="space" for="password">{{ __('Password') }}</label>

                <div>

                    <input id="password"
                        type="password"
                        class="full space form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password"
                        required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                
                </div>

            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="form-group padding">
                <label class="space" for="password-confirm">{{ __('Confirm Password') }}</label>

                <div>

                    <input id="password-confirm"
                        type="password"
                        class="full space form-control"
                        name="password_confirmation"
                        required>

                </div>

            </div>

            <!-- SUBMIT -->
            <button class="space" type="submit">
                {{ __('Register') }}
            </button>

        </form>

    </div>

</div>
@endsection
