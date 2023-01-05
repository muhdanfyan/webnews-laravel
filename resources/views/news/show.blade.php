@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    <p>Penulis: {{ $news->author }}</p>
    <p>Dibuat pada: {{ $news->created_at }}</p>
    <hr>
    <p>{{ $news->content }}</p>
</div>
@endsection
