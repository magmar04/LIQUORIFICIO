<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login & Registrazione</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   </head>
   <body>
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
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
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
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                     $conn = new mysqli($servername, $db_username, $db_password, $db_name);
                  //    if ($conn->connect_error{
                  //         die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                  //    }
                     $mail = $_POST["mail"];
                     $password = $_POST["pw"];
                     $sql = "SELECT mail, pw
                     FROM utente
                     WHERE mail = '$mail' AND pw ='$password'";
                     $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
                     if ($ris->num_rows == 0){
                        echo "errore.";
                        $conn->close();
                     } else {
                     $_SESSION["mail"]=$mail;
                     $_SESSION["servername"]=$servername;
                     $_SESSION["db_name"]=$db_name;
                     $_SESSION["db_username"]=$db_username;
                     $_SESSION["db_password"]=$db_password;

                     $conn->close();
                     header("location: index.php");
                     }
                  }
               ?>
            
      
               <!-- signup -->
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
                     if($_POST["pw"] == $_POST["pwsc"]){
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
                     } else {
                        echo "Le password non corrispondo.";
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
   </body>
</html>