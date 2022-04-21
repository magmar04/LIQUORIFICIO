<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquorificio Mariani E-commerce</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <?php /*$servername = "localhost", $db_username = "root", $db_password = "", $db_name = "liquori_mariani" */
        session_start();
        // if(!isset($_SESSION['username'])){
        //     header('location: registrazione.php');
        // }

        $servername = "localhost";
        $db_name = "liquori_mariani";
        $db_username = "root";
        $db_password = "";
        $conn = new mysqli($servername, $db_username, $db_password, $db_name);
    ?>
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
                        <a class="nav-link dropdown-toggle show" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Area Riservata</a>
                        <div class="dropdown-menu show" data-bs-popper="none">
                            <a class="dropdown-item" href="./login.php">Login</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
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


<div class="container">
  <div class="col-12  order-md-last mt-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
            <span class="badge bg-secondary rounded-pill"><?php $sql="SELECT quantita FROM carrello"; 
            $prodotti = 0;
            $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
            if ($ris->num_rows > 0){
                while($row = $ris->fetch_assoc()){
                    $prodotti += $row["quantita"];
                }
            }
            echo $prodotti;
            ?> elementi nel carrello</span>
          </h4>
          <ul class="list-group mb-3">

            <?php
            $sql="SELECT mail, codice, quantita, nome, costo, codicep, costo * quantita AS totale FROM carrello LEFT JOIN prodotto ON (codice = codicep)";
            $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
            $totale = 0;
            if ($ris->num_rows > 0){
                while($row = $ris->fetch_assoc()){
                    echo"
                    <li class='list-group-item d-flex justify-content-between lh-sm p-4'>
                    <div class='row w-100'>
                        <div class='col-lg-4 col-6'>
                            <h6 class='my-0'>".$row["nome"]."</h6>
                        </div>
                        <div class='col-lg-2 col-6'>
                            <span class='text-muted'>".number_format($row["costo"], 2, '.', ',')." €</span>
                        </div>
                        <div class='col-lg-4 col-6'>
                            <div class='cart-buttons btn-group' role='group'>
                                <form action='carrello.php' method='post'> 
                                <div type='button' class='btn btn-sm btn-secondary'><input type='submit' value='-' name='".$row["codicep"]."+'></div>
                        
                                <span>".$row["quantita"]."</span>
                                
                                <div type='button' class='btn btn-sm btn-secondary'><input type='submit' value='+' name='piu'></div>
                                </form>
                            </div>
                        </div>
                        <div class='col-lg-2 col-6'>
                            <strong class='text-primary'>".number_format($row["totale"], 2, '.', ',')." €</strong>
                        </div>
                    </div>
                  </li>";
                  $totale += $row["totale"];
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $tmp = $row["quantita"] + 1;
                    $sql1 = "UPDATE carrello SET quantita = $tmp WHERE codicep = ".$_POST["".$row["codicep"].""]."";
                    $ris1 = $conn->query($sql1) or die('<p>Query fallita! '.$conn->error.'</p>');
                    // header("location: carrello.php");
                    }
                } 
            }
        ?>

            <li class="cart-total list-group-item d-flex justify-content-between p-4">
            <div class="row w-100">
              <div class="col-lg-4 col-6">
                <span>Totale</span>
              </div>
              <div class="col-lg-6 lg-screen"></div>
              <div class="col-lg-2 col-6">
              <strong><?php echo number_format($totale, 2, '.', ',')." €"; ?></strong>
              </div>
            </div>

            </li>

          </ul>

          <hr>
          <button class="btn btn-primary btn-block">Checkout</button>
  </div>
</div>


<?php include './template-parts/footer.php' ?>

