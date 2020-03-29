<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap core CSS -->
        <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="d-flex flex-column h-100">
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Université de Kaffrine</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=etudiants&action=consulter">Etudiants</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=professeurs&action=consulter">Professeurs</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        <div class="container-fluid pt-1 wrapper">
            <div class="row">
                 <!-- Begin page content -->
                <main class="col-md-9" style="margin-top:100px; padding-left: 50px;">
                    <?php
                        if (isset($_GET['page'])){
                            $page = $_GET['page'];
                            switch ($page){
                                case 'etudiants':
                                    require 'Controller/EtudiantsController.php';
                                    $controller = new EtudiantsController();
                                break;
                                case 'professeurs':
                                    require 'Controller/ProfesseursController.php';
                                    $controller = new ProfesseursController();
                                break;
                                case 'annonces':
                                    require_once 'Controller/AnnoncesController.php';
                                    $controller = new AnnoncesController();
                                    $controller->afficherAnnonce();
                                break;
                                default:
                            }
                        }elseif (isset($_POST['page'])){
                            switch ($_POST['page']){
                                case 'etudiants':
                                    require 'Controller/EtudiantsController.php';
                                    $controller = new EtudiantsController();
                                break;
                                case 'professeurs' :
                                    require 'Controller/ProfesseursController.php';
                                    $controller = new ProfesseursController();
                                break;
                            }
                        }else{
                            require 'View/Accueil.php';
                        }
                    ?>
                </main>
                <aside class="col-md-3">
                    <?php require_once 'Controller/AnnoncesController.php';
                    $controller = new AnnoncesController();
                    $controller->AfficherListAnnonces();
                    ?>
                </aside>
            </div> 
        </div>
        <footer class="bg-dark py-5">
            <div class="container">
                <span class="text-white"> Copyright Université de Kaffrine 2020 - Tout droit réservé</span>
            </div>
        </footer>

        <script src="bootstrap4/js/jquery.min.js"></script>
        <script src="bootstrap4/js/propper.min.js"></script>
        <script src="bootstrap4/js/bootstrap.min.js"></script>
    </body>
</html>