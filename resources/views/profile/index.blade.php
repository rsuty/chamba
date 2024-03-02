@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('css')
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <div class="flex items-start space-x-3 rtl:space-x-reverse">
                <div class="flex-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
    @endif
    <div class="row">
        @if ($info->type == 1)
            <a>Premium</a>
        @else
            <a href="plans" class="text-lg slate-900">Go Premium</a>
        @endif
        {{ $info }}
        <div class="card">
            <form action="{{ route('profile.update', $info->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="card-text">
                        <div class="input-area">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" class="form-control" placeholder="Enter your Name"
                                name="name" value="{{ $info->name }}">
                        </div>
                        <div class="input-area">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="text" class="form-control" placeholder="Enter your Email"
                                name="email" value="{{ $info->email }}">
                        </div>
                        <div class="input-area">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input id="phone_number" type="text" class="form-control"
                                placeholder="Enter your Phone Number" name="phone_number" value="{{ $info->phone_number }}">
                        </div>
                        <div class="input-area">
                            <label for="speciality" class="form-label">Speciality</label>
                            <input id="speciality" type="text" class="form-control" placeholder="Enter your speciality"
                                name="speciality" value="{{ $info->speciality }}">
                        </div>
                        <div class="input-area">
                            <label for="street" class="form-label">Street</label>
                            <input id="street" type="text" class="form-control" placeholder="Enter your Street"
                                name="street" value="{{ $info->street }}">
                        </div>
                        <div class="input-area">
                            <label for="postal_code" class="form-label">Postal Code</label>
                            <input id="postal_code" type="text" class="form-control" placeholder="Enter your Postal Code"
                                name="postal_code" value="{{ $info->postal_code }}">
                        </div>
                        <div class="input-area">
                            <label for="city" class="form-label">City</label>
                            <input id="city" type="text" class="form-control" placeholder="Enter your city"
                                name="city" value="{{ $info->city }}">
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn flex justify-center btn-dark ml-auto">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
