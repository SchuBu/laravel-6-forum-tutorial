@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>
                <div class="card-body">
                    <form class="w-full p-6" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="input-label">{{ __('E-Mail Address') }}:</label>

                            <input id="email" type="email" class="input-field{{ $errors->has('email') ? ' border-red' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <p class="form-error-msg">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>

                            <p class="w-full text-center description mt-8 -mb-4">
                                <a href="{{ route('login') }}">Back to login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
