@extends('layouts.master')

@section('content')
  <div class="col-md-8 blog-post">
    
    <h3>{{ $advert->title }}</h3>
    <p class="blog-post-meta"> Published by <a href="http://">{{ $advert->user->name }}</a> on {{ $advert->created_at->toFormattedDateString()}} </p>

        {{-- @if(count($post->tags))

          @foreach($post->tags as $tag)
            <ul>
              <li>
                <a href="/posts/tags/{{ $tag->name }}">
                  {{ $tag->name }}
                </a>
              </li>
            </ul>
          @endforeach

        @endif --}}

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
      <button type="submit" class="btn btn-danger mx-1">Delete</button>
    </div>
    
    <hr>
    <div>
      <h3>OVDE BI MOGLA FORMA ZA DODAVANJE SLIKE</h3>
      {{-- <form method="POST" action="/posts/{{ $post->id }}/comments">

        @csrf
  
        <div class="form-group">
          <textarea class="form-control" placeholder="Your comment here..." id="body" name="body" rows="3" required></textarea>
        </div>
  
        <div class="form-group">
          <button type="submit" class="btn btn-dark">Add Comment</button>
        </div>
        
      </form> --}}

      @include('layouts.errors')


    </div>
    
  </div>
@endsection