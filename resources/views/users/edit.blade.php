@extends('layouts.master')

@section('content')

  <div class="col-md-8 blog-main mt-2">

    <h3 class="text-muted">Update you details</h3>

    <hr>

    <form method="POST" action="/users/{{ $user->id }}">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="name">Name</label>
        <input value="{{ $user->name }}" type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="password_confirmation">New Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>

      <div class="form-group d-flex justify-content-end">
        <a class="btn btn-light border mr-2" href="/users/{{ $user->id }}">Cancel</a>
        <button type="submit" class="btn btn-dark">Update</button>
        </div>

    </form>

    @include('layouts.errors')

  </div>

@endsection
