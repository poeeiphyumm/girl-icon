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
           <tr>
              <td>{{ $i++ }}</td>
              
              <td>{{ $services->service_name}}</td> 
              <td>{{ $services->category->category_name}}</td>
              <td>
                <img src="{{asset( $services->photo) }}" width="70px" height="60px"></td>
              <td>


              <form method="post" action="{{ route('services.destroy',$services->id) }}">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger" value="Delete">
                </form>
              </td>
            </tr>
         </tbody>
          
        </table>
      </div>
  </div>
</div>


{{-- <div class="container">
  <h1> Service_Details List</h1><br>
      
    <div class="row">
       <div class="col-lg-12 ">
         <form class="text-success rounded">
          {{ @foreach($categories as $category) --}}
          {{-- <h4>Service Name : {{ $services->service_name}}</h4><br>
          <h4>Category Id : {{ 'category_name '}}</h4> <br> 
{{          <h4>Duration : {{ $->duration }}</h4> <br>   
 --}}          {{-- <h4>Photo : </h4>   --}}
        {{--   <img src="{{asset("photo")}} " height="150px" width="200px">
          @endforeach
           </form>
       </div>
     </div>
  </div>  --}}

@endsection