@extends('layouts.master')
@section('content')
    {{-- <h2>Chamba | Registrar</h2> --}}
    <div class="card">
        <div class="card-body flex flex-col p-6">
            <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-4 -mx-6 px-6">
                <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Registrar Chamba</div>
                </div>
            </header>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-text h-full space-y-2">
                <form action="{{ route('chamba.store') }}" method="post" class="space-y-5"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="input-area">
                        <label for="name" class="form-label">Titulo</label>
                        <input id="title" name="title" type="text" class="form-control"
                               placeholder="Nombre de tu chamba">
                    </div>
                    <div class="input-area">
                        <label for="description" class="form-label">Descripción de tu chamba</label>
                        <textarea id="description" rows="5" class="form-control"
                                  placeholder="Escribe aquí la descripción de la chamba"
                                  name="description"></textarea>
                    </div>
                    <div class="input-area">
                        <label for="select" class="form-label">Selecciona tu oficio</label>
                        <select id="select" class="form-control" name="trabajo_id">
                            @foreach ($jobs as $job)
                                <option value="{{ $job->id }}" class="dark:bg-slate-700">{{ $job->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="input-area">
                        <label for="images">Images</label>
                        <input type="file" id="images" name="images[]" multiple accept="image/*" />
                    </div> --}}
                    <div class="input-area">
                        <input value="{{ auth()->user()->id }}" name="worker_id" hidden/>
                    </div>
                    {{--                    <div class="input-area">--}}
                    {{--                        <label for="images" class="form-label">Propuesta De Precio</label>--}}
                    {{--                        <div class="relative">--}}
                    {{--                            <input type="text" class="form-control !px-9" placeholder="100">--}}
                    {{--                            <span--}}
                    {{--                                class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center">--}}
                    {{--                                $--}}
                    {{--                            </span>--}}
                    {{--                            <span--}}
                    {{--                                class="absolute right-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center">--}}
                    {{--                                .00--}}
                    {{--                            </span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="input-area">
                        <label for="images">Images</label>
                        <input type="file" id="images" name="images[]" multiple accept="image/*"/>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
