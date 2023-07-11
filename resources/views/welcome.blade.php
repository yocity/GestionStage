<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <style>
      body {
        background-color: #BDC3C7;
        }
        nav .nav-link{
            border-bottom: 1px solid transparent;
            transition: 0.7s;
        }
        nav .nav-link:hover{
            padding-bottom: 20px;
            border-bottom-color: gray;
        }

        a{
            text-decoration: none;
            color: black;
        }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body style='font-family: cursive;'>    
  <header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Accueil</a>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/accueil">Etudiant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/accueil_dep">Departement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/accueil_ent">Entreprise</a>
          </li>
        </ul>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="500px" src="n.jpeg">
        <div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div><img src="" alt="">
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="500px" src="m.jpeg">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="500px" src="o.jpeg">
        <div class="container">
          <div class="carousel-caption text-end">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src='r.png'/>
        <h2 class="fw-normal">Etudiant</h2>
        <p>Voici une opportunité qui s'offre a toi. En t'inscrivant maintenant tu entreras dans le monde du travail pour avoir une meilleur vie</p>
        <p><a class="btn btn-secondary" href="/connect">Connexion</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src='p.png'/>
        <h2 class="fw-normal">Entreprise</h2>
        <p>Celui ci est exclusivement dedié aux entreprises. en vous connectant vous pouriez aidez un grand nombre d'etudiant</p>
        <p><a class="btn btn-secondary" href="/connect_ent">Connexion</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src='s.png'/>
        <h2 class="fw-normal">Département</h2>
        <p>Connectez-vous pour acceder à votre platforme qui vous permettra de mieux gérer les stages de vos differents départements</p>
        <p><a class="btn btn-secondary" href="/connect_dep">Conexion</a></p>
      </div><!-- /.col-lg-4 -->
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Gestionnaire de Stage.<span class="text-body-secondary">(Plus d'infos)</span></h2>
        <p class="lead">Je vous présente un site de gestion de stage pour universités. Ce site offre une plateforme intuitive et facile à utiliser pour les étudiants, les enseignants et les employeurs. Il permet aux étudiants de rechercher et de postuler à des offres de stage, de suivre leur progression de candidature et de soumettre des rapports de stage. Les enseignants peuvent suivre et évaluer la progression des étudiants pendant leur stage. Les employeurs peuvent créer des offres de stage, examiner les candidatures et communiquer avec les étudiants. Le site fournit également des outils pour la gestion de la documentation, les suivis de communication et les rapports statistiques.Avec ce site, les universités peuvent facilement suivre les progrès de leurs étudiants dans leurs stages et améliorer leur expérience professionnelle.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src='q.png'/>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    <p>&copy; 2023 Designed by Yocity & Momo &middot;</p>
  </footer>
  </main>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>