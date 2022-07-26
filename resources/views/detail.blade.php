@extends('layouts.main')

@section('content')
        <h1>Detail Data</h1>
        <br>

        <h4>Judul : {{ $datas->title }}</h4>
        <h5>Author : {{ $datas->user->name }} For {{ $datas->category->name }}</h5>
        <p>{{ $datas->content }}</p>

        <a href="/posts" class="text-decoration-none">Back to Posts</a>

@endsection
