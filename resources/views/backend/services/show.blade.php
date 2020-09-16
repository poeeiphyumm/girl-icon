<<<<<<< HEAD

@extends ('backend.backendtemplate')
=======
@extends ('backend.backendtemplate')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
>>>>>>> 10de3259a9a6997cfac8affc02899511a3f7a34a
=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
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
<<<<<<< HEAD
            @foreach($service->employees as $employee)
            {{-- @php 
              $subtotal = $item->price * $item->pivot->qty;
              $total += $subtotal;
            @endphp --}}
=======
            @foreach($services->employees as $employee)
<<<<<<< HEAD
=======
            {{-- @php 
              $subtotal = $item->price * $item->pivot->qty;
              $total += $subtotal;
            @endphp --}}

<<<<<<< HEAD
=======
            @foreach($services->employees as $employee)
>>>>>>> 1eb3870294832960e6c3a85adbe3667af5fd9a8a
>>>>>>> 10de3259a9a6997cfac8affc02899511a3f7a34a
=======
            @foreach($employees as $employee)
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
            <tr>
              <td>{{$i++}}</td>
              <td>{{$employee->service_id}}</td>
              <td>{{$employee->employee_id}}</td>
              <td>{{$employee->service_name}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection