    <!-- Navigation -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"> --}}
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" style="background:#71CFF6;">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="/17-media/public">17-media</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              {{-- <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('chat') }}">Live broadcast</a>
              </li> --}}



          @if(Auth::check())

              <li class="nav-item">
                <form method="POST" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                <a {{Request:: route()->getName() == 'logout' ? "style=color:red;" : ""}} class="nav-link js-scroll-trigger" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
              </li>

            @else
              <li class="nav-item">
                  <a {{Request:: route()->getName() == 'login' ? "style=color:red;" : ""}} class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                  <a {{Request:: route()->getName() == 'register' ? "style=color:red;" : ""}} class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
              </li>

          @endif

          @if (Auth::check() && Auth::user()->youtuber == true)
            <li class="nav-item">
              <a {{Request:: route()->getName() == 'youtuberAnchor' ? "style=color:red;" : ""}} class="nav-link js-scroll-trigger" href="{{ route('yotuberAnchor') }}" >Live BroadCast Edit | Delete</a>
            </li>
          @endif




            </ul>
          </div>
        </div>
      </nav>
  