<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sayin - Esfirras e Pidês</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?= url("/assets/web/css/styles.css")?>">
  </head>

<body id="top">
    <!-- Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?= url("/home")?>">Sayin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= url("/home")?>">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url("/produtos") ?>">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url("/sobre"); ?>">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url("/menu")?>">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url("/login")?>">Entrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cabeçalho-->
    <!-- <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Sayin - Esfirras e Pidês</div>
            <div class="masthead-heading text-uppercase">Bateu a fome de comida Árabe?</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="<?= url("/produtos")?>">Saiba mais</a>
        </div>
    </header> -->


    <?php
       echo $this->section("content");
    ?>




    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>