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
				<img src="{{ asset($services->photo) }}" width="350px" height="450px">
			</div>	


			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
				
				<h4> Service Name:{{$services->service_name }}</h4>

				<p>
					<h3>Duration: 1-2hr<br>$180<br></h3>
    				Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
    				<h3>Effects</h3>
    				<li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the.</li>
    				<li>Scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
    				<li>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley.</li>
    				<li>It has survived not only five centuries, but also the leap into electronic typesetting.</li>
				</p>

				<p> Price:	{{$services->price}}</p>
				<p>Duration:{{ $services->duration }}</p>
				</h3>

				<a href="#" class="btn btn-info">Appointment</a>
				
			</div>
		</div>
	</div>

		
		
@endsection