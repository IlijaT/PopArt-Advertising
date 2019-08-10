@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-center jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-6 font-italic">PopArt Advertising Test Site</h1>
    <p class="lead my-3">Sell products online with PopArt Advertising
      Everything you need to sell online. Trusted by over 800,000 businesses worldwide..</p>
  </div>
</div>

<main role="main" class="container">
<div class="row">
  <div class="col-md-8 popart-main">
    <h3  class="pb-3 mb-4 border-bottom text-muted">
      @if(isset($user)) 
        {{ $user->name }}
      @endif
      Adverts 
    </h3>

    @foreach($adverts as $advert)
     @include('adverts.advert')
    @endforeach

    <nav class="popart-pagination d-flex justify-content-end">
      {{ $adverts->links() }}
    </nav>

  </div> 
 
@endsection()