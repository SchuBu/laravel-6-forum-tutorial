@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">
            <div class="card">
                <div class="card-header">Datenbank Design</div>
                <div class="card-body text-center p-10 text-gray-700">
                    <div class="rounded bg-blue-200 font-bold text-xl p-5">Kategorie</div>
                    <i class="fa fa-arrow-down p-5"></i>
                    <div class="rounded bg-blue-200 font-bold text-xl p-5">Subkategorie</div>
                    <i class="fa fa-arrow-down p-5"></i> <br>
                    ...

                    <div class="rounded bg-blue-200 font-bold text-xl p-5">Thread
                        <div class="description">
                            <ul>
                                <li>id</li>
                                <li>category_id</li>
                                <li>user_id</li>
                                <li>title</li>
                                <li>body</li>
                                <li>created_at</li>
                                <li>updated_at</li>
                                <li>deleted_at</li>
                                <li>status (draft, sticky, closed (read-only) ...)</li>
                            </ul>
                        </div>
                    </div>
                    <i class="fa fa-arrow-down p-5"></i>
                    <div class="rounded bg-red-200 font-bold text-xl p-5">Replies
                        <div class="description">
                            <ul>
                                <li>id</li>
                                <li>thread_id</li>
                                <li>user_id</li>
                                <li>title (nullable)</li>
                                <li>body</li>
                                <li>created_at</li>
                                <li>updated_at</li>
                                <li>deleted_at</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
