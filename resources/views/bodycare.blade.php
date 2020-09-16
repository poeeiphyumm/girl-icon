@extends('master')
@section('content')


    <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Body Care Services</center></h1>
      </div>
    </div>

<<<<<<< HEAD
      <div class="container-fluid">
=======
<<<<<<< HEAD

     <div class="container-fluid">
=======
    <div class="container-fluid">s
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
      <div class="row">

            @foreach($services as $service)

        <a href="{{ route('bodycaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
<<<<<<< HEAD
            
<<<<<<< HEAD
              <p class=" text-info">{{ $service->service_name }}</p>

              <a href="{{ asset('booking') }}">
                <input type="submit" value="Appointment Now" class="btn btn-primary" onclick="" >
              </a>

            
=======
<<<<<<< HEAD



=======
<<<<<<< HEAD
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt architecto ab hic rem placeat eius commodi eum eligendi recusandae sed qui cumque quibusdam.</p>

=======
            <br><br>

<<<<<<< HEAD
              <p class=" text-info">{{ $service->service_name }}</p>
              
            <a href="{{ asset('booking') }}" class="btn btn-info">Appointment</a>
=======
>>>>>>> 697a619dc35e92c422ead583f187d4bcb701916a
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
              <a href="#" class="btn btn-info">Appointment</a>


            
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
=======
              <p class=" text-info">{{ $service->service_name }}</p>
              
            <a href="{{ asset('booking') }}" class="btn btn-info">Appointment</a>
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
          </div>
          </a>

        @endforeach
<<<<<<< HEAD


    </div> 
<<<<<<< HEAD
  </div>
  
    <div class="site-section">
=======

  </div>

          </div>
       </div> 


    
    </div> 
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

=======
      </div> 
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
  </div>
  {{-- <div class="site-section">
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-4 text-black">We want your hair to look fabulous</h2>
            <p class="mb-0"><a href="{{asset('/')}}" class="btn btn-primary py-3 px-5 text-white">Visit Our Salon Now</a></p>
          </div>
        </div>
      </div>
<<<<<<< HEAD
    </div>
<<<<<<< HEAD
=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
=======
    </div> --}}
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
@endsection