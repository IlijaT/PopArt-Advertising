@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main mt-2">

  <h3 class="text-muted">Update the advert</h3>

  <hr>

  <form method="POST" action="/adverts/{{ $advert->id }}">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="title">Title</label>
      <input value="{{ $advert->title }}" type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
      <label for="description">Descritpion</label>
      <textarea class="form-control" id="description" name="description" rows="3" required>{{$advert->description}}
      </textarea>
    </div>

    <div class="form-group">
      <label for="state">State (new or second hand)</label>
      <input value="{{ $advert->state }}" type="text" class="form-control" id="state" name="state" required>
    </div>

    <div class="form-group">
      <label for="street">Street address</label>
      <input value="{{ $advert->street }}" type="text" class="form-control" id="street" name="street" required>
    </div>

    <div class="form-group">
      <label for="city">City</label>
      <input value="{{ $advert->city }}" type="text" class="form-control" id="city" name="city" required>
    </div>

    <div class="form-group">
      <label for="country">Country</label>
      <input value="{{ $advert->country }}" type="text" class="form-control" id="country" name="country" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input value="{{ $advert->phone }}" type="text" class="form-control" id="phone" name="phone" required>
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input value="{{ $advert->price }}" type="number" class="form-control" id="price" name="price" required>
    </div>

    <div class="form-group d-flex justify-content-end">
      <button type="submit" class="btn btn-dark">Update</button>
    </div>
      
    </form>

   @include('layouts.errors')

    
    
</div>

@endsection