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
          <li class="nav-item">
            <a class="nav-link" href="professeurs">professeur</a>
          </li>
         
         
          @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
  
  @yield('container')
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Une formation très flexible</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Pour de nombreuses raisons, certaines personnes renouent avec une formation : des cours en ligne. Cela permet en effet de travailler de façon bien adaptée à leurs occupations et leurs disponibilités.  .</p>
  </div> 
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;"><br> </br>
  <div class="card-header">Adaptée aux besoins</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Les formations en ligne sont très pointues, ce qui avantagent considérablement le rythme d’apprentissage et évite une accumulation excessive de choses non liées au domaine dans lequel l’on se forme. Grâce aux multitudes de supports de formations (vidéos, PowerPoint, Articles, Blogs, Forums, etc.) tout le monde pourra trouver la formule qui lui va le mieux..</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Temps d’apprentissage illimité</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Pour de nombreuses raisons, certaines personnes renouent avec une formation : des cours en ligne. Cela permet en effet de travailler de façon bien adaptée à leurs occupations et leurs disponibilités.  Cela permet aussi d’apprendre à votre rythme, nul besoin de vouloir être au même pas de danse que les autres..</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Idéal pour les appareils mobiles</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Dans un monde où l’utilisation des appareils Mobiles est plus importante que celle des ordinateurs et autres supports, la formation en ligne est un bon moyen de s’adapter au changement et de pouvoir apprendre n’importe où sans inconfort grâce au mLearning (pour mobile Learning). Aussi, grâce à l’adoption par les plateformes de formations des systèmes d’échanges sur les forums conçus pour leurs apprenants, ceux-ci pourront échanger avec leurs formateurs et leurs collègues tout en vaquant à leurs occupations..</p>
  </div>
</div>
<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Idéal pour combler les écarts de performances</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Quoi de mieux pour pouvoir être à la hauteur du collègue de travail modèle qui a toujours un tour d’avance sur nous, ou de notre camarade de classe qui est très cultivé, que de rattraper notre retard en suivant des cours ou des formations en ligne..</p>
  </div>
</div>
<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Développe l’esprit de recherche et de Documentation</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Une formation en ligne est le meilleur moyen de développer l’esprit autodidacte des personnes car les apprenants n’ayant pas la possibilité de bénéficier de la présence des formateurs et des autres apprenants à leurs côtés, utilisera la « grande bibliothèque » qu’est Internet, en quête des réponses à ses questions..</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Mise à jour immédiate</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Grâce à la formation en ligne, beaucoup de personnes parviennent à s’insérer plus facilement même dans un univers qui leur était étranger..</p>
  </div>
</div>
<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Se former dans un environnement connu</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Beaucoup de personnes ne se sentent pas très à l’aise dans leurs peaux quand il s’agit d’étudier à un certain âge, en présence de personnes d’un niveau différent au leur ou d’une tranche d’âge différente. C’est pourquoi le E-Learning vient palier à ce petit problème qui se pose..</p>
  </div>
</div>



  <!-- Page Content -->
  <div class="container">
 



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
