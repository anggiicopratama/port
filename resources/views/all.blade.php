@extends('layouts.main')

@section('content')
    <h1>{{ $title }}</h1>
    <br>
<div class="container">
    <div class="row">
        @foreach ($datas as $data)
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="download.jpg" class="img-fluid rounded-start" alt="ALTALT">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/detail/{{ $data->slug }}" class="text-decoration-none">{{ $data->title }}</a></h5>
                      <p class="card-text">Author : <a href="/typeuser/{{ $data->user->username }}" class="text-decoration-none">{{ $data->user->name }}</a> : <a href="/typecategory/{{ $data->category->slug }}" class="text-decoration-none">{{ $data->category->name }}</a></p>
                      <p class="card-text"><small class="text-muted">{{ $data->excerpt }}</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


<a href="/posts" class="text-decoration-none">kembali ke posts</a>

@endsection
