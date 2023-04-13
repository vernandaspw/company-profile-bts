@extends('layouts.app')

@section('content')
    @include('pages.admin.navbar')
    <div class="mt-5 pt-5 mb-5">
        <div class="container">
            <a href="{{ url('admin/partner/tambah', []) }}" class="btn btn-success">Tambah</a>
            @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Img</th>
                        <th scope="col">Url</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partner as $data)
                        <tr>
                            <td><img src="{{ Storage::url($data->img) }}" height="80" alt="">
                            </td>
                            <td>{{ $data->url }}</td>
                            <td>
                                <a href="{{ url('admin/partner/delete', $data->id) }}"
                                    class="btn btn-danger rounded-pill">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
