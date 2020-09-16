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
              <td>Customer Name</td>
              <td>Email</td>
              
            </tr>
          </thead>
          <tbody>
            @php $i=1; @endphp

            @foreach($customer as $customer)
            {{-- @php 
              $subtotal = $item->price * $item->pivot->qty;
              $total += $subtotal;
            @endphp --}}
            <tr>
              <td>{{$i++}}</td>
              <td>{{$customer->name}}</td>
              <td>{{$customer->email}}</td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection