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
            <a class="navbar-brand" href="#top">Sayin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= url("/produtos") ?>">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= url("/sobre"); ?>">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#login.html">Entrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cabeçalho-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Sayin - Esfirras e Pidês</div>
            <div class="masthead-heading text-uppercase">Bateu a fome de comida Árabe?</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#produtos">Saiba mais</a>
        </div>
    </header>

    <!-- Produtos-->
    <section class="page-section" id="produtos">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Produtos</h2>
                <h3 class="section-subheading text-muted">Conheça nosso cardápio.</h3>
            </div>

            <div class="rowprod">
                <!--Esfirra Salgada-->
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div id="produto" class="listaproduto">
                                    <div class="listaproduto-img">
                                        <img class="img-fluid" src="assets/web/assets/img/back/esfiha-salgada.jpg"
                                            alt="Esfirras Salgadas">
                                    </div>

                                    <div class="listaproduto-title" title="Esfirras Salgadas"> </div>

                                    <h2>Esfirras Salgadas</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Esfirra Doce-->
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div id="produto" class="listaproduto">
                                    <div class="listaproduto-img">
                                        <img class="img-fluid" src="assets/web/assets/img/back/esfiha-doce.jpg"
                                            alt="Esfirras Doces">
                                    </div>

                                    <div class="listaproduto-title" title="Esfirras Doces"> </div>

                                    <h2>Esfirras Doces</h2>
                                    <div class="listaproduto-topic">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Pide Salgada-->
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div id="produto" class="listaproduto">
                                    <div class="listaproduto-img">
                                        <img class="img-fluid" src="assets/web/assets/img/back/pide-salgada.jpeg"
                                            alt="Pidês Salgadas">
                                    </div>

                                    <div class="listaproduto-title" title="Pidês Salgadas"> </div>

                                    <h2>Pidês Salgadas</h2>
                                    <div class="listaproduto-topic">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Pide Doce-->
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div id="produto" class="listaproduto">
                                    <div class="listaproduto-img">
                                        <img class="img-fluid" src="assets/web/assets/img/back/pide-doce.jpeg" alt="Pidês Doces">
                                    </div>

                                    <div class="listaproduto-title" title="Pidês Doces"> </div>

                                    <h2>Pidês Doces</h2>
                                    <div class="listaproduto-topic">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section>

    <!-- Sobre-->
    <section class="page-section" id="sobre">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Sobre</h2> <br>
                <h3 class="section-subheading text-muted">Sobre nós</h3>
                <p>Criado em 2020, durante a pandemia da Covid-19, nosso restaurante contava apenas com entregas por
                    whatsapp. <br> Sem muitos clientes, fazíamos encomendas para familiares e amigos, que sabiam da
                    qualidade
                    de nossos produtos. <br> Utilizando agora os recursos da internet, nós fazemos entregas para toda a
                    região. <br>
                    Você pode solicitar nossos serviços tanto pelo site quanto pelo app, ou ainda por whatsapp. </p>
                    <br>
                    <br>
                <h3 class="section-subheading text-muted">Sobre nossos produtos</h3>
                <p> As famosas Esfirras são pequenas tortas assadas originárias da Síia e do Líbano. <br> São feitas de massa
                    de trigo e recheadas, originalmente, de carne. (Mas podemos inovar, né?) <br>
                    Nosso menu inicial contava apenas com esfirras doces e salgadas, mas <br> graças à visibilidade
                    que
                    as
                    comidas árabes vem ganhando, decidimos trazer no catálogo uma nova receita que você vai amar, as
                    pidês. <br>
                    Pidê é um pão típico da culinária da Turquia, preparado com levedura e azeite, normalmente com
                    formato oval e recheio de sua preferência.</p>
            </div>
        </div>
    </section>

    <!-- Contato-->
    <section class="page-section" id="menu">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Menu</h2>
                <h3 class="section-subheading text-muted">Identifique-se para ter acesso ao menu.</h3>
            </div>
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" type="submit">Você
                    ainda não se identificou, deseja acessar?</button></div>

        </div>
    </section>


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