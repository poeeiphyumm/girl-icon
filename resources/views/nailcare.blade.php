@extends('master')
@section('content')

    <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Nail Care Services</center></h1>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">

         @foreach($services as $service)
        <a href="{{ route('nailcaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px"><br><br>
            
              <p class=" text-info">{{ $service->service_name }}</p>

              <a href="{{ asset('booking') }}">
                <input type="submit" value="Appointment Now" class="btn btn-primary" onclick="" >
              </a>
            
          </div>
        </a>

        @endforeach
</div>
</div>

<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
    </div> 
  </div>
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
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