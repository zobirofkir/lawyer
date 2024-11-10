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
                    <li>Adresse : 44, Rue Antaki, Immeuble Al Oumam 2, N 19, Place des nations, Tanger Maroc</li>
                    <li>Envoyez-nous un courrier : <a class="__cf_email__" data-cfemail="2b474a5c524e591c1d6d4c464a424705484446" style="color: white;">cabinetrethmani@gmail.com</a></li>
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
                    <li><a href="{{url('/')}}">Accueil </a></li>
                    <li><a href="{{url('/experiences')}}">Les domaines d´expertises</a></li>
                    <li><a href="{{url('/propos')}}">Qui sommes-nous</a></li>
                    <li><a href="{{url('/publications')}}">publications</a></li>
                    <li><a href="{{url('/blogs')}}">blogs</a></li>
                    <li><a href="{{url('/contacts')}}">Nous contacter</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- Language dropdown -->
            <div class="col-6 col-lg-2 order-3 order-lg-3 text-right">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose Language
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
              <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Accueil </a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('/experiences')}}">Les domaines d´expertises</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('/propos')}}">Qui sommes-nous</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('/publications')}}">publications</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('/blogs')}}">blogs</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('/contacts')}}">Nous contacter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
