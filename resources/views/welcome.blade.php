@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @for($j=0;$j<=2;$j++)
                <div class="card">
                    <div class="card-header">
                        Kategorie {{$j+1}}
                    </div>

                    <div class="card-body">
                        @for($i=0;$i<=2;$i++)
                            <div class="card-item">
                                @include('components/forum-item')
                            </div>
                        @endfor
                    </div>
                </div>
            @endfor

        </div>
    </div>
@endsection
