@extends('layouts.master')

@section('content')
  <div class="col-md-8 blog-post mt-2">
    
    <h3>{{ $user->name }}</h3>
    <p>{{ $user->email }}</p>
    <a href="/users/{{ $user->id }}/adverts">All your adverts</a>

    <hr>

    <div class="form-group d-flex justify-content-end">
      <a class="btn btn-dark mx-1" href='{{"/users/{$user->id}/edit"}}'>Edit</a>
    </div>
    
    <hr>

    <div>
      @include('layouts.errors')
    </div>
    
  </div>
@endsection