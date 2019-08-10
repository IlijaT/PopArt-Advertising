@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main mt-2">

  <h3 class="text-muted">Publish an advert</h3>

  <hr>

  <form method="POST" action="/adverts">

    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input value="{{ old('title') }}" type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
      <label for="description">Category</label>
      <select name="category_id" class="custom-select" id="inputGroupSelect01">
        <option value="" disabled selected>Select category</option>
        
        @foreach($categories as $category)
        	<option value="{{$category->id}}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="description">Descritpion</label>
      <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
      <label for="state">State (new or second hand)</label>
      <input value="{{ old('state') }}" type="text" class="form-control" id="state" name="state" required>
    </div>

    <div class="form-group">
      <label for="street">Street address</label>
      <input value="{{ old('street') }}" type="text" class="form-control" id="street" name="street" required>
    </div>

    <div class="form-group">
      <label for="city">City</label>
      <input value="{{ old('city') }}" type="text" class="form-control" id="city" name="city">
    </div>

    <div class="form-group">
      <label for="country">Country</label>
      <input value="{{ old('country') }}" type="text" class="form-control" id="country" name="country" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input value="{{ old('phone') }}" type="text" class="form-control" id="phone" name="phone" required>
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input value="{{ old('price') }}" type="number" class="form-control" id="price" name="price" required>
    </div>

    <div class="form-group d-flex justify-content-end">
      <button type="submit" class="btn btn-dark">Publish</button>
    </div>
      
    </form>

   @include('layouts.errors')
    
</div>

@endsection