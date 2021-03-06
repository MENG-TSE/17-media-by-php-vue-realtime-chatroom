<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>17 media</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ URL::asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/creative.min.css') }}" rel="stylesheet">

    
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">
   

  </head>

  <body>
      @include('includes.navigation')
      @yield('content')
  </body>

  <hr>
 
    {{-- <!--footer-->
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
          <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
        </div>
      </div>
    </div>
  </footer> --}}


      <!-- Bootstrap core JavaScript -->
      <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
      <!-- Plugin JavaScript -->
      <script src="{{ URL::asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
      <script src="{{ URL::asset('assets/vendor/scrollreveal/scrollreveal.min.js') }}"></script>
      <script src="{{ URL::asset('assetsvendor/magnific-popup/jquery.magnific-popup.min.js') }}></script>
  
      <!-- Custom scripts for this template -->
      <script src="{{ URL::asset('assets/js/creative.min.js') }}"></script>
  
    </body>
  
  </html>

  