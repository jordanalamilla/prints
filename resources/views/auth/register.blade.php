@extends('layouts.app')

@section('content')


<div class="light">

    <div class="container">

        <form class="padding" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf

            <div class="space">
                <h1>Register</h1>
            </div>

            <!-- NAME -->
            <div class="form-group padding">

                <label class="space lowercase" for="name">{{ __('Name') }}</label>

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

                <label class="space lowercase" for="email">{{ __('E-Mail Address') }}</label>

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

                <label class="space lowercase" for="password">{{ __('Password') }}</label>

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
                <label class="space lowercase" for="password-confirm">{{ __('Confirm Password') }}</label>

                <div>

                    <input id="password-confirm"
                        type="password"
                        class="full space form-control"
                        name="password_confirmation"
                        required>

                </div>

            </div>

            <!-- ADDRESS -->
            <div class="form-group padding">

                <label class="space lowercase" for="address">{{ __('Address') }}</label>

                <div>
                    <input id="address"
                        type="text"
                        class="full space form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                        name="address"
                        placeholder="123 Road Street"
                        value="{{ old('address') }}"
                        required>

                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif

                </div>

            </div>

            <!-- CITY -->
            <div class="form-group padding">

                <label class="space lowercase" for="city">{{ __('City') }}</label>

                <div>
                    <input id="city"
                        type="text"
                        class="full space form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                        name="city"
                        placeholder="Toronto"
                        value="{{ old('city') }}"
                        required>

                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif

                </div>

            </div>

            <!-- PROVINCE -->
            <div class="form-group padding">

                <label class="space lowercase" for="province">{{ __('Province') }}</label>

                <div>
                    <input id="province"
                        type="text"
                        class="full space form-control{{ $errors->has('province') ? ' is-invalid' : '' }}"
                        name="province"
                        placeholder="Ontario"
                        value="{{ old('province') }}"
                        required>

                    @if ($errors->has('province'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('province') }}</strong>
                        </span>
                    @endif

                </div>

            </div>

            <!-- POSTAL CODE -->
            <div class="form-group padding">

                <label class="space lowercase" for="postal_code">{{ __('Postal Code') }}</label>

                <div>
                    <input id="postal_code"
                        type="text"
                        class="full space form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}"
                        name="postal_code"
                        placeholder="A1B2C3"
                        value="{{ old('postal_code') }}"
                        required>

                    @if ($errors->has('postal_code'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('postal_code') }}</strong>
                        </span>
                    @endif

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
