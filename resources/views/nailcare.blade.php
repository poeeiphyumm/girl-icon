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
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
            


            <a href="#" class="btn btn-info">Appointment</a>
            
          </div>
          </a>

        @endforeach

<<<<<<< HEAD
=======
    
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
    </div> 
  </div>
@endsection