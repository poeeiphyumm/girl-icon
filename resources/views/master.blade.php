<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Appointment for Beauty Clinic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
  <link rel="stylesheet" href="{{asset('front/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('front/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


  <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-1" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Beauty Clinic</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="{{route('mainpage')}}">Home</a>
                  
                </li>
                <li class="has-children">
                  <a href="#">Category</a>
                  <ul class="dropdown">
<<<<<<< HEAD
=======
<<<<<<< HEAD
 
                        <li><a href="{{asset('bodycare')}}">Body Care</a></li>
     
                        <li><a href="{{ asset('haircare') }}">Hair Care</a></li>
                        <li><a href="{{ asset('skincare') }}">Skin Care</a></li>
                        <li><a href="{{ asset('nailcare') }}">Nail Care</a></li>
                        <li><a href="{{ asset('facecare') }}">Face Care</a></li>
                        <li><a href="{{ asset('handcare') }}">Hand Care</a></li>
                        <li><a href="{{ asset('footcare') }}">Foot Care</a></li>
                        <li><a href="{{ asset('skintherapy') }}">Skin Therapy</a></li>
                        <li><a href="{{ asset('sparest') }}">Spa Rest</a></li>

                  </ul>
                </li>
                                     
                 <li><a href="{{asset('about')}}">About</a></li>
                <li><a href="{{asset('booking')}}">Appointment</a></li>
                <li><a href="{{asset('contact')}}">Contact</a></li>

=======
<<<<<<< HEAD
                    <li><a href="{{ asset('bodycare') }}">Body Care</a></li>
=======
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6

                    <li><a href="{{asset('bodycare')}}">Body Care</a></li>
                    <li><a href="{{ asset('haircare') }}">Hair Care</a></li>
                    <li><a href="{{ asset('skincare') }}">Skin Care</a></li>
                    <li><a href="{{ asset('nailcare') }}">Nail Care</a></li>
                    <li><a href="{{ asset('facecare') }}">Face Care</a></li>
                    <li><a href="{{ asset('handcare') }}">Hand Care</a></li>
                    <li><a href="{{ asset('footcare') }}">Foot Care</a></li>
                    <li><a href="{{ asset('skintherapy') }}">Skin Therapy</a></li>
                    <li><a href="{{ asset('sparest') }}">Spa Rest</a></li>
                    </ul>
                </li>
                       
               <li><a href="{{asset('about')}}">About</a></li>
                <li><a href="{{asset('booking')}}">Appointment</a></li>
                <li><a href="{{asset('contact')}}">Contact</a></li>
                    
                  </ul>
                </li>      
<<<<<<< HEAD
=======
=======
                    <li><a href="{{ asset('sparest') }}">Spa Rest</a></li>  
                  </ul>
                </li>

              <li class="has-children"><a href="">Services</a>
                <ul class="dropdown">
                  <li><a href="{{route('ourservicepage')}}">Our Service</a></li>
                  <li><a href="#">Service One</a></li>
                  <li><a href="#">Service Two</a></li>
                  <li><a href="#">Face Care</a></li>
                  <li><a href="#">Hand Care</a></li>
                  <li><a href="#">Foot Care</a></li>
                  <li><a href="#">Skin Therapy</a></li>
                  <li><a href="#">Spa Rest</a></li>
                </ul>
              </li>
                       
                     
                <li><a href="{{asset('booking')}}">Appointment</a></li>
                <li><a href="{{asset('contact')}}">Contact</a></li>
       
                <li><a href="{{asset('about')}}">About</a></li>
                               
                
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
              </ul>
            </nav>
          </div>
        <ul>
          <li>
            @guest
            {{-- <li class="nav-item"> --}}
              <a class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right text-uppercase" href="{{ route('loginpage') }}">{{ __('Login') }}</a>
            {{-- </li> --}}
            @if (Route::has('register'))
            {{-- <li class="nav-item"> --}}
              <a class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right text-uppercase" href="{{ route('registerpage') }}">{{ __('Register') }}|</a>
            {{-- </li> --}}
            @endif
            @else
            {{-- <li class="nav-item dropdown"> --}}
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>

<<<<<<< HEAD
          <ul>
              <li>
                @guest
                    <a class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right text-uppercase" href="{{ route('loginpage') }}">{{ __('Login') }}</a>
                            {{-- </li> --}}
                            @if (Route::has('register'))
                                {{-- <li class="nav-item"> --}}
                                    <a class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right text-uppercase" href="{{ route('registerpage') }}">{{ __('Register') }}|</a>
                                {{-- </li> --}}
                            @endif
                        @else
                            {{-- <li class="nav-item dropdown"> --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
              </li>
            </ul>

        </div>
=======
            @endguest
          </li>
        </ul>
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
      </div>
      
    </header>
<<<<<<< HEAD
  
@section('yield')

    <div class="site-section">

      
=======
@section('yield')
<<<<<<< HEAD
    {{-- <div class="site-section">  
=======
    <div class="site-section">  

=======
    </div>
  </div>

>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6

    </div> --}}
  
@yield('content')

<footer class="site-footer">

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div>
          <h3 class="footer-heading mb-4">About Beauty Clinic</h3>
          <p>Lorem ipsum dolor sit amet, </p>
        </div>
      </div>
      <div class="col-md-4">
        <div>
          <div class="col-md-12">
            <h3 class="footer-heading mb-4">Quick Menu</h3>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6 list-unstyled">
              <a href="#">Home</a>|
              <a href="#">Barbers</a>|
              <a href="#">News</a>|
              <a href="#">Team</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div>

          <form action="#" method="post">
            <div class="input-group mb-3">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p><br>
              <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 justify-content-center">

        <div class="mb-2">
          <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
        </div>
      </div>
    </div>
    <div class="row pt-2 mt-2 text-center">
      <div class="col-md-12">


        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="{{asset('front/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>

</div>


</footer>

<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('front/js/jquery-ui.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('front/js/aos.js')}}"></script>

<script src="{{asset('front/js/main.js')}}"></script>

</body>
</html>