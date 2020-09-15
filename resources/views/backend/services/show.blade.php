<<<<<<< HEAD
@extends('backend.backendtemplate')
=======
@extends ('backend.backendtemplate')
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6

@section('content')
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
     
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <td>No</td>
              <td>Service_id</td>
              <td>Employee_id</td>
              <td>Service_Name</td>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp
<<<<<<< HEAD
            @foreach($services as $employee)
=======

            @foreach($service->employees as $employee)
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
            {{-- @php 
              $subtotal = $item->price * $item->pivot->qty;
              $total += $subtotal;
            @endphp --}}
            <tr>
              <td>{{$i++}}</td>
              <td>{{$employee->service_id}}</td>
              <td>{{$employee->employee_id}}</td>
              <td>{{$employee->}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection