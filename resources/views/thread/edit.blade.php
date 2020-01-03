@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">

            <h1>Thread bearbeiten</h1>

            <form action="{{route('forum.thread.update', [$forum->id, $thread->id])}}" method="post">
                @csrf
                @method('patch')
                @include('thread._form')
                <button type="submit" class="btn btn-primary">Änderungen speichern</button>
            </form>

        </div>
    </div>
@endsection
