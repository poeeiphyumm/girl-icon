@extends('backend.backendtemplate')

@section('content')

<div class="container">
	<h1> Service_Details List</h1><br>
  		
  	<div class="row">
       <div class="col-lg-12 ">
         <form class="text-success rounded">
          <h4>Service Name : {{ $services->service_name }}</h4><br>
          <h4>Category Id : {{ $services->category_name }}</h4> <br> 
          <h4>Duration : {{ $services->duration }}</h4> <br>   
          {{-- <h4>Photo : </h4>   --}}
          <img src="{{asset($services->photo)}} " height="150px" width="200px">
           </form>
       </div>
     </div>
  </div>
	
@endsection