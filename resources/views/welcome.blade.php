@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mb-5">
                {!! $categories->first()->breadcrumb !!}
            </div>

            @if($categories)
                @foreach($categories as $category)
                    <div class="card">
                        <div class="card-header">{{$category->name}}</div>
                        <div class="card-body">
                            @if($category->children->count() > 0)
                                @foreach($category->children as $child)
                                    <div class="card-item">
                                        @include('components.forum-item')
                                    </div>
                                @endforeach
                            @else
                                <div class="card-item font-bold bg-blue-300">Threads</div>
                                @foreach($category->threads as $thread)
                                    <div class="card-item">
                                        {{$thread->title}}
                                    </div>
                                @endforeach

                            @endif
                        </div>
                    </div>
                @endforeach

            @endif

            {{--            @for($j=0;$j<=2;$j++)
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
                        @endfor--}}

        </div>
    </div>
@endsection
