@extends('master')
@section('content')


<<<<<<< HEAD
  <div class="jumbotron jumbotron-fluid subtitle">
=======
    <div class="jumbotron jumbotron-fluid subtitle">
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
      <div class="container">
        <h1><center>Hair Care Services</center></h1>
      </div>
    </div>

<<<<<<< HEAD
        <div class="container-fluid">
=======
      <div class="container-fluid">
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
      <div class="row">

         @foreach($services as $service)
        <a href="{{ route('haircaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
            
              <p class=" text-info">{{ $service->service_name }}</p>

              <a href="{{ asset('booking') }}">
                <input type="submit" value="Appointment Now" class="btn btn-primary" onclick="" >
              </a>
            
          </div>
          </a>

        @endforeach

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
@endsection