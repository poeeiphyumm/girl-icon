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
<<<<<<< HEAD
      <div class="row">

         @foreach($services as $service)
=======
          <div class="row">

            @foreach($services as $service)
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
        <a href="{{ route('bodycaredetail',$service->id) }}">
          <div class="col-lg-4 col-md-4 col-sm-12">
            
              <img src="{{asset($service->photo)}}" width="400px" height="300px">
            


<<<<<<< HEAD
              <a href="#" class="btn btn-info">Appointment</a>
=======
<<<<<<< HEAD
              <a href="#" class="btn btn-info">Appointment</a>
=======
            <a href="#" class="btn btn-info">Appointment</a>
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
            
          </div>
          </a>

        @endforeach
<<<<<<< HEAD

    
    </div> 
<<<<<<< HEAD
  </div>
=======
=======
          </div>
       </div> 
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
@endsection