@extends('layouts.main')


@section('content')

    <h1>Halaman Author</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="/author">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-warning" type="submit" >Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($datas as $data)
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Author</h5>
          <h4 class="card-text"><a href="/postuser/{{ $data->username }}" class="text-decoration-none">{{ $data->name }}</a></h4>
        </div>
      </div>
    @endforeach

@endsection



