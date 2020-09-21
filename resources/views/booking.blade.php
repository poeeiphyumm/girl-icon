@extends('master')
@section('content')  

  <div class="slide-one-item home-slider owl-carousel">
   
      <div class="site-blocks-cover inner-page-cover" style="background-image: url({{asset('front/images/hero_bg_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
              <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                  <h2 class="text-white font-weight-light mb-2 display-1">Appointment</h2>

              
                </div>
              </div>
          </div>
      </div>  
  </div>

  <div class="col-md-7 mb-5">

      <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
      <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-12">
      <h1>Get Appointment Now</h1>
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-md-12">
      <input type="name" name="customer_name" class="form-control" id="inputname" placeholder="name" required="required">
              @error('name')
                <div class="text-danger">{{ ($message) }}</div>
              @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-md-12">
      <input type="email" name="email" class="form-control" id="inputemail" placeholder="E-mail" required="required">
              @error('email')
                <div class="text-danger">{{ ($message) }}</div>
              @enderror
    </div>
  </div>
  <div class="form-group row">
    
    <div class="col-md-12">
      <input type="date" name="date" class="form-control" id="inputdate" required="required">
              @error('date')
                <div class="text-danger">{{ ($message) }}</div>
              @enderror
    </div>
  </div>

  <div class="form-group row">
    
    <div class="col-md-12">
      <input type="time" name="time" class="form-control" id="inputtime" required="required">
              @error('time')
                <div class="text-danger">{{ ($message) }}</div>
              @enderror
    </div>
  </div>
  <div class="form-group row">
    
    <div class="col-md-12">
      <input type="text" name="phone_no" class="form-control" id="inputphoto" placeholder="phone number" required="required">
              @error('phone_no')
                <div class="text-danger">{{ ($message) }}</div>
              @enderror
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Gender</label>
    <div class="col-md-6">
      <input type="radio" name="gender" value="male" checked="" required="required">Male
      <input type="radio" name="gender" value="female" required="required">Female
    </div>
              @error('gender')
                <div class="text-danger">{{ ($message) }}</div>
              @enderror
  </div>
   
   <div class="form-group row">
        <label class="col-md-3 col-form-label">Service</label>
        <select class="form-control form-control-md col-md-9" id="inputService" name="service_id">
          <optgroup label="Choose service">
            @foreach($services as $service)
              <option value="{{ $service->id }}" @if($id==$service->id){{ "Selected"}} @endif>{{ $service->service_name}}</option>
            @endforeach
          </optgroup>
        </select>
  </div>

  <div class="form-group row">
   
    <div class="col-md-12">
      <input type="text" name="address" class="form-control" id="inputphoto" placeholder=" address" required="required" >
    </div>
  </div>

  @role('Customer')

    <input type="submit" value="Appointment Now" class="btn btn-primary" onclick="" >
   
  @else
 
  
  <a href="{{ route('loginpage') }}" class="btn btn-secondary btn-block mainfullbtncolor col-md-8">Login To Appointment</a>

  @endrole
</form>
    </div>  
  </div>
</div>
</div>


  <div class="site-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-4 text-black">We want your hair to look fabulous</h2>
            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5 text-white">Visit Our Beaurt Clinic Now</a></p>
          </div>
        </div>
      </div>
  </div>
 @endsection