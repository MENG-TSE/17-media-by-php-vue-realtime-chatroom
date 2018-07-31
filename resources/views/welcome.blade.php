@extends('layouts.master')
@section('content')
  <body id="page-top">
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>17-media</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">17-media love you forever</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Sliding down</a>
          </div>
        </div>
      </div>
    </header>




    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          @foreach($anchors as $anchor)
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="{{ route('singleAnchor', $anchor->id) }}">
              <img class="img-fluid" src="{{ asset($anchor->thumbnail1) }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    主播
                  </div>
                  <div class="project-name">
                    {{ $anchor->name }}
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          {{-- <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/2.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/3.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/4.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/4.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/5.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/5.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/6.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/6.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>--}}
        </div> 
      <div>
    </section>

    {{-- <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/1.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/2.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/3.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/4.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/4.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/5.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/5.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/6.jpg') }}">
              <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/6.jpg') }}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section> --}}


  </body>

</html>

@endsection