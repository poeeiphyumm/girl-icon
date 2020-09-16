@extends('master')
@section('content')


<<<<<<< HEAD
    <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Hair Care Services</center></h1>
=======
      <div class="jumbotron jumbotron-fluid subtitle">
            <div class="container">
              <h1><center>Hair Care Services</center></h1>
            </div>
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
      </div>

<<<<<<< HEAD
=======
<<<<<<< HEAD

>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
      <div class="container-fluid">
      <div class="row">

<<<<<<< HEAD
         @foreach($services as $service)
        <a href="{{ route('haircaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
=======
              @foreach($services as $service)
                <a href="{{ route('haircaredetail',$service->id) }}">
                  <div class="col-lg-4 col-md-4 col-sm-12">
=======
        <div class="container-fluid">
          <div class="row">
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601


>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
<<<<<<< HEAD


                      <p class=" text-info">{{ $service->service_name }}</p>
                      
                          <a href="{{ asset('booking') }}" class="btn btn-info">Appointment</a>
                      <a href="#" class="btn btn-info">Appointment</a>
            
                  </div>
                </a>

              @endforeach


          </div>
       </div> 
  @endsection

             
=======
            
<<<<<<< HEAD
              <p class=" text-info">{{ $service->service_name }}</p>

             <a href="{{ asset('booking') }}">
                <input type="submit" value="Appointment Now" class="btn btn-primary" onclick="" >
              </a>
            
          </div>
          </a>

        @endforeach

    </div> 
  </div>
  
    <div class="site-section">
=======
                      <img src="{{asset($service->photo)}}" width="400px" height="300px">

                      <p class=" text-info">{{ $service->service_name }}</p>
                      
                          <a href="{{ asset('booking') }}" class="btn btn-info">Appointment</a>

                      <a href="{{asset('booking')}}" class="btn btn-info">Appointment</a>
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
            
                  </div>
                </a>

              @endforeach

<<<<<<< HEAD


        @endforeach

    <h1><center>Hair Care Services</center></h1><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" >
          <img src="{{asset('frontend/images/h2.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset('frontend/images/h5.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
           <img src="{{asset('frontend/images/h3.jpeg')}}">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et </p>
        </div>


    
    </div> 


          </div>
       </div> 

@endsection

          </div>

       </div> 

@endsection

  @endsection

=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
       </div>
       <div class="site-section">
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-4 text-black">We want your hair to look fabulous</h2>
            <p class="mb-0"><a href="{{asset('/')}}" class="btn btn-primary py-3 px-5 text-white">Visit Our Salon Now</a></p>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
@endsection
=======

@endsection
<<<<<<< HEAD

=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
