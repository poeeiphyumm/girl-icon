@extends('master')
@section('content')


      <div class="jumbotron jumbotron-fluid subtitle">
            <div class="container">
              <h1><center>Hair Care Services</center></h1>
            </div>
      </div>


      <div class="container-fluid">
            <div class="row">

              @foreach($services as $service)
                <a href="{{ route('haircaredetail',$service->id) }}">
                  <div class="col-lg-4 col-md-4 col-sm-12">


            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">


                      <p class=" text-info">{{ $service->service_name }}</p>
                      
                          <a href="{{ asset('booking') }}" class="btn btn-info">Appointment</a>
                      <a href="#" class="btn btn-info">Appointment</a>
            
                  </div>
                </a>

              @endforeach


          </div>
       </div> 
  @endsection

             
            
                  </div>
                </a>

              @endforeach



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

