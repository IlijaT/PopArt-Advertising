@extends('layouts.master')

@section('content')
 
    <div class="col-md-8 blog-main mt-2">
        <div class="card">
            <div class="card-header bg-danger text-light text-center">!!!!!! >>> PAGE UNDER CONSTRUCTION <<< !!!!!!!</div>
            <div class="card-header">Admin Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card"  >
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                FAKE STATS 
                                <button type="button" class="btn btn-dark">ACTION</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                CREATE CATEGORY
                                <button type="button" class="btn btn-dark">ACTION</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                CREATE ROLE 
                                <button type="button" class="btn btn-dark">ACTION</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                GIVE A ROLE TO A USER 
                                <button type="button" class="btn btn-dark">ACTION</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                MAKE A NEW ROLE
                                <button type="button" class="btn btn-dark">ACTION</button>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                MAKE A NEW PERMISSION
                                <button type="button" class="btn btn-dark">ACTION</button>
                            </div>
                        </li>
                         
                    </ul>
                </div>
            </div>
        </div>
    </div>
     
@endsection
