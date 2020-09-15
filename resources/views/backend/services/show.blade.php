@extends ('backend.backendtemplate')
<<<<<<< HEAD

=======
>>>>>>> 10de3259a9a6997cfac8affc02899511a3f7a34a
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
            @foreach($service->employees as $employee)
            {{-- @php 
              $subtotal = $item->price * $item->pivot->qty;
              $total += $subtotal;
            @endphp --}}
=======
            @foreach($services->employees as $employee)
>>>>>>> 10de3259a9a6997cfac8affc02899511a3f7a34a
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