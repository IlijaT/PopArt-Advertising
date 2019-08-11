@extends('layouts.master')

@section('content')
  <div class="col-md-8 popart-post mt-2">
    <h3  class="pb-3 mb-4 border-bottom text-muted">
        User details
    </h3>

    <div class="bg-white rounded-lg shadow-sm p-4 mb-2">

      <p class="h4 mb-1">Name:  {{ $user->name }} </p> 
      <p class="h4 mb-2">Email:  {{ $user->email }} </p> 
      <a href="/users/{{ $user->id }}/adverts">All your adverts</a>

    </div>

    <hr>

    <div class="form-group d-flex justify-content-end">
      <a class="btn btn-dark mx-1" href='{{"/users/{$user->id}/edit"}}'>Edit</a>
    </div>
    
    <div>
      @include('layouts.errors')
    </div>
    
  </div>
@endsection