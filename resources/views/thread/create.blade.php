@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">

            <h1>Thread in {{$forum->name}} erstellen</h1>


            <form action="{{route('forum.thread.store', $forum->id)}}" method="post">
                @csrf
                @include('thread._form')
                <button type="submit" class="btn btn-primary">Thread erstellen</button>
            </form>

        </div>
    </div>
@endsection
