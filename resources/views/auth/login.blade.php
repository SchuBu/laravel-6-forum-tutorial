@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="input-label">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="input-field{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <p class="form-error-msg">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password" class="input-label">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="input-field{{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <p class="form-error-msg">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>


                        <div class="form-group">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="inline-label">{{ __('Remember Me') }}</span>
                            </label>
                        </div>


                        <div class="form-group items-center">
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>

                            @if (Route::has('password.request'))
                                <a class="ml-auto text-sm" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <p class="w-full text-center description mt-8 -mb-4">
                                    Don't have an account?
                                    <a href="{{ route('register') }}">Register</a>
                                </p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
