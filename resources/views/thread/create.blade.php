@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">
      
            <h1>Thread in {{$forum->name}} erstellen</h1>


            <form action="{{route('forum.thread.store', $forum->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="input-label">Titel</label>
                    <input id="title" type="text" class="input-field @error('title') border-red-500 @enderror" name="title" value="{{old('title')}}" required>
                    @error('title')<p class="form-error-msg">{{ $errors->first('title') }}</p>@enderror
                </div>
                <div class="form-group">
                    <label for="body" class="input-label">Text</label>
                    <textarea rows="10" id="body" class="input-field @error('body') border-red-500 @enderror" name="body" required>{{old('body')}}</textarea>
                    @error('body')<p class="form-error-msg">{{ $errors->first('body') }}</p>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Thread erstellen</button>
            </form>

        </div>
    </div>
@endsection
