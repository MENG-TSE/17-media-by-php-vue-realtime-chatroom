    <!-- Navigation -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"> --}}
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" style="background:pink;">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">17-media</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('chat') }}">Live broadcast</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
              </li>

            @if(Auth::check())
                <li class="nav-item">
                <form method="POST" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                    <a class="nav-link js-scroll-trigger" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                </li>

                @else
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                </li>
            @endif

            </ul>
          </div>
        </div>
      </nav>
  