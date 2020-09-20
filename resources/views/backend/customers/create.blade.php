@extends ('backend.backendtemplate')
@section('content')



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-7">
                              <h1>Get Appointment Now</h1>
                        </div>
                    </div>
  
                    <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                          <div class="col-md-6">
                            <input type="name" name="customer_name" class="form-control" id="inputname" >
                        </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-md-6">
                          <input type="email" name="email" class="form-control" id="inputemail">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Date</label>
                          <div class="col-md-6">
                            <input type="date" name="date" class="form-control" id="inputdate">
                          </div>
                    </div>

                    <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Phone No</label>
                          <div class="col-md-6">
                             <input type="text" name="phone_no" class="form-control" id="inputphoto">
                          </div>
                    </div>
  
                    <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Gender</label>
                          <div class="col-md-6">
                             <input type="radio" name="gender" value="male" checked="">Male
                             <input type="radio" name="gender" value="female">Female
                          </div>
                    </div>
   
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Service</label>
                          <select class="form-control form-control-md" id="inputCategory" name="service_id">
                              <optgroup label="Choose Category">
                                @foreach($services as $service)
                                  <option value="{{ $service->id }}">{{ $service->service_name}}</option>
                                @endforeach
                              </optgroup>
                          </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">address</label>
                        <div class="col-md-6">
                          <input type="text" name="address" class="form-control" id="inputphoto" >
                        </div>
                    </div>
  
                    <input type="submit" value="Booking Now" class="btn btn-primary" onclick="" >
  
                </form>
            </div>  
        </div>
    </div>
@endsection