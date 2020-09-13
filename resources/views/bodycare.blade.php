@extends('master')
@section('content')
<<<<<<< HEAD
    <h1><center>Body Care Services</center></h1><br><br>
=======
<<<<<<< HEAD


  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Body Care Services</center></h1>
      </div>
    </div>

        <div class="container-fluid">
          <div class="row">

             @foreach($services as $service )
              <div class="col-lg-4 col-md-4 col-sm-12" >
                <img src="{{asset($service->photo)}}">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>

         {{--  <div class="col-lg-4 col-md-4 col-sm-12">
=======
<<<<<<< HEAD
<div class="container">
  	<div class="row mt-5">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="" class="img-fluid">
      </div>
    </div>
  </div>
=======
    <h1><center>Body Care Services</center></h1>
>>>>>>> d056c456610e9c9c51a748b7a0444981262a4ded
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" >
          <img src="{{asset('frontend/images/b1.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
>>>>>>> 0a0420093c6558844862c8bd631e8fa40aa9bfcc
           <img src="{{asset('frontend/images/b2.jpeg')}}">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
          </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset('frontend/images/b3.jpeg')}}">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div> --}}

        @endforeach
      </div>
    </div> 
>>>>>>> 8ccc60cea1da0c66ca4721ad2c5720cffe431549
@endsection