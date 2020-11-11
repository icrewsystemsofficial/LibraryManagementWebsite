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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark py-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong>Literarium</strong>  Home
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item active">
                            <a class="nav-link" href="./docs/introduction.html">My TBR</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="./docs/introduction.html">Contact Us</a>
                          </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown btn" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')

        </main>
    </div>
    <div class="container"></div>
    <div class="row-md-">
        @if(count($books)>0)
            @foreach($books as $book)
            <div class="card-wrapper col-md-10">
                <div class="card">
                    <h2>
                    <a href="{{route('show',$book)}}">{{$book->Title}}</a>
                    </h2>
                    <h4><strong>Author: </strong>{{$book->Author}}</h4>
                    <h4><strong>Genre: </strong>{{$book->Genre}}</h4>
                <form action = "{{route('addToTBR')}}" method="POST">
                    <button class="btn btn-secondary mr-auto">Add to my TBR</button>
                    </form>
                </div>
                <br>
            </div>
            @endforeach
        @endif
    </div>
  </body>
  </html>
