@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Service Detail List</h1>
		{{-- <a href="{{route('items.create')}}" class="btn btn-dark">Add New</a> --}}
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			{{-- <input type="date" name="date" value="dd/mm/yy">
			<input type="date" name="date" value="dd/mm/yy">
			<input type="button" value="search">
			<br> --}}
			<table class="table table-bordered">
			<thead class="thead-dark">
		<tr>
			<td>No</td>
			<td>Employee_id</td>
			<td>Service_id</td>
			<td>Action</td>
		</tr>

	</thead>
	<tbody>
		@php $i=1; @endphp
		@foreach($service_details as $servicedetail)
		<tr>
			<td>{{$i++}}</td>
		<td>{{$servicedetail->employee_id}}</td>
		<td>{{$servicedetail->service_id}}</td>
		<td><a href="{{route('orders.show',$order->id)}}" class="btn btn-success">Detail</a>
		</td>
	</tr>
	@endforeach

	</tbody>
</table>
</div>
@endsection