@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main mt-4">

  <h3>Publish an advert</h3>

  <hr>

  <form method="POST" action="/adverts">

    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
      <label for="description">Descritpion</label>
      <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="form-group">
      <label for="state">State (new or second hand)</label>
      <input type="text" class="form-control" id="state" name="state" required>
    </div>

    <div class="form-group">
      <label for="street">Street address</label>
      <input type="text" class="form-control" id="street" name="street" required>
    </div>

    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city" required>
    </div>

    <div class="form-group">
      <label for="country">Country</label>
      <input type="text" class="form-control" id="country" name="country" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" required>
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" name="price" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-dark">Publish</button>
    </div>
      
    </form>

   @include('layouts.errors')

    
    
</div>

@endsection