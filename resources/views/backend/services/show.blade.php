@extends ('backend.backendtemplate')
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
              <td>Employee Name</td>
              <td>Service Name</td>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp

            @foreach($employees as $employee)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$employee->employee_name}}</td>
              <td>{{$employee->service->service_name}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection