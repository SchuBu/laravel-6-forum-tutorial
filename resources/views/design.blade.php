@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="container mx-auto">

            <h1>Komponenten und Elemente</h1>

            <h2>Alerts</h2>

            <div class="alert-success " role="alert">
                <div class="alert-success " role="alert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci aspernatur culpa dolores, ea exercitationem maxime nesciunt odio officiis, porro similique ut! Dolor eveniet explicabo in modi quas quis voluptates!
                </div>

                <div class=alert-danger role="alert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci aspernatur culpa dolores, ea exercitationem maxime nesciunt odio officiis, porro similique ut! Dolor eveniet explicabo in modi quas quis voluptates!
                </div>

                <div class=alert-warning role="alert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci aspernatur culpa dolores, ea exercitationem maxime nesciunt odio officiis, porro similique ut! Dolor eveniet explicabo in modi quas quis voluptates!
                </div>

                <div class=alert-info role="alert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci aspernatur culpa dolores, ea exercitationem maxime nesciunt odio officiis, porro similique ut! Dolor eveniet explicabo in modi quas quis voluptates!
                </div>

                <div class=alert-muted role="alert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci aspernatur culpa dolores, ea exercitationem maxime nesciunt odio officiis, porro similique ut! Dolor eveniet explicabo in modi quas quis voluptates!
                </div>

                <h2>Form-Elemente</h2>

                <div class="flex">
                    <div class="flex-1">
                        <div class="text-gray-700 my-5">Checkboxes</div>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox" checked>
                                    <span class="inline-label">Option 1</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="inline-label">Option 2</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <span class="inline-label">Option 3</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="text-gray-700 my-5">Radio Buttons</div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio text-indigo-600" name="radio" value="1" checked>
                                <span class="inline-label">Option 1</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="radio" value="2">
                                <span class="inline-label">Option 2</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="radio" value="3">
                                <span class="inline-label">Option 3</span>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group mt-5">
                    <label for="email" class="input-label">Input</label>
                    <input id="email" type="email" class="input-field" name="email" value="my old value" required>
                </div>
                <div class="form-group">
                    <label for="name" class="input-label">Input with Error</label>
                    <input id="name" type="text" class="input-field  border-red-500" name="name" value="my old value" required>
                    <p class="form-error-msg">Error-Message</p>
                </div>
                <div class="form-group">
                    <label for="email" class="input-label">Input disabled</label>
                    <input id="email" type="email" class="input-field{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="my value" required disabled>
                </div>

                <h2>Card-Element</h2>

                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio dolorum qui quisquam temporibus. Consectetur culpa itaque nemo officia optio repellendus suscipit. Beatae laboriosam minus nulla quo ratione, saepe sapiente!</div>
                </div>
                <div class="card card-color-success">
                    <div class="card-header">Header</div>
                    <div class="card-body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio dolorum qui quisquam temporibus. Consectetur culpa itaque nemo officia optio repellendus suscipit. Beatae laboriosam minus nulla quo ratione, saepe sapiente!</div>
                </div>
                <div class="card card-color-danger">
                    <div class="card-header">Header</div>
                    <div class="card-body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio dolorum qui quisquam temporibus. Consectetur culpa itaque nemo officia optio repellendus suscipit. Beatae laboriosam minus nulla quo ratione, saepe sapiente!</div>
                </div>
                <div class="card card-color-warning">
                    <div class="card-header">Header</div>
                    <div class="card-body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio dolorum qui quisquam temporibus. Consectetur culpa itaque nemo officia optio repellendus suscipit. Beatae laboriosam minus nulla quo ratione, saepe sapiente!</div>
                </div>
                <div class="card card-color-info">
                    <div class="card-header">Header</div>
                    <div class="card-body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur distinctio dolorum qui quisquam temporibus. Consectetur culpa itaque nemo officia optio repellendus suscipit. Beatae laboriosam minus nulla quo ratione, saepe sapiente!</div>
                </div>


                <h2>Typographie</h2>
                <h1>H1 Heading</h1>
                <h2>H2 Heading</h2>
                <h3>H3 Heading</h3>
                <h4>H4 Heading</h4>
                <h5>H5 Heading</h5>

                <div class="description">Description text with <code>.description</code></div>

                <h2>Badges</h2>
                <span class="badge badge-info">info</span>
                <span class="badge badge-warning">warning</span>
                <span class="badge badge-success">success</span>
                <span class="badge badge-danger">danger</span>
                <span class="badge badge-muted">muted</span>

                <h2>Pill-Badges</h2>

                <span class="badge badge-pill badge-info">info</span>
                <span class="badge badge-pill badge-warning">warning</span>
                <span class="badge badge-pill badge-success">success</span>
                <span class="badge badge-pill badge-danger">danger</span>
                <span class="badge badge-pill badge-muted">muted</span>

                <h2>Pill-Badges with link</h2>

                <a href="#" class="badge badge-pill badge-info">info</a>
                <a href="#" class="badge badge-pill badge-warning">warning</a>
                <a href="#" class="badge badge-pill badge-success">success</a>
                <a href="#" class="badge badge-pill badge-danger">danger</a>
                <a href="#" class="badge badge-pill badge-muted">muted</a>

                <h2>Buttons</h2>

                <button class="btn btn-primary">primary</button>
                <button class="btn btn-secondary">secondary</button>
                <button class="btn btn-danger">danger</button>
                <button class="btn btn-success">success</button>
                <button class="btn btn-warning">warning</button>

                <h2>Button as links</h2>
                <a href="#" class="btn btn-primary">primary</a>
                <a href="#" class="btn btn-secondary">secondary</a>
                <a href="#" class="btn btn-danger">danger</a>
                <a href="#" class="btn btn-success">success</a>
                <a href="#" class="btn btn-warning">warning</a>

                <h2>Button different sizes</h2>
                <button class="btn btn-xs btn-primary">primary</button>
                <button class="btn btn-sm btn-primary">primary</button>
                <button class="btn btn-primary">primary</button>
                <button class="btn btn-lg btn-primary">primary</button>
                <button class="btn btn-xl btn-primary">primary</button>
                <button class="btn btn-2xl btn-primary">primary</button>

                <h2>Button group</h2>
                <div class="btn-group btn-sm">
                    <button class="btn  btn-primary">primary</button>
                    <button class="btn  btn-primary">primary</button>
                    <button class="btn  btn-primary">primary</button>
                    <button class="btn  btn-primary">primary</button>
                    <button class="btn  btn-primary">primary</button>
                    <button class="btn  btn-primary">primary</button>
                </div>

                <h2>Link group</h2>
                <div class="btn-group btn-xs">
                    <a href="#" class="btn btn-primary">primary</a>
                    <a href="#" class="btn btn-secondary">secondary</a>
                    <a href="#" class="btn btn-danger">danger</a>
                    <a href="#" class="btn btn-success">success</a>
                    <a href="#" class="btn btn-warning">warning</a>
                </div>

                <h2>Buttons & Links with icons</h2>

                <div class="grid-cols-5 gutter-2">
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-secondary"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon btn-secondary"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-danger"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon btn-danger"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-success"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon btn-success"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-warning"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon btn-warning"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon icon-append btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon icon-append btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon icon-append btn-secondary"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon icon-append btn-secondary"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon icon-append btn-danger"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon icon-append btn-danger"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon icon-append btn-success"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon icon-append btn-success"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon icon-append btn-warning"><span><i class="fa fa-fw fa-comment"></i></span>Link</a>
                        <button class="btn-icon icon-append btn-warning"><span><i class="fa fa-fw fa-comment"></i></span>Button</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-xs btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size xs</a>
                        <button class="btn-icon btn-xs btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size xs</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-sm btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size sm</a>
                        <button class="btn-icon btn-sm btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size sm</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-md btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size md</a>
                        <button class="btn-icon btn-md btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size md</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-lg btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size lg</a>
                        <button class="btn-icon btn-lg btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size lg</button>
                    </div>
                    <div class="grid-col">
                        <a href="#" class="btn-icon btn-xl btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size xl</a>
                        <button class="btn-icon btn-xl btn-primary"><span><i class="fa fa-fw fa-comment"></i></span>size xl</button>
                    </div>
                </div>

                <h2>Grid-System</h2>
                <div class="grid-cols-2 gutter-2">
                    @for($i=1;$i<=4;$i++)
                        <div class="grid-col">
                            <div class="bg-blue-300 rounded py-2 px-4 text-center text-gray-700">{{$i}}</div>
                        </div>
                    @endfor
                </div>
                <div class="grid-cols-3 gutter-2">
                    @for($i=1;$i<=6;$i++)
                        <div class="grid-col">
                            <div class="bg-blue-300 rounded py-2 px-4 text-center text-gray-700">{{$i}}</div>
                        </div>
                    @endfor
                </div>
                <div class="grid-cols-4 gutter-2">
                    @for($i=1;$i<=8;$i++)
                        <div class="grid-col">
                            <div class="bg-blue-300 rounded py-2 px-4 text-center text-gray-700">{{$i}}</div>
                        </div>
                    @endfor
                </div>
                <div class="grid-cols-6 gutter-2">
                    @for($i=1;$i<=12;$i++)
                        <div class="grid-col">
                            <div class="bg-blue-300 rounded py-2 px-4 text-center text-gray-700">{{$i}}</div>
                        </div>
                    @endfor
                </div>

                <div class="mb-20"></div>
            </div>
        </div>
@endsection
