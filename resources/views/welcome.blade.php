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
            @auth
                @if ($categories->first()->isLeaf())
                    <div class="flex justify-end mb-3">
                        <a href="{{route('forum.thread.create', $categories->first()->id)}}" class="btn btn-xs btn-primary">Thread erstellen</a>
                    </div>
                @endif
            @endauth

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
                                    <a class="card-item" href="{{route('thread.show', $thread->id)}}">
                                        {{$thread->id}} {{$thread->title}} ({{$thread->replyCount}})
                                    </a>
                                @endforeach

                                {{--@TODO: usergruppe abfragen--}}
                                @foreach($category->threads()->onlyTrashed()->get() as $thread)
                                    <a class="card-item opacity-50" href="{{route('thread.show', $thread->id)}}">
                                        gelöscht: {{$thread->id}} {{$thread->title}} ({{$thread->replyCount}})
                                    </a>
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
