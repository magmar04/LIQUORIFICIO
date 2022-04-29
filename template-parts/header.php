<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquorificio Mariani E-commerce</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="bs-component">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="http://www.liquorimariani.it/wp-content/uploads/2015/10/logo-bianco.png" width="80" height="40" alt="logo">
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
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="ordini.php">I miei ordini</a>
                            </div>
                        </li>
                    </ul>
                    
                    <form class="d-flex">
                        <a class="nav-link" href="./carrello.php" style="color: white" >
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </form>

                </div>
            </div>
        </div>
        
        </nav>
