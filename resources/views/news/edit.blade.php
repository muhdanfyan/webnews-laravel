@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Berita</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('news.update', $news->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $news->title }}">
        </div>
        <div class="form-group">
            <label for="content">Isi</label>
            <textarea name="content" class="form-control">{{ $news->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" name="author" class="form-control" value="{{ $news->author }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
