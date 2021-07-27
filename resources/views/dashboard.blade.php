@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-light">
                      Dashboard 
                      <a href="{{route('logout')}}" class="btn btn-info" style="float:right;">logout</a>
                    </div>
                    <div class="card-body">
                       <h1>Welcome to Dashboard <span style="color:goldenrod;">@if (Session::has('user'))
                           {{session::get('user')['name']}}
                       @endif</span></h1>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection