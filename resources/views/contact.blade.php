@extends('master')
@section('content')  

 <div class="site-section bg-light">
            <div class="container">
              <div class="row">
                <div class="col-md-7 mb-5">
                  <form action="#" class="p-5 bg-white">
                   
                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" id="fname" class="form-control" placeholder="Your name">
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" id="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                    <div class="row form-group">                
                      <div class="col-md-12">
                        <input type="subject" id="subject" class="form-control" placeholder="Subject">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="submit" class="text-white py-2 px-4 text-white" style="background-color: #800080;">
                      </div>
                    </div>

        
                  </form>
                </div>
                  
              <div class="col-md-5" style="background-color: #800080">
                  <h1 class="text-uppercase text-white">contact us</h1>
                      <hr>
                        <a href="#" class="text-white"><span class="icon-map"></span>
                          No.216,First floor,Excel Taresure Hotel,<br>Yango Myanmar
                        </a><br><br>

                        <a href="#" class="pl-0 pr-3 text-white"><span class="icon-mobile"></span>
                          +95 94282142020        
                        </a><br><br>

                        <a href="#" class="pl-0 pr-3 text-white"><span class="icon-envelope-square"></span>
                          Beautyclinic@gmail.com
                        </a><br><br>

                        <a href="#" class="pl-0 pr-3 text-white"><span class="icon-facebook"></span>
                          facebook.com/Beautyclinic
                        </a><br><br>

                        
                        <div class="p-4 mb-3 bg-white">
                          <h3 class="h5 text-black mb-3">More Info</h3>
                          <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
                        </div>

              </div>
            </div>
          </div>
        </div>
          
<div class="container-fluid">
        <div class="row">
        <div class="col-md-6 col-lg-6">
          
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d122198.56227574652!2d96.07783800849312!3d16.840981129141195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbeauty%20clinic%20map!5e0!3m2!1sen!2smm!4v1599986783170!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          
        </div>


        <div class="col-md-6 mt-6">
          <img src="{{asset('frontend/images/view.jpg')}}">
          <img src="{{asset('frontend/images/contact1.jpeg')}}">
          <img src="{{asset('frontend/images/hand2.jpeg')}}">
          <img src="{{asset('frontend/images/about.jpeg')}}">
        </div>
      </div>

    </div>

</div>
 @endsection