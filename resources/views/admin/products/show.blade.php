@extends('admin.layouts.master')
@section('title')
    Create Category  - admin
@endsection

@section('content')
    <div class="main-content">

        <div class="container m-auto mt-4">
            <div class="card" style="">
                <img src="{{ \Storage::url($post -> image) }}" class="card-img-top" width="100px" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$post -> title}}</h5>
                  <p class="card-text">{!!$post->content!!}</p>

                  <span class="mt-5"><a class="btn btn-grd-voilet" href="{{route('admin.products.index')}}"> Quay lại </a>  </span>

                </div>
              </div>
        </div>

    </div>
@endsection
