@extends('master')
@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 145807f5feac1a66dc1eae8a8bc512ebfed15550
    <h1><center>Body Care Services</center></h1><br><br>
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb


  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Body Care Services</center></h1>
      </div>
    </div>

        <div class="container-fluid">
      <div class="row">

<<<<<<< HEAD
         @foreach($services as $service)
        <a href="{{ route('bodycaredetail',$service->id) }}">
=======
<<<<<<< HEAD
         @foreach($services as $service)
        <a href="{{ route('bodycaredetail',$service->id) }}">
=======
        @foreach($services as $service)


         {{--  <div class="col-lg-4 col-md-4 col-sm-12">

<<<<<<< HEAD
=======
        <a href="{{ route('bodycaredetail',$service->id) }}">


         {{--  <div class="col-lg-4 col-md-4 col-sm-12">


>>>>>>> 145807f5feac1a66dc1eae8a8bc512ebfed15550
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
<<<<<<< HEAD
=======

>>>>>>> 145807f5feac1a66dc1eae8a8bc512ebfed15550
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
        
            <a href="#" class="btn btn-info">Appointment</a>
            
          </div>
          </a>

        @endforeach

    
    </div> 
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 145807f5feac1a66dc1eae8a8bc512ebfed15550
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
@endsection