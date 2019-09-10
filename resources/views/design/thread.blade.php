@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="breadcrumbs bg-gray-300 text-gray-600 rounded text-sm py-2 px-4 mb-5">
                <a href="#">Kategorie 1</a> <i class="fa fa-angle-double-right fa-fw"></i> <a href="#">Subkategorie</a> <i class="fa fa-angle-double-right fa-fw"></i> <a href="#">3 An example Forum</a>
            </div>
            <h1>How to make a forum</h1>
            <?php
            $date = \Carbon\Carbon::now()->subMinutes(rand(1, 55))->locale('de_DE');
            ?>
            @for($i=0;$i<10;$i++)
                <div class="card
                    @if($i==0) card-color-info @endif
                    @if($i==3) card-color-success @endif
                    ">
                    <div class="card-header flex justify-between">
                        <div>gepostet {{$date->addMinutes(rand(1,50000))->isoFormat('dddd, DD.MM.YYYY')}} um {{$date->isoFormat('HH:mm:ss')}}</div>
                        <div><a href="#">#{{$i+1}}</a></div>
                    </div>
                    <div class="card-body">
                        @include('components/forum-thread-item', ["cite" => rand(0,1)])
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
