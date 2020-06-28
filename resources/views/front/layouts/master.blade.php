<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href={{asset("assets/img/favicon.ico")}} rel="icon" type="image/png" />
    <title>Book Exchange</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href={{asset("assets/vendor/font-awesome/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles -->
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">

    <!-- styles for this template -->
    <link href={{asset("assets/css/clean-blog.min.css")}} rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">
        <img class="nav-logo" src={{asset('assets/img/logo.png')}} />
      </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>    
            @if(session()->has('user'))  
             <li class="nav-item">
              <a class="nav-link" href="/posts/new">My Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts/new">Activity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts/new">Profile</a>
            </li>
            @endif
            </ul>
            <ul class="navbar-nav ml-auto">
            @if(session()->has('user'))
          <form action="{{route('logout')}}" method="post">
            @csrf
                <li class="nav-item">
              <button class="nav-link btn-logout">Logout</button>
            </li>                
             </form>
             @else
          <li class="nav-item">
              <a class="nav-link" href="{{route('getregister')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('postlogin')}}">Login</a>
            </li>
  @endif
      
           
          </ul>
        </div>
      </div>
    </nav>

  
    
    @foreach (['error', 'warning', 'success'] as $msg)
      @if(Session::has('my-alert-' . $msg))
      <div class=" my-alert my-alert-{{$msg}}">
        <span id="msg" class="my-alert-message">{{ Session::get('my-alert-' . $msg) }}</span>
      </div>
      @endif
    @endforeach


   @yield('content')

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Book Exchange 2020</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src={{asset("assets/vendor/jquery/jquery.min.js")}}></script>
    <script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

  

    <!-- Custom scripts for this template -->
    <script src={{asset("assets/js/clean-blog.min.js")}}></script>

  </body>

</html>
