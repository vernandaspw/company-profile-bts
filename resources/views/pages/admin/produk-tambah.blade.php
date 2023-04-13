@extends('layouts.app')

@section('content')
    @include('pages.admin.navbar')
    <div class="mt-5 pt-5 mb-5">
        <div class="container">
            <a href="{{ url('admin/produk', []) }}" class="btn btn-secondary">kembali</a>
            <div class="mt-3 col-lg-4">
                <div class="mb-2">
                    <b>Tambah produk</b>
                </div>
               
                <form action="{{ url('admin/produk/tambah') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="">
                        <label for="cover">Cover</label>
                        <input class="form-control" type="file" name="cover">
                        @error('cover')
                            <div class="text-danger" style="font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="">
                        <label for="logo">Logo</label>
                        <input class="form-control" type="file" name="logo">
                        @error('logo')
                            <div class="text-danger" style="font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="">
                        <label for="deskripsi">Deskripsi</label>
                        <input class="form-control" type="text" name="deskripsi">
                        @error('deskripsi')
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
