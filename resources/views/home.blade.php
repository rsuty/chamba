@extends('layouts.master')
@section('title')
    HOME
@endsection
@section('css')
@endsection
@section('content')
    @worker
    <a href="{{route("chamba.create")}}" class="btn inline-flex justify-center btn-success">Publicar trabajo</a>
    @endworker
    <div class="row">
        <div class="grid grid-cols-3 gap-4">
            @foreach($chambas as $chamba)
                <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full  shadow-base">
                    <div class="card-body flex flex-col p-6 active">
                        <header class="flex mb-5 items-center">
                            <div class="flex-1">
                                <div class="card-title font-Inter text-slate-900 dark:text-white">
                                    <a href="{{route("chamba.show", $chamba->id)}}"
                                       class="">
                                        {{$chamba->title}}
                                    </a>
                                </div>
                            </div>
                        </header>
                        <div class="image-box mb-6">
                            @foreach($images as $image)
                                @if($image->chamba_id == $chamba->id)
                                    <img src="{{url($image->filename)}}" alt=""
                                         class="block w-[335px] object-cover rounded-md">
                                    @break
                                @endif
                            @endforeach
                        </div>
                        <div class="card-text h-full menu-open">
                            <p>{{$chamba->description}}</p>
                            <div class="mt-4 space-x-4 rtl:space-x-reverse">
                                <a href="card.html"
                                   class="underline btn-link active"> {{$trabajos[$chamba->trabajo_id-1]->name}} </a>
                                <a href="card.html"
                                   class="underline btn-link active">{{$user[$chamba->user_id-1]->name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
