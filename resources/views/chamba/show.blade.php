@extends('layouts.master')
@section('title')
    Chamba
@endsection
@section('content')
    <h1>{{$chamba->title}}</h1>
    <span>{{$chamba->description}}</span>
    <span>{{$chamba->trabajo_id}}</span>
    <span>{{$chamba->user_id}}</span>
    <button class="btn inline-flex justify-center btn-primary">Solicitar chamba</button>
@endsection
