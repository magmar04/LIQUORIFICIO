<?php include './template-parts/header.php' ?>
<head>
<?php
        session_start();
        if(!isset($_SESSION['mail'])){
            header('location: login.php');
        }
        $mail = $_SESSION["mail"];
        $servername = $_SESSION["servername"];
        $db_name = $_SESSION["db_name"];
        $db_username = $_SESSION["db_username"];
        $db_password = $_SESSION["db_password"];
        $conn = new mysqli($servername,$db_username,$db_password,$db_name);
        if($conn->connect_error){
          die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
        }
    ?>
</head>
          <br />
          <br />
          <br />

          <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (ctype_digit($_POST["carta"]) == true ){
                    $sql=" SELECT codicep, quantita FROM carrello WHERE mail = '".$mail."' ";
                    $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
                    if ($ris->num_rows > 0) {
                      while($row = $ris->fetch_assoc()) {
                        $codice = $row ["codicep"];
                        $q = $row ["quantita"];
                        $d = date ("Y/m/d");
                        $sql1=" INSERT INTO compra (mail, codice, quantita, proprietario, data, carta, scadenza, cvv) 
                        VALUES ('".$mail."', '".$codice."', '".$q."', '".$_POST["proprietario"]."', '".$d."', '".$_POST["carta"]."', '".$_POST["data"]."', '".$_POST["cvv"]."')
                        ";
                        $ris1 = $conn->query($sql1) or die("<p>Query fallita! ".$conn->error."</p>");
                      }
                      
                      $sql2 = "DELETE FROM carrello WHERE mail = '".$mail."' ";
                      $ris2 = $conn->query($sql2) or die("<p>Query fallita! ".$conn->error."</p>");
                      header ('location: fine.php');
                    }
                  } 
                }
            ?>
            
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="container">
            <h4 class="mb-3">Pagamento</h4>
                <div class="my-3">
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Credit card</label>
                  </div>
                  <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Debit card</label>
                  </div>
                  <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">PayPal</label>
                  </div>
                </div>

                <div class="row gy-3">
                  <div class="col-md-6">
                    <label for="cc-name" class="form-label">Nome proprietario della carta</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="nome e cognome" name="proprietario" required>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="cc-number" class="form-label">Numero carta di credito</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="ex: 1234 5678 9012 3456" name="carta" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Data di scadenza</label>
                    <input type="date" class="form-control" id="cc-expiration" placeholder="ex: 12/22" name="data" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>

                  <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="ex: 998" name="cvv" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
          </form>
          
              <br />
              <button class="btn btn-primary btn-bloc" type="submit">Acquista</button>
          </div>
          