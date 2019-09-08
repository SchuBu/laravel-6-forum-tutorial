@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form class="w-full p-6" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="input-label">
                                {{ __('Name') }}:
                            </label>

                            <input id="name" type="text" class="input-field{{ $errors->has('name') ? ' border-red-500' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <p class="form-error-msg">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email" class="input-label">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="input-field{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="input-label">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="input-field" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>

                            <p class="w-full text-center description mt-8 -mb-4">
                                Already have an account?
                                <a href="{{ route('login') }}">Login</a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
