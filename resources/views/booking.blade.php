@extends('master')
@section('content')  
<<<<<<< HEAD

  <div class="slide-one-item home-slider owl-carousel">
   
      <div class="site-blocks-cover inner-page-cover" style="background-image: url({{asset('front/images/hero_bg_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
              <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                  <h2 class="text-white font-weight-light mb-2 display-1">Appointment</h2>

              
                </div>
              </div>
=======
    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover inner-page-cover" style="background-image: url({{asset('front/images/hero_bg_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light mb-2 display-1">Appointment</h2>

                </div>
              </div>
            </div>
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
          </div>
      </div>  
  </div>

<<<<<<< HEAD
 {{--  <div class="col-md-7 mb-5"> --}}
=======
  <div class="col-md-7 mb-5">

      <div class="container my-5">
<<<<<<< HEAD
=======
    </div>
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
<div class="container my-5">
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
    <div class="row justify-content-center">
      <div class="col-md-8">
      <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-12">
      <h1>Get Appointment Now</h1>
    </div>
  </div>
<<<<<<< HEAD
  
=======

  </form>

</div>
<div class="row">
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Get In Touch</a></p>
            </div>
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
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
<<<<<<< HEAD
=======
        <label class="col-md-3 col-form-label">Category</label>
        <select class="form-control form-control-md col-md-9" id="inputCategory" name="category_name">
<<<<<<< HEAD
=======
   {{-- <div class="form-group row">
    <label class="col-sm-2 col-form-label">Services</label>
    <div class="col-md-6">
      <input type="text" name="service" class="form-control" id="inputservice" placeholder="eg.bodycare/nailcare.....">
    </div>
  </div> --}}
   <div class="form-group row">

        <label class="col-sm-2 col-form-label">Category</label>
        <select class="form-control form-control-md col-md-6" id="inputCategory" name="category_name">


        <label class="col-sm-2 col-form-label">Service</label>
        <select class="form-control form-control-md" id="inputCategory" name="category">
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9

        <label class="col-sm-2 col-form-label">Category</label>
        <select class="form-control form-control-md col-md-6" id="inputCategory" name="category_name">
        <label class="col-sm-2 col-form-label">Service</label>
        <select class="form-control form-control-md" id="inputCategory" name="category">

>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
          <optgroup label="Choose Category">
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
          </optgroup>
        </select>
              @error('category_name')
                <div class="text-danger">{{ ($message) }}</div>
              @enderror
  </div>
<<<<<<< HEAD
=======

  </div>

<<<<<<< HEAD
=======
  </div>

  </div>
    </div>
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
  <div class="form-group row">
   
    <div class="col-md-12">
      <input type="text" name="address" class="form-control" id="inputphoto" placeholder=" address" required="required" >
    </div>
  </div>
<<<<<<< HEAD
  @role('Customer')
=======
  
<<<<<<< HEAD
  @role('Customer')
   <a href="{{route('login')}}" class="btn btn-info float-right">Login To Appointment</a>
   @else
        <button class="btn btn-info float-right buy_now">Get Appointment</button>
        
       
    @endrole
=======
  <input type="submit" value="Appointment Now" class="btn btn-primary" onclick="" >
  
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

   <a href="{{ route('loginpage') }}" class="btn btn-secondary btn-block mainfullbtncolor col-md-8">Login To Appointment</a>
  @else
 
  <input type="submit" value="Appointment Now" class="btn btn-primary" onclick="" >
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9

<<<<<<< HEAD
  @endrole
=======
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
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
<<<<<<< HEAD
 @endsection
=======
 @endsection
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
