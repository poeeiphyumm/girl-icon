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
              <th>No</th>
              <td>Name</td>
              <td>Email</td>
              <td>Service_name</td>
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp

            @foreach($services->employees as $employee)
            {{-- @php 
              $subtotal = $item->price * $item->pivot->qty;
              $total += $subtotal;
            @endphp --}}
            <tr>
              <td>{{$i++}}</td>
              <td>{{$employee->name}}</td>
              <td>{{$employee->email}}</td>
              <td>{{$employee->pivot->service_name}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection