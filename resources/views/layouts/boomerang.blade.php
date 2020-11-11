<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Probably the most complete UI kit out there. Multiple functionalities and controls added,  extended color palette and beautiful typography, designed as its own extended version of Bootstrap at  the highest level of quality.                             ">
    <meta name="author" content="Webpixels">
    <title>Literarium Library</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/theme.css') }}" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/demo.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark py-4">
        <div class="container">
          <a class="navbar-brand " href="./"><strong>Literarium</strong> Library</a>
          <button class="navbar-toggler" type="button" data-action="offcanvas-open" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse offcanvas-collapse" id="navbar_main">
            <ul class="navbar-nav ml-auto align-items-lg-center">
              <h6 class="dropdown-header font-weight-600 d-lg-none px-0">Menu</h6>
              <li class="nav-item active ">
                <a class="nav-link btn " href="./login" >Login/Sign Up</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./about">About Us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./contact">Get in touch</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <main class="main">
    <section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url({{asset('boomerang/assets/images/backgrounds/book.jpg')}})">
        <span class="mask bg-dark alpha-7"></span>
        <div class="spotlight-holder py-lg pt-lg-xl">
          <div class="container d-flex align-items-center no-padding">
            <div class="col">
              <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                <div class="col-7">
                  <div class="text-center mt-5">
                  <!-- LOGO
                    <img src="{{asset('boomerang/assets/images/brand/booklogo.jpeg')}}" style="width: 200px;" class="img-fluid animated bg-dark" data-animation-in="jackInTheBox" data-animation-delay="1000">
                  -->
                    <h2 class="heading display-4 font-weight-400 text-white mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="2000">
                      <span class="font-weight-700">Literarium</span> Library
                    </h2>
                    <p class="lead text-white mt-3 lh-180 c-white animated" data-animation-in="fadeInUp" data-animation-delay="2500">
                      Welcome, Bookoholics! Become a member today and get access to thousands of books from different genres. <strong class="text-white"></strong>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    <div class="container bg-gradient-indigo">
        <div class="row ">
            <h2 class="heading display-4 font-weight-400 text-white mt-5">Member Benefits</h2>
        </div>
    </div>
    <footer class="pt-3 pb-2 footer  footer-dark bg-tertiary">
      <div class="container">
        <div class="row">
        <hr>
        <div class="d-flex align-items-center">
          <span class="">
            &copy; 2018 <a href="https://webpixels.io/" class="footer-link" target="_blank">Webpixels</a>. All rights reserved.
          </span>
          <ul class="nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://facebook.com/webpixels" target="_blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/webpixels" target="_blank"><i class="fab fa-github"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank"><i class="fab fa-dribbble"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
     <!-- Core -->
     <script src="{{asset('boomerang/assets/vendor/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('boomerang/assets/vendor/popper/popper.min.js')}}"></script>
     <script src="{{asset('boomerang/assets/js/bootstrap/bootstrap.min.js')}}"></script>
     <!-- FontAwesome 5 -->
     <script src="{{asset('boomerang/assets/vendor/fontawesome/js/fontawesome-all.min.js')}}" defer></script>
     <!-- Page plugins -->

     <script src="{{asset('boomerang/assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
     <script src="{{asset('boomerang/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
     <script src="{{asset('boomerang/assets/vendor/input-mask/input-mask.min.js')}}"></script>
     <script src="{{asset('boomerang/assets/vendor/nouislider/js/nouislider.min.js')}}"></script>
     <script src="{{asset('boomerang/assets/vendor/textarea-autosize/textarea-autosize.min.js')}}"></script>

     <!-- Theme JS -->
 <script src="{{asset('boomerang/assets/js/theme.js')}}"></script>
  </body>
</html>
