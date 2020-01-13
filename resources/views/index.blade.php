<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ELEARNING - EDUGUIDE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">EDUGUIDE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost:8000/">acceuil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cour_reseaux">cour</a>
          </li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown2" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    professeur <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="professeurs">
                                       liste professeur
                                    </a>
                                    <a class="dropdown-item" href="creation">
                                       nouveau professeur
                                    </a>
                                </div>
                            </li>
          
       
                         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('connection') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
      </div>
    </div>
  </nav>
  

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Formation e-learning : la technologie au service de votre formation </h1>
      <p class="lead">Apprenez à apprendre.
Découvrez les compétences de demain.
Et prenez votre carrière en main</p>
      <a href="cour_developp" class="btn btn-primary btn-lg">EN SAVOIR PLUS</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/images2.jpeg" alt="">
          <div class="card-body">
            <h4 class="card-title">Reseaux</h4>
            <p class="card-text">En informatique, un réseau désigne une série de machines ou noeuds interconnectés par des chemins de communication. Les réseaux peuvent eux-mêmes s'interconnecter à d'autres réseaux et contenir des sous-réseaux.</p>
          </div>
         
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/index1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Developpement webs</h4>
            <p class="card-text">Apparu avec Internet, le développement web fait référence au processus d’écriture d’un site ou d’une page web dans un langage technique. Il s’agit d’une étape incontournable pour qu’un contenu soit mis en ligne et atteigne ses lecteurs.</p>
          </div>
         
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/images1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Maintenance informatique</h4>
            <p class="card-text">Le technicien de maintenance informatique assure l’entretien et la réparation des matériels informatiques. Il peut réaliser également l’installation de nouveaux équipements ou assurer la formation des utilisateurs. .</p>
          </div>
         
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/images.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Anglais</h4>
            <p class="card-text">Apprendre l'anglais. La meilleure façon d'apprendre l'anglais. Apprendre en ligne, simple et efficace</p>
          </div>
          
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
