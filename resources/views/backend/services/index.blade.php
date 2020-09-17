@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Service List</h1>
        <a href="{{ route('services.create') }}" class="btn btn-info mr-3">Add new</a>
    </div>
</div>

<div class="container">
    <div class="row">
    	<div class="col-md-12">
   			<table class="table table-bordered ">
    			<thead class="thead-dark bg-dark text-white" >
		    		<tr>
			    		<td>No</td>
			    		<td>Name</td>
			    		<td>Duration</td>
			    		<td>Price</td>
			    		<td>Photo</td>
<<<<<<< HEAD
			    		<td>Category Name</td>
=======
<<<<<<< HEAD
			    		<td>Category Name</td>
=======
			    		<td>Category_id</td>
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
			    		<td>Action</td>

		    		</tr>
		    	</thead>
		    	
		    	<tbody>
		    		@php $i=1; @endphp
		    		@foreach ($services as $service)
		    		<tr>
		    			<td>{{ $i++ }}</td>
			    		<td>{{ $service->service_name }}</td>
			    		<td>{{ $service->duration }}</td>
			    		<td>{{ $service->price }}</td>
<<<<<<< HEAD
			    		<td><img src="{{asset($service->photo)}}" width="50px" height="50px"></td>
			    		<td>{{ $service->category }}</td>
=======
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9

<<<<<<< HEAD
			    		<td><img src="{{ asset($service->photo) }}" height="50px" width="50px"></td>

			    		<td>{{ $service->category }}</td>

=======
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
			    		<td>
			    			<a href="{{route('services.show',$service->id)}}" class="btn btn-primary">Detail</a>

			    			<a href="{{ route('services.edit',$service->id) }}" class="btn btn-secondary">Edit</a>


			    			<form method="post" action="{{ route('services.destroy',$service->id) }}">
			    				@csrf
			    				@method('DELETE')
			    			
			    			 	<input type="submit" class="btn btn-danger" value="Delete">
			    			</form>
			    			
			    		</td>
		    		</tr>
		    		@endforeach
    			</tbody>
    			
    		</table>
    	</div>
	</div>
</div>

@endsection