@extends('layouts.app')

@section('content')
    @include('pages.admin.navbar')
    <div class="mt-5 pt-5 mb-5">
        <div class="container">
            <a href="{{ url('admin/partner', []) }}" class="btn btn-secondary">kembali</a>
            <div class="mt-3 col-lg-4">
                <div class="mb-2">
                    <b>Tambah partner</b>
                </div>

                <form action="{{ url('admin/partner/tambah') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="">
                        <label for="img">Logo</label>
                        <input class="form-control" type="file" name="img">
                        @error('img')
                            <div class="text-danger" style="font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="">
                        <label for="url">Url</label>
                        <input class="form-control" type="text" name="url">
                        @error('url')
                            <div class="text-danger" style="font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
