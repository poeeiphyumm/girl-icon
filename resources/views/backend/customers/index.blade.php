@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
<<<<<<< HEAD
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Appointment List</h1>
=======
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Customer List</h1>
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
        <a href="{{ route('customers.create') }}" class="btn btn-info mr-3">Add new</a>

    </div>
</div>

			<form class="col-lg-12"> 
				<label >Start Date</label>
				<input type="date" name="start_date" value="mm/dd/yyyy">
				<label >End Date</label>
				<input type="date" name="end_date" value="mm/dd/yyyy">
				<input class="btn btn-success" type="submit" value="Search">

			</form><br>

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
<<<<<<< HEAD
			    		<td>Service Name</td>
=======
			    		<td>Service</td>
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
			    		<td>address</td>
			    		<td>Action</td>
		    		</tr>
		    	</thead>
		    	
		    	<tbody>
		    		@php $i=1; @endphp
		    		@foreach ($services as $service)
		    		{{-- @php echo($customer-); die(); --}}
		    		{{-- @endphp; --}}
		    		<tr>
		    			<td>{{ $i++ }}</td>
<<<<<<< HEAD
			    		<td>{{ $service->customer_name }}</td>
			    		<td>{{ $service->email }}</td>
			    		<td>{{ $service->date }}</td>			    		
			    		<td>{{ $service->phone_no }}</td>
			    		<td>{{ $service->gender }}</td>
			    		<td>{{ $service->cname}}</td>	
			    		<td>{{ $service->address }}</td>
=======
			    		<td>{{ $customer->customer_name }}</td>
			    		<td>{{ $customer->email }}</td>
			    		<td>{{ $customer->date }}</td>			    		
			    		<td>{{ $customer->phone_no }}</td>
			    		<td>{{ $customer->gender }}</td>
			    		<td>{{ $customer->service_name}}</td>			    		
			    		<td>{{ $customer->address }}</td>
>>>>>>> cb1e6f28d3024a8d525ecff6397a50b072efd72a
			    		<td>

			    			
			    		<a href="{{ route('customers.show',$service->id) }}" class="btn btn-secondary">Assign</a>

			    		<form method="post" action="{{ route('customers.destroy',$service->id) }}">
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