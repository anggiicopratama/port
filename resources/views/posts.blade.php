@extends('layouts.main')

@section('content')

    <h1 class="text-center">Halaman Posts</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/posts">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-warning" type="submit" >Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            @foreach ($datas as $data)
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="download.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><a href="/detail/{{ $data->slug }}"  class="text-decoration-none">{{ $data->title }}</a></h5>
                          <p class="card-text">Author : <a href="/typeuser/{{ $data->user->username }}" class="text-decoration-none">{{ $data->user->name }}</a> For <a href="/typecategory/{{ $data->category->slug }}" class="text-decoration-none">{{ $data->category->name }}</a></p>
                          <p class="card-text"><small class="text-muted">{{ $data->excerpt }}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

{{--



        <h5></h5>
        <p></p>
        <br> --}}


@endsection
