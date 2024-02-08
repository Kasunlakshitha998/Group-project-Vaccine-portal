<?php include 'Include/header.php' ?>

<div class="layout-content">
        <form class="form" onsubmit="return validatePaymentForm()" id="f1">

          <div class="div1">
            <h2>Payments</h2>
            <h6>Do your payments here!</h6>
          </div>
          <h3>* Personal Details</h3>
          <div class="form-wrapper">
            <div class="left-panel">
              
                  <div class="form-control">
                    <label>Patient Name</label><br>
                    <br><input id="patientName" class="select3" placeholder="ex-Chris Danile" required><br>
                  </div>
                 
                  <div class="form-control">
                    <label>User Name</label><br>
                    <br><input id="UserName" class="select3" placeholder="Chirs@1957" >
                  </div>

                  <div class="form-control">
                    <br><label>needed  Vaccine type</label><br>
                    <br><input id="vacType" class="select3" placeholder="polio,BCG...." >
                  </div>
                </div>
                <div class="right-panel">
                  <div class="form-control">
                    <label>Contact Number</label><br>
            <br><input id="Cno"class="select3" placeholder="+94123456789" ><br>
                  </div>
                  <div class="form-control">
                    <label>Email-Address</label><br>
            <br><input ID="mail"class="select3" placeholder="@gmail.com" ><br>
                  </div>
                </div>
              </div >
      
        </form>
        <form id="f2" >
          <div class="div1">
            <h3> * Payment Details <h3>
            <div class="form-wrapper">
            <label>Select payment method</label>
            <p><input class=" select3"type="radio" name="paymentMethod" value="credit-debit" onclick="showPaymentMethodDetails('credit-debit')"><img src="Image/credit-card.png" width="40px"></p>
            <p><input type="radio" name="paymentMethod" value="paypal" onclick="showPaymentMethodDetails('paypal')"><img src="Image/paypal.png" width="40px"></p>
            <p><input type="radio" name="paymentMethod" value="amex" onclick="showPaymentMethodDetails('amex')"><img src="Image/american-express.png" width="40px"></p>
            <p><input type="radio" name="paymentMethod" value="other" onclick="showPaymentMethodDetails('other')"><img src="Image/wallet.png" width="40px"></p>

            <div  class="form-control" id="creditDebitDetails" style="display: none;">
              <input class="select3" placeholder="Card Number" required><br>
              <input class="select3" placeholder="MM/YY" required><br>
              <input class="select3" placeholder="CVV" required><br>
            </div>

            <div   class="form-control" id="paypalDetails" style="display: none;">
              <input class="select3" placeholder="PayPal Username" required><br>
              <input class="select3" placeholder="PayPal Password" required><br>
            </div>

            <div   class="form-control" id="amexDetails" style="display: none;">
              <input class="select3" placeholder="American Express Card Number" required><br>
              <input class="select3" placeholder="Expiry Date" required><br>
              <input class="select3" placeholder="Security Code" required><br>
            </div>

            <div   class="form-control" id="otherDetails" style="display: none;">
              <input class="select3" placeholder="Other Payment Details" required><br>
            </div>
          </div>
            <div class="btn-group">
              <button type="button" class="btn-outline" onclick="cancelForm()">Cancel</button>
              <button type="submit" class="btn-fill" onclick="submitForm()">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </header>
  <script src="JS/payment.js"></script>
</body>
</html>