@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-center container-fluid jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="px-0">
    <h3 class="font-italic">Search Our Site</h3>

    <form class="m-1 form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Key words..." aria-label="Search">

      <div class="input-group m-1">
        <select class="custom-select" id="inputGroupSelect01">
          <option selected>Category</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="input-group m-1">
        <select class="custom-select" id="inputGroupSelect01">
          <option selected>City</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="input-group m-1">
        <select class="custom-select" id="inputGroupSelect01">
          <option selected>Price</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <button class="btn btn-outline-light ml-2 my-2 my-sm-0" type="submit">Search</button>
    </form>

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