@extends('backend.backendtemplate')

@section('content')

<div class="container">
	<h1> Service_Details List</h1>
  		
  	<div class="row">
       <div class="col-lg-12">
         <table class="table table-bordered" >
           <thead>
             <tr>
               <th>NO</th>
               <th>Service_id</th>
               <th>Employee_id</th>
               <th>Service_name</th>
               <th>Actions</th>
            </tr> 

            </thead>
           <tbody >

           	@php $i=1; @endphp
            @foreach ($services as $employee)
            <tr>
              <td>{{$i++ }}</td>
              <td>{{ $employee->service_id }}</td>
              <td>{{ $employee->employee_id }}</td>
              <td>{{ $employee->service_name }}</td>
              <td>
                <a href="" class="btn btn-primary">Detail</a>
                
              </td>
            </tr>
            @endforeach
             
           </tbody>
         </table>
       </div>
     </div>
  </div>
	







@endsection