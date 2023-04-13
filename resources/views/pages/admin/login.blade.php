@extends('layouts.app')

@section('content')
    <div class="mt-5 d-flex justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-body shadow-sm rounded">
                    <div class="logo text-center mb-2">
                        <img src="{{ asset('img/logo.png') }}" width="100" alt="">
                    </div>
                    <div class="text-center">
                        <b>LOGIN</b>
                    </div>
                    <div class="mt-3 mb-4">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ url('login') }}" method="POST">
                            @csrf
                            <div class="">
                                <div class="label" for='email'>Email</div>
                                <input name="email" type="email" id="email" class="form-control">
                                @error('email')
                                    <div class="text-danger" style="font-size: 12px">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-1">
                                <div class="label" for='password'>
                                    Password
                                </div>
                                <input name='password' type="password" id="password" class="form-control">
                                @error('password')
                                    <div class="text-danger" style="font-size: 12px">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="form-control mt-3 btn rounded-pill btn-danger">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
