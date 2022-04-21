<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquorificio Mariani E-commerce</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <?php /*$servername = "localhost", $db_username = "root", $db_password = "", $db_name = "liquori_mariani" */
        session_start();
        if(isset($_SESSION['username'])){
            header('location: index.php');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            // $mail = $_POST["mail"];
            // $password = $_POST["pw"];
            $servername = "localhost";
            $db_name = "liquori_mariani";
            $db_username = "root";
            $db_password = "";
        } else {
            $username = "";
            $password = "";
        }
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

      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="mail" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="pw" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <?php 
               // if ($_SERVER["REQUEST_METHOD"] == "POST") {
               //     $conn = new mysqli($servername, $db_username, $db_password, $db_name);
               //  //    if ($conn->connect_error{
               //  //         die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
               //  //    }
               //     $mail = $_POST["mail"];
               //     $password = $_POST["pw"];
               //     $sql = "SELECT mail, pw
               //     FROM utente
               //     WHERE mail = '$mail' AND pw ='$password'";
               //     $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
               //     if ($ris->num_rows == 0){
               //          echo "errore.";
               //          $conn->close();
               //      } else {
               //      $_SESSION["mail"]=$mail;
               //      $_SESSION["servername"]=$servername;
               //      $_SESSION["db_name"]=$db_name;
               //      $_SESSION["db_username"]=$db_username;
               //      $_SESSION["db_password"]=$db_password;

               //      $conn->close();
               //      header("location: index.php");
               //      }
               // }
               ?>

               <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="signup">
                  <div class="field">
                     <input type="email" placeholder="Your Email Address" name="mail" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Your Name" name="nome" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Your Surname" name="cognome" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Your Country" name="stato" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Your City" name="citta" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Your Street" name="via" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Your House Number" name="civico" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="pw" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" name="pwsc" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
               <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $conn = new mysqli($servername, $db_username, $db_password, $db_name);
                //    if ($conn->connect_error{
                //         die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                //    }
                    $sql = "SELECT mail FROM utente WHERE mail = '".$_POST["mail"]."'";
                    $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
                    if ($ris->num_rows > 0){
                        echo "Utente esiste già";
                        $conn->close();
                    } else {
                        $sql = "INSERT INTO  utente (mail, nome, cognome, pw, stato, citta, via, civico)
                        VALUES ('".$_POST["mail"]."', '".$_POST["nome"]."', '".$_POST["cognome"]."', '".$_POST["pw"]."', '".$_POST["stato"]."', '".$_POST["citta"]."', '".$_POST["via"]."', '".$_POST["civico"]."')";
                        if($conn->query($sql) === true) {
                            $conn->close();
                            header("location: index.php");
                        } else {
                            echo "Registrazione non riuscita: " . $conn->error;
                        }
                    }
                }
               ?>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>

<footer class="bg-primary">
        <hr>
        <p class="container text-light" > &copy; Copyright 2022 </p>
    </footer>
    
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootswatch.com/_vendor/prismjs/prism.js"></script>
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>