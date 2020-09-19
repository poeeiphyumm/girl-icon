@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Assign List</h1>
    </div>
</div>

<div class="container">
    <div class="row">
    	<div class="col-md-12">
   			<table class="table table-bordered ">
    			<thead class="thead-dark bg-dark text-white" >
		    		<tr>
			    		<td>No</td>
			    		<td>Employee Name</td>
			    		<td>Service Name</td>
			    		<td>Action</td>
		    		</tr>
		    	</thead>
		    	
		    	<tbody>
		    		@php $i=1; @endphp
		    		@foreach ($employees as $employee)
		    		<tr>
		    			<td>{{ $i++ }}</td>
			    		<td>{{ $employee->aa}}</td>
			    		<td>{{ $employee->service_name}}</td>	
			    		<td>


			    		<form method="post" action="{{ route('customers.destroy',$employee->id) }}">
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