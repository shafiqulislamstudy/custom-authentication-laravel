@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-light">
                      Login
                    </div>
                    <div class="card-body">

                        @if ($message=Session::get('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops! {{$message}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif


                        <form action="{{route('user.login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" name="email" id="email">
                              <span style="color:red;">@error('email') {{$message}}@enderror</span>
                            </div>
                            <div class="mb-3">
                              <label for="pwd" class="form-label">Password</label>
                              <input type="password" class="form-control" name="pwd" id="pwd">
                              <span style="color:red;">@error('pwd') {{$message}}@enderror</span>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                          </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection