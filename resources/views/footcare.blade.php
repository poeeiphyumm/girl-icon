@extends('master')
@section('content')


  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Foot Care Services</center></h1>
      </div>
    </div>

        <div class="container-fluid">
          <div class="row">

            @foreach($services as $service)
        <a href="{{ route('footcaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
            


            <a href="" class="appointment text-decoration-none" value="Appointment">Appointment</a>
            
          </div>
          </a>

        @endforeach
          </div>
       </div> 
@endsection