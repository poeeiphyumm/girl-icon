@extends('master')
@section('content')


  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Skin Care Services</center></h1>
      </div>
    </div>

        <div class="container-fluid">
      <div class="row">

        @foreach($services as $service)

          <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset($service->photo)}}">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
              <p>{{$service->name}}</p>
          </div>

        @endforeach
      </div>
    </div> 
@endsection