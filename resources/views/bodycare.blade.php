@extends('master')
@section('content')
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c888ff0e086650effb47c6e0801e612c87db4cd4
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
<<<<<<< HEAD

=======
=======
<<<<<<< HEAD
>>>>>>> ea9b5a970646e6c62eda2b850f3a2ed083e270f9
>>>>>>> c888ff0e086650effb47c6e0801e612c87db4cd4
<div class="container">
  	<div class="row mt-5">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="" class="img-fluid">
      </div>
    </div>
  </div>
    <h1><center>Body Care Services</center></h1>
>>>>>>> d056c456610e9c9c51a748b7a0444981262a4ded
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" >
          <img src="{{asset('frontend/images/b1.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a
          <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset($service->photo)}}">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
              <p>{{$service->name}}</p>
          </div>

        @endforeach
      </div>
    </div> 
<<<<<<< HEAD

=======
>>>>>>> ea9b5a970646e6c62eda2b850f3a2ed083e270f9
@endsection