@extends('master')
@section('content')


  <div class="site-section bg-light" style="background-image: url({{asset('front/images/hero_bg_2.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-md-7 mb-5">

          <div class="container my-5">
            <div class="row justify-content-center">
              <div class="col-8">
                <form method="POST" action="{{route('register')}}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <h2>Register Now</h2>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="small mb-1" for="inputName"> Name</label>
                        <input class="form-control py-4 @error('name') is-invalid @enderror" id="inputName" type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="small mb-1" for="phone">Phone Number</label>
                        <input class="form-control py-4 @error('phone') is-invalid @enderror" id="phone" type="text" placeholder="Enter Phone Number" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus />
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                    <input class="form-control py-4 @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Password</label>
                        <input class="form-control py-4 @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Enter password" name="password" required autocomplete="new-password" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password" />

                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="small mb-1" for="address"> Address </label>
                    <textarea class="form-control @error('password') is-invalid @enderror" name="address" required autocomplete="name" autofocus>{{old('address')}}</textarea>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                    <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block"> Create Account </button>
                  </div>

                </form>

                <div class=" mt-3 text-center ">
                  <a href="{{route('loginpage')}}" class="loginLink text-decoration-none" style="color:violet;">Have an account? Go to login</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-5">

          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">No.216,First floor,Excel Taresure Hotel,,
              <br>Yango Myanmar</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">ouremail@gmail.com</a></p>

          </div>

          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">More Info</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
            <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Get In Touch</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 class="mb-4 text-black">We want your beauty to look fabulous</h2>
          <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5 text-white">Visit Our Beauty Clinic Now</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection