<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.utilities.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-form.css">
    <title>Site</title>
</head>
<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="logo">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/logocdtic.jpg" alt="logo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h2>STAGE CDTIC</h2>
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                </a> 
    
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-3 link-secondary">Acceuil</a></li>
                <li><a href="#" class="nav-link px-3 link-dark">Offres</a></li>
                <li><a href="#" class="nav-link px-3 link-dark">Nous</a></li>
                <li><a href="#" class="nav-link px-3 link-dark">Témoignages</a></li>
                <li><a href="#" class="nav-link px-3 link-dark">Contact</a></li>
                </ul>
    
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-blue text-bg-blue" placeholder="Search..." aria-label="Search">
                </form>
    
                <div class="text-end">
                    <a href="inscription.php"><button type="button" class="btn btn-primary">Inscription</button></a>
                    <a href="connexion.php"><button type="button" class="btn btn-outline-primary me-2">Connexion</button></a>
                </div>
        </div>
    </header>