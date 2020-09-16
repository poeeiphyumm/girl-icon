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
    				Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
    				<h3>Effects</h3>
    				<li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the.</li>
    				<li>Scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
    				<li>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley.</li>
    				<li>It has survived not only five centuries, but also the leap into electronic typesetting.</li>
				</p>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

				<p> Price:	{{$services->price}}</p>
				<p>Duration:{{ $services->duration }}</p>
=======
<<<<<<< HEAD
				<p> Price:	{{$services->price}}</p>
				<p>Duration:{{ $services->duration }}</p>
=======

				<p> Price:	{{$services->price}}</p>
				<p>Duration:{{ $services->duration }}</p>
				<h3> 
				
				Price:	{{$services->price}}
				</h3>
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
=======

=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
				<p> Price:	{{$services->price}}</p>
				<p>Duration:{{ $services->duration }}</p>

				<a href="{{ asset('booking') }}" class="btn btn-info">Appointment</a>
				
			</div>
		</div>
	</div>		
		
<<<<<<< HEAD
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
=======
				<p>Duration:{{ $services->duration }}</p>				
				    </p>Price:	{{$services->price}}</p>
				</h3>
>>>>>>> 10de3259a9a6997cfac8affc02899511a3f7a34a

				<a href="{{asset('booking')}}" class="btn btn-info">Appointment</a>
				
			</div>
		</div>
<<<<<<< HEAD
<<<<<<< HEAD

	</div>
=======
<<<<<<< HEAD
	</div>
</div>
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
		
=======
</div>
	</div>		
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
		
=======
	</div>
<<<<<<< HEAD
>>>>>>> 10de3259a9a6997cfac8affc02899511a3f7a34a
=======
=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
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
<<<<<<< HEAD
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
@endsection