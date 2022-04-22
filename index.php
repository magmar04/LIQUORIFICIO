<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Liquorificio Mariani</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
        <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">
        <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
        
        <link href="https://getbootstrap.com/docs/5.1/examples/carousel/carousel.css" rel="stylesheet">
    </head>
    <body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="foto/titolo.png" width="80" height="40" alt="logo">
                </a>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./prodotti.php">Prodotti</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Area Riservata</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="registrazione.php">Login</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">I miei ordini</a>
                            </div>
                        </li>
                    </ul>
                    
                    <form class="d-flex">
                        <a class="nav-link" href="./carrello.php" style="color: white" >
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge badge-primary rounded-pill bg-secondary">1</span>
                        </a>
                    </form>

                </div>
            </div>
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
                <!-- <svg class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                
                <img class="bd-placeholder-img" src="foto/botti.jpg" alt="#"  width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="container">
                <div class="carousel-caption text-start">
                    <h1 style="color: white">Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
            <img class="bd-placeholder-img" src="foto/ditta.jpg" alt="#"  width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                <div class="container">
                <div class="carousel-caption">
                    <h1 style="color: white">Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
            <img class="bd-placeholder-img" src="foto/erbe.jpg" alt="#"  width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                <div class="container">
                <div class="carousel-caption text-end">
                    <h1 style="color: white">One more for good measure.</h1>
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




        <div class="container marketing">
            <div class="row">
            <div class="col-lg-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" style="margin-bottom: 20px" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>

                <h2>IMPEGNO SOCIALE</h2>
                <p>Da molti anni LIQUORIFICIO MARIANI S.R.L. sostiene l’associazione KIBINTI ONLUS nei suoi progetti in Guinea Bissau.</p>
                <p><a class="btn btn-secondary" href="https://www.kibintionlus.org/">Vedi sito &raquo;</a></p>
            </div>
            <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" style="margin-bottom: 20px" fill="currentColor" class="bi bi-tree" viewBox="0 0 16 16">
                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z"/>
            </svg>

                <h2>ECOSOSTENIBILITA'</h2>
                <p>LIQUORIFICIO MARIANI S.R.L. ritiene che il benessere delle persone sia strettamente correlato all’ ambiente in cui vivono.</p>
                <p><a class="btn btn-secondary" href="http://www.liquorimariani.it/ecosostenibile/">Vedi dati &raquo;</a></p>
            </div>
            <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" style="margin-bottom: 20px" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>

                <h2>DOVE SIAMO</h2>
                <p>L'azienda si trova in una posizione molto favorevole, infatti è posizionata a Concorezzo(Mb), tra Milano e Monza.</p>
                <p><a class="btn btn-secondary" href="https://www.google.com/maps/place/Liquorificio+Mariani+Srl/@45.5840771,9.345817,15z/data=!4m2!3m1!1s0x0:0x779946ab8d7cedab?sa=X&ved=2ahUKEwjd9_7Y8KT3AhVGHc0KHVzoDAIQ_BJ6BAhNEAU">Vedi mappa &raquo;</a></p>
            </div>
            </div>



            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">La nostra storia. <span class="text-muted">Liquorificio Mariani SRL.</span></h2>
                <p class="lead">Il 14 luglio del 1978 Mariani Luigi, dopo aver maturato un’esperienza trentennale come liquorista in aziende di successo, con l’intento di produrre in proprio liquori di qualità superiore, fonda il LIQUORIFICIO MARIANI S.R.L. con sede a Concorezzo in Via Agrate 105.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="foto/nonno-luigi.jpg" width="700" height="506" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Chi gestisce l'azienda. <span class="text-muted">Un'azienda familiare.</span></h2>
                <p class="lead">La qualità dei prodotti e la cura del servizio al cliente portano ad una rapida crescita dell’azienda nella quale cominciano ad operare anche i tre  giovani figli Daniele, Marco e Alessandro.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="foto/nonno-luigi2.jpg" width="700" height="483" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
            </div>
            </div>

            <hr class="featurette-divider">

        </div>


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2021–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>


    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
    </body>
</html>