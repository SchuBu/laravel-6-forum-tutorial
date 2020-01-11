@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">

            <modal name="hello-world" height="auto">
                <div class="flex flex-col">
                    <div class="modal-header font-bold text-gray-700 p-4 bg-gray-300 border-b border-gray-400">Bestätigung notwendig</div>
                    <div class="modal-body flex-1 p-5 my-5">
                        Sind Sie sicher, dass Sie diesen Thread endgültig löschen wollen?
                    </div>
                    <div class="modal-footer p-4 border-t border-gray-400" >
                        <form action="{{route('forum.thread.destroy', [$thread->category_id, $thread->id])}}" method="post">
                            @csrf
                            @method('delete')

                            <button @click.prevent="$modal.hide('hello-world')" class="btn btn-primary">abbrechen</button>
                            <button class="btn btn-danger">ja, löschen!</button>
                        </form>
                    </div>
                </div>
            </modal>

            <div class="breadcrumbs bg-gray-300 text-gray-600 rounded text-sm py-2 px-4 mb-5">
                <a href="#">Kategorie 1</a> <i class="fa fa-angle-double-right fa-fw"></i> <a href="#">Subkategorie</a> <i class="fa fa-angle-double-right fa-fw"></i> <a href="#">3 An example Forum</a>
            </div>
            <h1>{{$thread->title}}</h1>

            @auth
                <div class="card card-color-gray">
                    <div class="card-header">
                        Bearbeitungsfunktionen
                    </div>

                    <div class="card-body p-3 flex justify-between">
                        <div>
                            <a href="#" class="btn-icon btn-secondary mr-2"><span><i class="fa fa-comment fa-fw"></i></span>antworten</a>
                            <a href="{{ route('forum.thread.edit', [$thread->category_id, $thread->id]) }}" class="btn-icon btn-secondary mr-2"><span><i class="fa fa-pencil-alt fa-fw"></i></span>bearbeiten</a>
                            <a href="#" class="btn-icon btn-secondary mr-2"><span><i class="fa fa-toggle-on fa-fw"></i></span>deaktivieren</a>
                        </div>
                        <div>
                            <button @click="$modal.show('hello-world')" class="btn-icon icon-append btn-danger"><span><i class="fa fa-trash-alt fa-fw"></i></span>löschen</button>
                        </div>
                    </div>
                </div>
            @endauth

            <div class="card card-color-info">
                <div class="card-header flex justify-between">
                    <div>gepostet {{$thread->created_at->locale('de_DE')->isoFormat('dddd, DD.MM.YYYY')}} um {{$thread->created_at->locale('de_DE')->isoFormat('HH:mm:ss')}}</div>
                    <div><a href="#">#0</a></div>
                </div>
                <div class="card-body">
                    <div class="flex justify-between rounded-bl">
                        <div class="flex-shrink-0 bg-gray-300 md:w-48 w-40 md:p-6 p-3 rounded-bl">
                            <div class="text-center flex flex-col rounded-bl">
                                <i class="fa fa-user-circle md:text-6xl text-4xl text-gray-500"></i>
                                <a href="{{route('user-profile')}}">{{$thread->user->name}}</a>
                                <span class="description">
                                    <span class="font-bold">Benutzergruppe</span>
                                    <br> <i class="fa fa-lg m-2 fa-{{ ['medal','ribbon','award','certificate'][rand(0,3)] }} text-{{ ['red','blue','green','yellow'][rand(0,3)] }}-700"></i>
                                </span>
                                <div class="description">
                                    {{$thread->user->postCount}} Beiträge
                                </div>
                            </div>
                        </div>
                        <div class="md:p-6 p-3 md:text-base text-sm flex flex-col">
                            <div class="flex-1">
                                {{$thread->body}}
                                <div class="cite text-gray-600 p-5 border-l-2 my-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi, debitis dolorum est expedita illum laudantium magnam modi quam quasi ratione repellendus soluta tempora vel velit. Aspernatur maxime perspiciatis rem?</div>
                            </div>
                            <div class="text-xs ">
                                <span class="badge badge-pill badge-muted"><i class="fa fa-paperclip"></i> Attachment.zip</span>
                                <span class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</span>
                                <span class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</span>
                                <a href="#" class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @foreach($thread->replies as $i=>$reply)
                <div class="card">
                    <div class="card-header flex justify-between">
                        <div>gepostet {{$reply->created_at->locale('de_DE')->isoFormat('dddd, DD.MM.YYYY')}} um {{$reply->created_at->locale('de_DE')->isoFormat('HH:mm:ss')}}</div>
                        <div><a href="#">#{{$i+1}}</a></div>
                    </div>
                    <div class="card-body">
                        <div class="flex justify-between rounded-bl">
                            <div class="flex-shrink-0 bg-gray-300 md:w-48 w-40 md:p-6 p-3 rounded-bl">
                                <div class="text-center flex flex-col rounded-bl">
                                    <i class="fa fa-user-circle md:text-6xl text-4xl text-gray-500"></i>
                                    <a href="{{route('user-profile')}}">{{$reply->user->name}}</a>
                                    <span class="description">
                                    <span class="font-bold">Benutzergruppe</span>
                                    <br> <i class="fa fa-lg m-2 fa-{{ ['medal','ribbon','award','certificate'][rand(0,3)] }} text-{{ ['red','blue','green','yellow'][rand(0,3)] }}-700"></i>
                                </span>
                                    <div class="description">
                                        {{$reply->user->postCount}} Beiträge
                                    </div>
                                </div>
                            </div>
                            <div class="md:p-6 p-3 md:text-base text-sm flex flex-col">
                                <div class="flex-1">
                                    {{$thread->body}}
                                    <div class="cite text-gray-600 p-5 border-l-2 my-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi, debitis dolorum est expedita illum laudantium magnam modi quam quasi ratione repellendus soluta tempora vel velit. Aspernatur maxime perspiciatis rem?</div>
                                </div>
                                <div class="text-xs ">
                                    <span class="badge badge-pill badge-muted"><i class="fa fa-paperclip"></i> Attachment.zip</span>
                                    <span class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</span>
                                    <span class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</span>
                                    <a href="#" class="badge badge-pill badge-info"><i class="fa fa-tag"></i> some</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
