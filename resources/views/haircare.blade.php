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
        <div class="container-fluid">
      <div class="row">

         @foreach($services as $service)
        <a href="{{ route('haircaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
            
                      <img src="{{asset($service->photo)}}" width="400px" height="300px">
                


                      <a href="#" class="btn btn-info">Appointment</a>
            
                  </div>
                </a>

              @endforeach


          </div>
       </div> 
  @endsection
              <a href="#" class="btn btn-info">Appointment</a>
            
          </div>
          </a>

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