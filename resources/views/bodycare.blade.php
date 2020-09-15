@extends('master')
@section('content')


  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1><center>Body Care Services</center></h1>
      </div>
    </div>

<<<<<<< HEAD
        <div class="container-fluid">
      <div class="row">

         @foreach($services as $service)
=======
     <div class="container-fluid">
      <div class="row">

            @foreach($services as $service)
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c
        <a href="{{ route('bodycaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
<<<<<<< HEAD
            


              <a href="#" class="btn btn-info">Appointment</a>
=======
              <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt architecto ab hic rem placeat eius commodi eum eligendi recusandae sed qui cumque quibusdam.</P>
            <a href="{{asset('booking')}}" class="btn btn-info">Appointment</a>
            
            <a href="#" class="btn btn-info">Appointment</a>
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c
            
          </div>
          </a>

        @endforeach

    
    </div> 
<<<<<<< HEAD
=======

  </div>

          
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c
@endsection