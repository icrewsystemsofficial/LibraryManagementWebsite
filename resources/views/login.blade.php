
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Probably the most complete UI kit out there. Multiple functionalities and controls added,  extended color palette and beautiful typography, designed as its own extended version of Bootstrap at  the highest level of quality.                             ">
    <meta name="author" content="Webpixels">
    <title>Boomerang UI Kit - Free Bootstrap Framework by Webpixels</title>
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
          <a class="navbar-brand " href="./"><strong>Bookworm</strong> Library</a>
          <button class="navbar-toggler" type="button" data-action="offcanvas-open" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse offcanvas-collapse" id="navbar_main">
            <ul class="navbar-nav ml-auto align-items-lg-center">
              <h6 class="dropdown-header font-weight-600 d-lg-none px-0">Menu</h6>
              <li class="nav-item active ">
                <a class="nav-link btn " href="./" >Home</a>
              </li>
              <li class="nav-item active ">
                <a class="nav-link btn " href="./login" >Login/Sign Up</a>
              </li>
              <li class="nav-item dropdown nav-item active ">
                <a class="nav-link dropdown-toggle nav-link btn " href="#" id="navbar_main_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse Books</a>
                <div class="dropdown-menu" aria-labelledby="navbar_1_dropdown_1">
                  <a class="dropdown-item" href="./pages/homepage.html">Homepage</a>
                  <a class="dropdown-item" href="./pages/about.html">About us</a>
                  <a class="dropdown-item" href="./pages/sign-in.html">Sign in</a>
                  <a class="dropdown-item" href="./pages/contact.html">Contact</a>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./docs/introduction.html">My TBR</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr>
      <div id="wrapper" style="margin: 20px">
        <div id="page" class="container bg-light align-content-between" >
            <h2>Sign Up</h2>
            <div class="container ">
                <form action="/login" method="POST" class="needs-validation" >
                    @csrf
                    <div class="form-group">
                        <label class="text-dark font-weight-bold ">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    <p class="alert">{{ $errors->first('name') }}</p>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" required>
                    <p class="alert">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" name="phone" class="form-control" required>
                    <p class="alert">{{ $errors->first('phone') }}</p>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio">
                            <label><input type="radio" name="gender" >Male</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="gender">Female</label>
                          </div>
                          <div class="radiod">
                            <label><input type="radio" name="gender" >Others</label>
                          </div>
                    </div>
                     <input type="submit" name="submit" value="Submit" class="btn btn-dark">

                </form>
            </div>
            </form>
        </div>
    </div>
    <!--
    <main class="main">
    <section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url({{asset('boomerang/assets/images/backgrounds/img-1.jpg')}})">
            <span class="mask bg-primary alpha-7"></span>
            <div class="spotlight-holder py-lg pt-lg-xl">
              <div class="container d-flex align-items-center no-padding">
                <div class="col">
                  <div class="row cols-xs-space align-items-center text-center text-md-left justify-content-center">
                    <div class="col-7">
                      <div class="text-center mt-5">
                      <img src="{{asset('boomerang/assets/images/brand/icon.png')}}" style="width: 200px;" class="img-fluid animated" data-animation-in="jackInTheBox" data-animation-delay="1000">
                        <h2 class="heading display-4 font-weight-400 text-white mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="2000">
                          <span class="font-weight-700">Boomerang</span> UI Kit
                        </h2>
                        <p class="lead text-white mt-3 lh-180 c-white animated" data-animation-in="fadeInUp" data-animation-delay="2500">
                          Free HTML UI Kit based on the well known Bootstrap 4 Framework brought to you by <strong class="text-white">Webpixels</strong>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </main>
    -->
  </body>
</head>
