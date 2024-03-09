@extends('layouts.master')
@section('title')
    Chamba
@endsection
@section('content')
    <h1>{{$chamba->title}}</h1>
    <span>{{$chamba->description}}</span>
    <span>{{$chamba->trabajo_id}}</span>
    <span>{{$chamba->user_id}}</span>
    <form action="{{route('request.store')}}" method="post">
        @csrf
        <input value="{{$chamba->id}}" name="chamba_id"/>
        <input value="{{auth()->user()->id}}" name="user_id"/>
        <button type="submit" class="btn inline-flex justify-center btn-primary">Solicitar chamba</button>
    </form>
@endsection
