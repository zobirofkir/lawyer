<header>
  <div class="header-area">
    <div class="main-header ">
      <div class="header-top d-none d-sm-block">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
              <div class="d-flex justify-content-between flex-wrap align-items-center">
                <div class="header-info-left">
                  <ul>
                  <li>Address: 44, Rue Antaki, Immeuble Al Oumam 2, N 19, Place des Nations, Tangier Morocco</li>
                  <li>Send us a mail : <a class="__cf_email__" data-cfemail="2b474a5c524e591c1d6b4c464a424705484446" style="color: white;">cabinetrethmani@gmail.com</a></li>
                  </ul>
                </div>
                <div class="header-info-right">
                  <ul class="header-social">
                    <li><a href="{{url('/')}}"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="{{url('/')}}"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom  header-sticky">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">
            <div class="left-side d-flex align-items-center">
              <!-- Navbar toggler for small screens -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa-solid fa-bars fa-xl" style="color: black;"></i>
            </button>
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                      <li><a href="{{url('/en/welcome')}}">Home </a></li>
                      <li><a href="{{url('/en/experiences')}}">Areas of expertise</a></li>
                      <li><a href="{{url('/en/about')}}">About us</a></li>
                      <li><a href="{{url('/en/publications')}}">Publications</a></li>
                      <li><a href="{{url('/blogs')}}">Blogs</a></li>
                      <li><a href="{{url('/en/contact')}}">Contact us</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- Language dropdown -->
            <div class="col-6 col-lg-2 order-3 order-lg-3 text-right">
              <div class="dropdown">
                <button style="background: white; color: black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa-solid fa-globe fa-xl" style="color: black"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ url('/ar/home') }}">Arabic</a>
                  <a class="dropdown-item" href="{{ url('/en/welcome') }}">English</a>
                  <a class="dropdown-item" href="{{ url('/') }}">French</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Responsive Navbar -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li><a href="{{url('/en/welcome')}}">Home </a></li>
              <li><a href="{{url('/en/experiences')}}">Areas of expertise</a></li>
              <li><a href="{{url('/en/about')}}">About us</a></li>
              <li><a href="{{url('/en/publications')}}">Publications</a></li>
              <li><a href="{{url('/en/blogs')}}">Blogs</a></li>
              <li><a href="{{url('/en/contact')}}">Contact us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
