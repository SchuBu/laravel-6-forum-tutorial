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
                <a href="#">Forum</a> <i class="fa fa-angle-double-right fa-fw"></i> <a href="#">Profile of user "Peter"</a>
            </div>
            <h1>Profile of user "Peter"</h1>
            <div class="card">
                <div class="card-header">Informationen</div>

                <div class="card-body flex p-5">
                    <div class="mr-5 p-5 bg-gray-300 text-center border border-gray-400">
                        <i class="fa fa-user-circle fa-6x text-blue-300 mb-3"></i> <br>
                        <i class="fa fa-circle text-green-500"></i> <span class="description">Online</span>
                    </div>
                    <div class="pr-5">
                        Benutzername: Peter <br>
                        Name: Hans Peter Wurst <br>
                        E-Mail: <a href="mailto:hapewu@mail.com">hapewu@mail.com</a>
                    </div>
                    <div class="flex flex-1 justify-between">
                        <div>
                            Mitglied seit: 01.02.2011 <br>
                            Threads: 217 <br>
                            Posts: 1.259
                        </div>
                        <div class="flex self-end">
                            <button type="submit" class="mr-3 bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                <i class="fa fa-envelope"></i> E-Mail an User
                            </button>

                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-envelope"></i> Nachricht an User
                            </a>
                        </div>
                    </div>
                </div>
            </div>

                <div class="card">
                    <div class="card-header">Gruppen und Auszeichnung</div>
                    <div class="card-body p-5">folgt...</div>
                </div>

                <button class="btn btn-primary mr-5">a</button>
                <button class="btn btn-secondary mr-5">a</button>
                <button class="btn btn-danger mr-5">a</button>
                <button class="btn btn-warning mr-5">a</button>
                <button class="btn btn-success mr-5">a</button>

            <div class="card mt-5">
                <div class="card-header">
                    Neueste Beiträge von "Peter"
                </div>

                <div class="card-body">
                    @for($i=0;$i<=4;$i++)
                        <div class="card-item">
                            @include('components/thread-item')
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
