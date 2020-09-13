@extends('master')
@section('content')
    <h1><center>Body Care Services</center></h1><br><br>


  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Body Care Services</center></h1>
      </div>
    </div>

        <div class="container-fluid">
      <div class="row">

        @foreach($services as $service)


         {{--  <div class="col-lg-4 col-md-4 col-sm-12">

<div class="container">
  	<div class="row mt-5">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="" class="img-fluid">
      </div>
    </div>
  </div>
    <h1><center>Body Care Services</center></h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" >
          <img src="{{asset('frontend/images/b1.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset($service->photo)}}">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
              <p>{{$service->name}}</p>
          </div>

        @endforeach
      </div>
    </div> --}}
@endsection