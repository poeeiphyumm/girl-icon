@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Employee List</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-info mr-3">Add new</a>
  	
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
<<<<<<< HEAD
=======
			    		<td>Service Name</td>
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
			    		<td>Email</td>
			    		<td>Photo</td>
			    		<td>Availability Status</td>
			    		<td>Service Name</td>
			    		<td>Actions</td>
		    		</tr>
		    	</thead>
		    	
		    	<tbody>
		    		@php $i=1; @endphp
		    		@foreach ($employees as $employee)
		    		<tr>
		    			<td>{{ $i++ }}</td>
			    		<td>{{ $employee->employee_name}}</td>
<<<<<<< HEAD
=======
			    		<td>{{ $employee->service }}</td>
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
			    		<td>{{ $employee->email }}</td>
			    		<td><img src="{{ asset($employee->photo)}}" width="70px" height="60px"></td>

			    		<td>{{ $employee->availability_status }}</td>
			    		<td>{{ $employee->cname}}</td>
			    		<td>

			    						    			
			    			<a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-secondary">Edit</a>

			    			
			    			<form method="post" action="{{ route('employees.destroy',$employee->id) }}">
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