@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Customer List</h1>
        <a href="{{ route('customers.create') }}" class="btn btn-info mr-3">Add new</a>
  	
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
			    		<td>Email</td>
			    		<td>Date</td>
			    		<td>Phone No</td>
			    		<td>Gender</td>
			    		<td>Category</td>
			    		<td>address</td>
			    		<td>Action</td>
		    		</tr>
		    	</thead>
		    	
		    	<tbody>
		    		@php $i=1; @endphp
		    		@foreach ($customers as $customer)
		    		<tr>
		    			<td>{{ $i++ }}</td>
			    		<td>{{ $customer->customer_name }}</td>
			    		<td>{{ $customer->email }}</td>
			    		<td>{{ $customer->date }}</td>			    		
			    		<td>{{ $customer->phone_no }}</td>
			    		<td>{{ $customer->gender }}</td>
			    		<td>{{ $customer->category_name}}</td>			    		
			    		<td>{{ $customer->address }}</td>
			    		<td>
			    		<form method="post" action="{{ route('customers.destroy',$customer->id) }}">
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