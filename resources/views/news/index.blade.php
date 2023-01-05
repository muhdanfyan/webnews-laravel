@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Berita</h1>
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-2">
    Tambah Berita</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Dibuat pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($news as $n)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $n->title }}</td>
                <td>{{ $n->author }}</td>
                <td>{{ $n->created_at }}</td>
                <td>
                <a href="{{ route('news.edit', $n->id) }}" class="btn btn-success">Edit</a>
                    <form action="{{ route('news.destroy', $n->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection