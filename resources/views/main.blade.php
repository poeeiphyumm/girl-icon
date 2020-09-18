@extends('master')
@section('content')

<div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover" style="background-image: url({{asset('front/images/hero_bg_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h5 class="text-white font-weight-light text-uppercase">Welcome to Hairsal</h5>
              <h2 class="text-white font-weight-light mb-2 display-1">Beauty Salon Expert</h2>

              <p><a href="{{asset('booking')}}" class="btn btn-black py-3 px-5">Appointment Now!</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover" style="background-image: url({{asset('front/images/hero_bg_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light mb-2 display-1">Beautifull, Healthy You!</h2>

              <p><a href="{{asset('booking')}}" class="btn btn-black py-3 px-5">Appointment Now!</a></p>
            </div>
          </div>
        </div>
      </div>  

</div>


<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 text-center">
            <h3 class="line-height-1 mb-3"><span class="d-block display-4 line-height-1 text-black">Welcome to</span> <span class="d-block display-4 line-height-1"><em class="text-primary font-weight-bold">Beauty Clinic</em></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt architecto ab hic rem placeat eius commodi eum eligendi recusandae sed qui cumque quibusdam.</p>
            <p><a href="#"><small class="text-uppercase font-weight-bold">Read More</small></a></p>
          </div>
          <div class="col-md-6 col-lg-4">
            <figure class="h-100 hover-bg-enlarge">
              <div class="bg-image h-100 bg-image-md-height" style="background-image: url({{asset('front/images/img_2.jpg')}});"></div>
            </figure>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="border p-4 d-flex align-items-center justify-content-center h-100">
              <div class="text-center">
                <h2 class="text-primary h2 mb-5">Opening Hours</h2>
                <p class="mb-4">
                  <span class="d-block font-weight-bold">Mon – Fri </span>
                  10:00 AM – 8:30 PM
                </p>

                <p class="mb-4">
                  <span class="d-block font-weight-bold">Saturday</span>
                  Closed
                </p>

                <p class="mb-4">
                  <span class="d-block font-weight-bold">Sunday</span>
                  10:00 AM – 8:30 PM
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7">
            <h2 class="site-section-heading font-weight-light text-black text-center">Featured Services</h2>
          </div>
        </div>


<div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 col-xl-3 col-12 text-center mb-5">
            <a href="{{asset('facecare')}}"><img src="{{asset('frontend/images/face1.jpg')}}" alt="Image" class="rounded-circle mb-4" width="200px" height="200px"></a>
            <h3 class="text-black font-weight-light mb-4">Face Care</h3>
            <P>To reverse the ageing effect from the skin,try our face hydration treatment to get a youthful glow</P>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-3 col-12 text-center mb-5">
            <a href="{{asset('skincare')}}"><img src="{{asset('frontend/images/face2.jpeg')}}" alt="Image" class="rounded-circle mb-4" width="200px" height="200px"></a>
            <h2 class="text-black font-weight-light mb-4">Skin Care</h2>
            <p>you'll get therapies like panchakarma treatment which can help you far living a healthy life.</p>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-3 col-12 text-center mb-5">
            <a href="{{asset('haircare')}}"><img src="{{asset('frontend/images/spa1.jpeg')}}" alt="Image" class="rounded-circle mb-4" width="200px" height="200px"></a>
            <h2 class="text-black font-weight-light mb-4">Hair Care</h2>
            <p>We offer the professial hair care for all hair types discover the best hair treatments,for healthy.</p>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-3 col-12 text-center mb-5">
            <a href="{{asset('bodycare')}}"><img src="{{asset('frontend/images/bodycare3.jpg')}}" alt="Image" class="rounded-circle mb-4" width="200px" height="200px"></a>
            <h2 class="text-black font-weight-light mb-4">Body Care</h2>
            <p>you'll get therapies like panchakarma treatment which can help you far living a healthy life.</p>
            
          </div>
        </div>
    </div>
  </div>
</div>

 
<div class="bg-light">
      <div class="container">
        <div class="row">
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
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-md-12">
      <input type="email" name="email" class="form-control" id="inputemail" placeholder="E-mail" required="required">
    </div>
  </div>



  <div class="form-group row">
    
    <div class="col-md-12">
      <input type="date" name="date" class="form-control" id="inputdate" required="required">
    </div>
  </div>
  <div class="form-group row">
    
    <div class="col-md-12">
      <input type="text" name="phone_no" class="form-control" id="inputphoto" placeholder="phone number" required="required">
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Gender</label>
    <div class="col-md-6">
      <input type="radio" name="gender" value="male" checked="" required="required">Male
      <input type="radio" name="gender" value="female" required="required">Female
    </div>
  </div>
   
   <div class="form-group row">
        <label class="col-md-3 col-form-label">Service</label>
        <select class="form-control form-control-md col-md-9" id="inputCategory" name="service_id">
          <optgroup label="Choose service">
            @foreach($services as $service)
              <option value="{{ $service->id }}">{{ $service->service_name}}</option>
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

 <div class="col-md-5">
      <div id="carousel-id" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="{{asset('frontend/images/spa-girl-1.jpg')}}" alt="First slide" width="500px" height="630px">
      </div>
      <div class="carousel-item">
        <img src="{{asset('front/images/person_1.jpg')}}" alt="First slide" width="500px" height="630px">
      </div>
      <div class="carousel-item">
        <img src="{{asset('frontend/images/bodycare3.jpg')}}" alt="First slide" width="500px" height="630px">
      </div>
    </div>

    <ol class="carousel-indicators">
      <li data-target="#carousel-" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
  </div>

          </div>
        </div>
      </div>
    </div>


{{-- <div class="container-fluid">
<div class="site-blocks-cover mb-5" style="background-image: url({{asset('frontend/images/spa-girl-1.jpg')}});" data-aos="fade">
        
          <div class="row">

            <div class="co-xl-4 col-md-8 col-lg-4 col-12" data-aos="fade-up" data-aos-delay="400"><br><br>
              <h5 class="text-black">Matt Effect</h5>
             <p class="text-black">A range of different massage techniques reflexology, body scrubs and facial</p><br><br>
             <h5 class="text-black font-weight-light">Sauna Ready</h5>
             <p class="text-black font-weight-light">
             A range of different massage techniques reflexology, body scrubs and facial.</p><br><br>
             <h5 class="text-black font-weight-light">
              Natural Mask</h5>
             <p class="text-black font-weight-light">
             A range of different massage techniques reflexology, body scrubs and facial.</p>
            </div>

            <div class="co-xl-4 col-md-8 col-lg-4 col-12" data-aos="fade-up" data-aos-delay="400">
            
            </div>
            <div class="co-xl-4 col-md-8 col-lg-4 col-12" data-aos="fade-up" data-aos-delay="400"><br><br>
            <h5 class="text-black">Relax Zones</h5>
             <p class="text-black">A range of different massage techniques reflexology, body scrubs and facial</p><br><br>
             <h5 class="text-black font-weight-light">Hair Diration</h5>
             <p class="text-black font-weight-light">
             A range of different massage techniques reflexology, body scrubs and facial.</p><br><br>
             <h5 class="text-black font-weight-light">Aromo Therophy</h5>
             <p class="text-black font-weight-light">
             A range of different massage techniques reflexology, body scrubs and facial.</p>
            </div>

          </div>
        </div>
</div>  --}} 


<div class="container">
  <div class="row">
    <div class="col-x"></div>
  </div>
</div>

<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <img src="{{asset('front/images/person_1.jpg')}}" alt="Image" class="img-md-fluid">
          </div>
          <div class="col-lg-6 bg-white p-md-5 align-self-center">
            <h2 class="display-1 text-black line-height-1 site-section-heading mb-4 pb-3">New Service!</h2>
            <p class="text-black lead"><em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro&rdquo;</em></p>
            <p class="lead text-black">&mdash; <em>Stellla Martin</em></p>
          </div>
        </div>
      </div>
</div>


<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{asset('front/images/hero_bg_2.jpg')}}); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-white font-weight-light mb-5 display-3">Experience Our Outstanding Services</h2>
            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-single-big d-inline-block popup-vimeo"><span class="icon-play"></span></a>
          </div>
        </div>
      </div>
</div>  

@endsection