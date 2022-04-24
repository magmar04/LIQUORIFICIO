<?php include './template-parts/header.php' ?>
          <br />
          <br />
          <br />
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
                  <input type="text" class="form-control" id="cc-name" placeholder="nome e cognome" required>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Numero carta di credito</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="ex: 1234 5678 9012 3456" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Data di scadenza</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="ex: 12/22" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="ex: 998" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
              <br />
              <a href="fine.php" style="color:white"><button class="btn btn-primary btn-bloc">Acquista</button></a>
          </div>
          