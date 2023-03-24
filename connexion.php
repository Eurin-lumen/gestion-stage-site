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
    <title>Connexion</title>
</head>
<body class="text-center">

<div class="b-example-divider"></div>

  <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">connexion</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Acceuil</a></li>
            </ul>
            
        </header>
        <main class="form-signin w-100 m-auto mt-5">
            <form>
                <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div><br>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div><br>
                    <label id="choisir" for="pet-select">choisir un statut:</label>

                    <select name="pets" id="pet-select">
                        <option value="stagiaire">Stagiaire</option>
                        <option value="personnel">Personnel</option>
                        <option value="administrateur">Administrateur</option>
                    </select><br>
                    <div class="checkbox mb-3"><br>
                    <label>
                        <input type="checkbox" value="remember-me"> souvenez-vous de moi
                    </label>
                  
                </div>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Envoyer</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2023 CDTIC stage.</p>
            </form>
       </main>
  </div>
</body>
</html> 