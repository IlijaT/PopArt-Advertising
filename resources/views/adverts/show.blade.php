@extends('layouts.master')

@section('content')
  <div class="col-md-8 blog-post">
    
    <h3>{{ $advert->title }}</h3>
    <p class="blog-post-meta"> Published by <a href="http://">{{ $advert->user->name }}</a> on {{ $advert->created_at->toFormattedDateString()}} </p>

    <p>{{ $advert->description }}</p>
    <p>{{ $advert->state }}</p>
    <p>{{ $advert->price }}</p>
    <p>{{ $advert->street }}</p>
    <p>{{ $advert->city }}</p>
    <p>{{ $advert->country }}</p>
    <p>{{ $advert->phone }}</p>

    <hr>

    <div class="form-group d-flex justify-content-end">
      <a class="btn btn-dark mx-1" href='{{"/adverts/{$advert->id}/edit"}}'>Edit</a>
      <form action="/adverts/{{ $advert->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mx-1">Delete</button>
      </form>
    </div>
    
    <hr>
    
    <div>
      @include('layouts.errors')
    </div>
    
  </div>
@endsection