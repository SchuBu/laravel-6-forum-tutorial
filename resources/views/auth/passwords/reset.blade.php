@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>
                    <div class="card-body">
                        <form class="w-full p-6" method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label for="email" class="input-label">
                                    {{ __('E-Mail Address') }}:
                                </label>

                                <input id="email" type="email" class="input-field{{ $errors->has('email') ? ' border-red' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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

                                <input id="password" type="password" class="input-field{{ $errors->has('password') ? ' border-red' : '' }}" name="password" required>

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
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold  py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
