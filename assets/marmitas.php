<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmitas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/page.css">
    <link rel="stylesheet" href="../styles/home.css">
</head>

<body>
    <header class="bg-custom">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar nav-brand p-3" href="../index.php">
                    <img class="rounded-circle img-shadow" src="../images/logo.jpg" width="100">
                </a>

                <button class="navbar-toggler mr-3" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars fa-xl text-light"></i>
                </button>

                <div class="collapse navbar-collapse p-3" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../assets/quem_somos.php">Conheça a Dona Rita</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../assets/contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="home d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12 d-inline-flex marmitas-flex">
                <?php
                    $page = "home";

                    if(isset($_GET['page'])){

                        if(file_exists("..assets/".$_GET['page'].".php")){
                            $page = $_GET['page'];
                        }
                    }

                    include("../assets/$page.php");
                ?>
            </div>
        </div>
    </section>


    <footer class="bg-light">
        <nav class="navbar navbar-light p-5">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../assets/quem_somos.php">Conheça a Dona Rita</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../assets/contato.php">Contato</a>
                </li>
            </ul>
            <span>Desenvolvido por Emanoel dos santos</span>
        </nav>
    </footer>
    

    <script src="https://kit.fontawesome.com/408ad07b0a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>