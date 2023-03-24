<?php require_once 'header.php';
?>
    
<div class="container">
    <div class="container col-xxl-8 px-0 py-0">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/welcome.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" height="300" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Welcome!</h1>
                <h2>Plate-forme de gestion des stages au CDTIC</h2>
                    
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident pariatur repellendus voluptatibus eos perferendis? Inventore, vitae. A, iusto et, labore atque, at ex accusamus numquam nisi illum ratione consequuntur iure!</p>
            </div>
        </div>
    </div>
    
    <hr class="featurette-divider">
    
    <h3>Offres</h3>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
            <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
            <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
            <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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
    <h3>Nous</h3>
    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Apropos du CDTIC. <span class="text-muted"> See for yourself.</span></h2>
        <p class="lead">Le service de maintenance informatique du CDTIC accueille des clients non seulement de la communauté universitaire de Dang, mais aussi de toute la ville de Ngaoundéré. Se rapprocher du service d’accueil et de liaison pour un diagnostic et un devis. Le travail de l’ensemble du personnel de l’Université de Ngaoundéré est accompagné par un Environnement numérique de Travail.

      </div>
    <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x300</text></svg>
    </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-4 pers1">
          <img src="img/logocdtic.jpg" width="140" height="140" alt="" srcset="" style="position:relative;left:60px;">
          <h2 class="fw-normal">Noms et Prenoms</h2>
          <p class="pers">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
    <div class="row">
      
      <div class="col-lg-4 pers2">
        <img src="img/logocdtic.jpg" width="140" height="140" alt="" srcset="" style="position:relative;left:60px;">
        <h2 class="fw-normal">Noms et Prenoms</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="col-lg-4 pers3">
        <img src="img/logocdtic.jpg" width="140" height="140" alt="" srcset="" style="position:relative;left:60px;">
        <h2 class="fw-normal">Noms et Prenoms</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
    </div>
    
</div>

<?php require_once 'footer.php';
?>