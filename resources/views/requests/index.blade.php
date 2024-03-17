@extends('layouts.master')
@section('title')
    HOME
@endsection
@section('css')
@endsection
@section('content')
    <div class="card p-2">
        @foreach($requests as $request)
            <div>
                {{$request}}
            </div>
        @endforeach
    </div>
@endsection
