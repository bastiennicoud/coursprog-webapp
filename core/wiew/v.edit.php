<!doctype html>
<html lang="fr">
<html>
  <head>

    <!-- Charset et wiewport -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Mots clefs et description -->
    <meta name="keywords" content="technical, note, stage, plan, patch, list">
    <meta name="description" content="App de gestion en ligne de fiches téchniques.">

    <!-- Titre et favicon -->
    <title>TECHNOTE</title>
    <link rel="icon" type="image/png" href="img/icon.png">

    <!-- Styles CSS (normalize + grille bootstrap) -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">

  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="img/logo.svg" height="30" class="d-inline-block align-top" alt="">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link disabled" href="#">ADMIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Mes fiches techniques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Déconnexion</a>
          </li>
        </ul>

      </div>
    </nav>



    <div class="container">

      <div class="row top-40">
        <div class="col-12">
          <h1>Editer votre fiche technique</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h3>Phill Collins</h3>
        </div>
      </div>

      <div class="row top-10">
        <div class="col-3">
          <a href="editinfos.php" class="btn btn-info">Editer les informations</a>
        </div>
        <div class="col-3">
          <a href="editcontacts.php" class="btn btn-info">Editer les contatcs</a>
        </div>
      </div>
      <div class="row top-10">
        <div class="col-3">
          <a href="editcomments.php" class="btn btn-info">Editer les commentaires</a>
        </div>
        <div class="col-3">
          <a href="#" class="btn btn-info">Ajouter un plan de scene</a>
        </div>
      </div>
      <div class="row top-10">
        <div class="col-3">
          <a href="editpatch.php" class="btn btn-info">Editer le patch</a>
        </div>
        <div class="col-3">
          <a href="editzicos" class="btn btn-info">Editer les musiciens</a>
        </div>
      </div>

      <div class="row top-40">
        <div class="col-12">
          <h3>Ajout du plan de scene</h3>
          <div class="form-group">
            <label for="exampleInputFile">Votre image</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Cette image renseigne sur la position des musiciens et du matériel sur scène</small>
          </div>
        </div>
      </div>

    </div>

    <!-- Diférents scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/tether/js/tether.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>