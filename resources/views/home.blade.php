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
        <h1>Adalberto</h1>
    </div>
@endsection
