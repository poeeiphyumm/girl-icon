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
   {{-- <div class="form-group row">
    <label class="col-sm-2 col-form-label">Services</label>
    <div class="col-md-6">
        
      <input type="text" name="service" class="form-control" id="inputservice" placeholder="eg.bodycare/nailcare.....">
    </div>
  </div> --}}
   <div class="form-group row">
        <label class="col-sm-2 col-form-label">Category</label>
        <select class="form-control form-control-md col-md-6" id="inputCategory" name="category_name">
          <optgroup label="Choose Category">
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->category_name }}</option>
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
  
  <input type="submit" value="Booking Now" class="btn btn-primary" onclick="alert('Make Appointment success')" >
  
</form>
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