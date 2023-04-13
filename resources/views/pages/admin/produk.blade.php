@extends('layouts.app')

@section('content')
    @include('pages.admin.navbar')
    <div class="mt-5 pt-5 mb-5">
        <div class="container">
            <a href="{{ url('admin/produk/tambah', []) }}" class="btn btn-success">Tambah</a>
            @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Cover</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Url</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $data)
                        <tr>
                            <td><img src="{{ Storage::url($data->cover) }}" height="80" alt="">
                            </td>
                            <td><img src="{{ Storage::url($data->logo) }}" height="80" alt="">
                            </td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->url }}</td>
                            <td>
                                <a href="{{ url('admin/produk/delete', $data->id) }}"
                                    class="btn btn-danger rounded-pill">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
