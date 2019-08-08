@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main mt-4">

        <h1>Log in</h1>
      
        <hr>
      
        <form method="POST" action="/login">
      
            @csrf
      
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
      
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
      
            <div class="form-group">
              <button type="submit" class="btn btn-dark">Log in</button>
            </div>
            
        </form>
      
        @include('layouts.errors')
          
    </div>
@endsection
