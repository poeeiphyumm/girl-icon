@extends('master')
@section('content')     

<div style="background-image: url({{asset('front/images/hero_bg_1.jpg')}});">
  

    <div class="row justify-content-center">
      <div class="col-5 mt-5">
        <form  method="POST" action="{{route('login')}}">
          @csrf
            <div>
              <div class="row">
                <div class="col-md-6">
                  <h2>Login Now</h2>
                </div>
              </div>
            </div>

              <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
                @error('email')
                <div class="text-danger">{{ ($message) }}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                @error('password')
                <div class="text-danger">{{ ($message) }}</div>
                @enderror
              </div>
          
              <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>


                  </div>

                  <a href="#" class="text-dark ">Forgot Password?</a>

              </div>
              
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
              </div>


          </form>

          <div class=" mt-3 text-center ">
            
            <a href="{{route('registerpage')}}" class="loginLink  text-dark">Need an account? Sign Up!</a>

          </div>
      </div>
    </div>

         


    <div class="site-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-4 text-black">We want your hair to look fabulous</h2>
            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5 text-white">Visit Our Salon Now</a></p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection  