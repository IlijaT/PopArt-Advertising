@extends('layouts.master')

@section('content')
  <div class="col-md-4 popart-post">
    
    <h3>{{ $advert->title }}</h3>
    <p class="popart-post-meta"> Published by <a href="/users/{{ $advert->user->id }}/adverts">{{ $advert->user->name }}</a> on {{ $advert->created_at->toFormattedDateString()}} </p>

    <p class="my-0">Description: {{ $advert->description }}</p>
    <p class="my-0">State: {{ $advert->state }}</p>
    <p class="my-0">Price: {{ $advert->price }} $</p>
    <p class="my-0">Location: {{ $advert->street , $advert->city, $advert->country}} </p>
    <p class="my-0">Phone number: {{ $advert->phone }}</p>
      
    <form method="POST" action="/photos/{{ $advert->id }}"
      class="dropzone"
      id="my-awesome-dropzone">
      @csrf
    </form>

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

  <div class="col-md-4 popart-post">
    @forelse ($advert->photos as $photo)
      <img src='{{ asset("storage/$photo->path") }}' alt="slika">
    @empty
        <p>No photos</p>
    @endforelse
  </div>
@endsection

@section('scripts.footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
  <script>
      Dropzone.options.myAwesomeDropzone = {
          paramName: "photo", 
          maxFilesize: 3, // MB
          acceptedFiles: '.jpg, .jpeg, .bmp, .png',
      };
  </script>
@endsection