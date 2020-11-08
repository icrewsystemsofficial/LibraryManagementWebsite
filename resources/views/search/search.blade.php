<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Probably the most complete UI kit out there. Multiple functionalities and controls added,  extended color palette and beautiful typography, designed as its own extended version of Bootstrap at  the highest level of quality.                             ">
    <meta name="author" content="Webpixels">
    <title>Bookworm Library</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/theme.css') }}" rel="stylesheet">
    <!-- Demo CSS - No need to use these in your project -->
    <link type="text/css" href="{{ asset('boomerang/assets/css/demo.css') }}" rel="stylesheet">
    <!-- AJAX Query -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  </head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <strong>Bookworm Library</strong>  Home
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
    <div class="container">
        <div class="row" style="margin:6px">
            <div class="col align-content-around">
                <form class="form-inline my-2 my-lg-2" type="post" action="{{url('/home/search')}}">
                    <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search Books" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        @forelse($books as $book)
            <div class="title">
                <h2>{{$books->title}}</h1>
            </div>

            <div class="col">
                <h4>{{$books->author}}</h4>
                <p>{{$books->about}}</p>
            </div>
            @empty
                <p>No relevant articles.</p>

            @endforelse



    </div>
<!--
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Price</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>

            <script type="text/javascript">
                $('#search').on('keyup',function(){
                $value=$(this).val();
                $.ajax({
                type : 'get',
                url : '{{URL::to('search')}}',
                data:{'search':$value},
                success:function(data){
                $('tbody').html(data);
                }
                });
                })
                </script>
                <script type="text/javascript">
                    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                    </script>
                -->

</body>
</html>
