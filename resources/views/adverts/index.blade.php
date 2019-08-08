@extends('layouts.master')

@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-6 font-italic">PopArt Advertising test site</h1>
    <p class="lead my-3">Sell products online with PopArt Advertising
      Everything you need to sell online. Trusted by over 800,000 businesses worldwide..</p>
  </div>
</div>

<main role="main" class="container">
<div class="row">
  <div class="col-md-8 popart-main">
    <h2 class="pb-3 mb-4 font-italic border-bottom">
      All Adverts
    </h2>

    {{-- @foreach($posts as $post)
     @include('posts.post')
    @endforeach --}}

    <nav class="popart-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

  </div> 
 
@endsection()