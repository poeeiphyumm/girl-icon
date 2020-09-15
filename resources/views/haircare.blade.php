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
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
            
                      <img src="{{asset($service->photo)}}" width="400px" height="300px">
                


<<<<<<< HEAD
                      <a href="#" class="btn btn-info">Appointment</a>
            
                  </div>
                </a>

              @endforeach


          </div>
       </div> 
  @endsection
=======
              <a href="#" class="btn btn-info">Appointment</a>
            
          </div>
          </a>

        @endforeach
       </div> 
<<<<<<< HEAD
@endsection
=======
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
@endsection
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
