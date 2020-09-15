@extends('master')
@section('content')


  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Hair Care Services</center></h1>
      </div>
    </div>

<<<<<<< HEAD
      <div class="container-fluid">
            <div class="row">

              @foreach($services as $service)
                <a href="{{ route('haircaredetail',$service->id) }}">
                  <div class="col-lg-4 col-md-4 col-sm-12">
=======
        <div class="container-fluid">
          <div class="row">

            @foreach($services as $service)
        <a href="{{ route('haircaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
            
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
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


          </div>
<<<<<<< HEAD
       </div> 
  @endsection

=======
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
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
