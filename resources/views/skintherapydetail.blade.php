@extends('master')

@section('content')
	
				

	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-black"> Service Name:{{ $services->service_name }} </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container">

		<div class="row mt-5">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<img src="{{ asset($services->photo) }}" class="img-fluid">
			</div>	


			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
				
				<h4> Service Name:{{$services->service_name }}</h4>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<p> Price:	{{$services->price}}</p>
				<p>Duration:{{ $services->duration }}</p>
				
				

				<a href="#" class="btn btn-info">Appointment</a>
				
			</div>
		</div>
	</div>

		
		
@endsection