@extends('backend.backendtemplate')
@section('content')

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block"> Service Detail List</h1>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered ">
          <thead class="thead-dark bg-dark text-white" >
            <tr>
              <td>No</td>
              <td>Service Name</td>
              <td>Category Name</td>
              <td>Photo</td>
              <td>Action</td>
            </tr>
          </thead>
          
          <tbody>
            @php $i=1; @endphp
            @foreach ($categories as $category)
            <tr>
              <td>{{ $i++ }}</td>
              
              <td>{{ $category->service_name}}</td> 
              <td>{{ $category->caname}}</td>
              <td>
                <img src="{{asset( $category->photo) }}" width="70px" height="60px"></td>
              <td>


              <form method="post" action="{{ route('services.destroy',$category->id) }}">
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