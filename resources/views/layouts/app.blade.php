<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Student') }}</title>

    
    

    
    
    
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- Scripts -->
    
    
    
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron">
                    <h4>Hello</h4>
                    <p>
                        <a class="btn btn-primary btn-sm" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>

    <div class="row" id="app">
        <div class="col-xs-12">
        <nav class="navbar navbar-default navbar-top">
           
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Student') }}
                    </a>
                </div>         
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class=""><a href="{{ url('/entertainment') }}">Entertainment</a></li>

                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" href="/accomodation">Accomodation<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('#') }}">Page 1-1</a></li>
                                        <li><a href="{{ url('#') }}">Page 1-2</a></li>
                                        <li><a href="{{ url('#') }}">Page 1-3</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="{{ url('/accommodation') }}">Accommodation</a></li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="/colleges">Colleges<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('#') }}">Ireland</a></li>
                                        <li><a href="{{ url('#') }}">Great Britain</a></li>
                                        <li><a href="{{ url('#') }}">Germany</a></li>
                                    </ul>
                                </li>


                                <li class=""><a href="{{ url('#') }}">Courses</a></li>
                                <li class=""><a href="{{ url('#') }}">Contact</a></li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                        @if (Auth::user()->role_id === 1)
                                            <li>
                                                <a href="{{ url('/admin')}}">Admin</a>
                                            </li>
                                        @else
                                        <li>
                                            <a href="{{url('/user')}}">User</a>
                                        </li>
                                        @endif
                                    
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>    
        

        <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
         
                
                <i class="fa fa-home"></i>
                <a href="{{ URL::to('/') }}">Home</a>
                @php 
                $bread = URL::to('/'); 
                $link = Request::path(); 
                $subs = explode("/", $link);
                @endphp

                @if (Request::path() != '/')

                <i class="fa fa-angle-right"></i>

                @for($i = 0; $i < count($subs); $i++)

                @php 
                $bread = $bread."/".$subs[$i]; 
                $title = urldecode($subs[$i]);
                $title = str_replace("-", " ", $title);
                $title = title_case($title);
                @endphp

                <a href="{{ $bread }}"><span>{{ $title }}</span></a>

                @if ($i != (count($subs)-1))
                <i class="fa fa-angle-right"></i>
                @endif

                @endfor

                @endif

                
                
                
        

        </div>
   


        @yield('content')
    </div>
  
            
  
    <footer class="row footer" id="footer">
            
                    <div class="col-lg-2 col-xs-4 col-lg-offset-3">
                        <h3> Site Info </h3>
                        <ul>
                            <li> <a href="#"> Security </a> </li>
                            <li> <a href="#"> Privacy </a> </li>
                            <li> <a href="#"> Legal </a> </li>
                            <li> <a href="#"> Information </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-xs-4">
                        <h3> Shortcuts </h3>
                        <ul>
                            <li> <a href="#"> Home </a> </li>
                            <li> <a href="#"> Colleges </a> </li>
                            <li> <a href="#"> Courses </a> </li>
                            <li> <a href="#"> Contact </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-xs-4">
                        <h3> Social Media </h3>
                        <ul>
                            <li> <a href="#"> Facebook </a> </li>
                            <li> <a href="#"> Twitter </a> </li>
                            <li> <a href="#"> Pintrest </a> </li>
                            <li> <a href="#"> YouTube </a> </li>
                        </ul>
                    </div>

                    
           
            <!--/.row-->

            <!--/.container-->

            <!--/.footer-->

            <!--/.footer-bottom-->
        </footer>
    
      </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
