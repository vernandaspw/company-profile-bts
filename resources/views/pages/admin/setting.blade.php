@extends('layouts.app')

@section('content')
    @include('pages.admin.navbar')
    <div class="mt-5 pt-5 mb-5">
        <div class="container">
            <div class="col-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ url('admin/setting', []) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="perusahaan">Perusahaan</label>
                        <input class="form-control" type="text" name="perusahaan" value="{{ $setting->perusahaan }}">
                    </div>
                    @if ($setting->logo)
                        <img src="{{ Storage::url($setting->logo) }}" width="120" alt="">
                    @endif
                    <div class="">
                        <label for="logo">Logo</label>
                        <input class="form-control" type="file" name="logo" value="{{ $setting->logo }}">
                    </div>
                    <div class="">
                        <label for="singkat">Singkat</label>
                        <input class="form-control" type="text" name="singkat" value="{{ $setting->singkat }}">
                    </div>
                    <div class="">
                        <label for="alamat">alamat</label>
                        <input class="form-control" type="text" name="alamat" value="{{ $setting->alamat }}">
                    </div>
                    <div class="mt-2">
                        {!! $setting->iframe !!}
                    </div>
                    <div class="">
                        <label for="iframe">iframe</label>
                        <input class="form-control" type="text" name="iframe" value="{{ $setting->iframe }}">
                    </div>
                    <div class="">
                        <label for="email">email</label>
                        <input class="form-control" type="text" name="email" value="{{ $setting->email }}">
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Ubah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
