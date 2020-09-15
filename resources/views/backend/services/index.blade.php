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
			    		<td>Category_id</td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
			    		<td>Service_Image</td>

			    		<td>Photo</td>

>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
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
			    		<td>{{ $service->photo }}</td>
			    		<td>{{ $service->category_id }}</td>
			    		<td>
			    			<a href="{{route('services.show',$service->id)}}" class="btn btn-primary">Detail</a>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
			    		<td>{{ $service->photo }}</td>
			    		<td>{{ $service->category_id }}</td>
=======
			    		<td>{{ $service->photo }}</td>
			    		<td>{{ $service->photo }}</td>
			    		<td>{{ $service->category_id }}</td>
			    		

			    		


			    		<td>{{ $service->category_id }}</td>
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
			    		<td>{{ $service->photo }}</td>
			    		<td>{{ $service->category_id }}</td>
			    		
<<<<<<< HEAD
=======
			    		<td>{{ $service->photo }}</td>
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
			    		<td>
			    			<a href="{{ route('services.show',$service->id) }}" class="btn btn-primary">Detail</a>

>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
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