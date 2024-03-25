@extends('layouts.master')
@section('title')
    Chamba
@endsection
@section('css')
@endsection
@section('content')
    @if (session('success'))
    @endif
    {{ $info }}
    <form action="{{ route('request.store') }}" method="post">
        @csrf
        <input value="{{ $chamba->id }}" name="chamba_id"/>
        <input value="{{ $chamba->worker_id }}" name="worker_id"/>
        <button type="submit" class="btn inline-flex justify-center btn-primary">Solicitar chamba</button>
    </form>
@endsection
