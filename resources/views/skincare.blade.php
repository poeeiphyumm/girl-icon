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
        <a href="{{ route('skincaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
            

<<<<<<< HEAD
              <p class=" text-info">{{ $service->service_name }}</p>
            <a href="{{ asset('booking') }}" class="btn btn-info">Appointment</a>
=======

            <a href="{{asset('booking')}}" class="btn btn-info">Appointment</a>
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
            
          </div>
          </a>

        @endforeach
<<<<<<< HEAD
</div>
</div>
=======

    <h1><center>Skin Care Services</center></h1><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" >
          <img src="{{asset('frontend/images/s1.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset('frontend/images/s2.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset('frontend/images/s3.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
      </div>
    
    </div> 
  </div>
  <div class="site-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-4 text-black">We want your hair to look fabulous</h2>
            <p class="mb-0"><a href="{{asset('/')}}" class="btn btn-primary py-3 px-5 text-white">Visit Our Salon Now</a></p>
          </div>
        </div>
      </div>
    </div>
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
@endsection