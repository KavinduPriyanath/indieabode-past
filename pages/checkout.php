<!DOCTYPE html>
<html lang="en">
<!--Including Navbar-->
<style>
  <?php include('../src/css/navbar.css'); ?>
</style>
<?php include("../components/navbar.php"); ?>


<style>
  <?php include('../src/css/checkout.css'); ?>
</style>
<div class="title">
  <h1>Checkout</h1>
</div>
<div class="column">
  <div class="checkout-panel">
    <div class="panel-body">
      <label for="cardholder">Pay With</label>
      <hr>
      <label for="cardholder">Credit or Debit Card</label>
      <div class="input-fields">
        <div class="column1">
          <br><label for="cardholder">Cardholder's Name</label>
          <input type="text" id="cardholder" />

          <div class="small-inputsM">
            <div>
              <div class="exp"><label for="date">Expiration Date</label></div>
              <select id="months" placeholder="MM"></label>
                <option value="none" selected disabled hidden>MM</option>
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
              </select>
            </div>
          </div>
          <div class="small-inputsY">
            <div>
              <input type="text" id="date" placeholder=" YY" />
            </div>
          </div>
        </div>

        <div class="column1">
          <br><label for="cardnumber">Card Number</label>
          <input type="password" id="cardnumber" />

          <div class="small-inputsC">
            <div>
              <label for="verification">CVV</label>
              <input type="password" id="verification" />
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="save">
      <input type="checkbox" id="html" name="fav_language" value="HTML">
      <label for="html">Save my payment information so checkout is easy next time</label><br>
    </div>
  </div>
  <div class="column2">
    <div class="summary">
      <h2><label for="summary">Order Summary</label></h2>
      <hr style="width:150%;text-align:left;margin-left:0;background-color:rgb(29, 6, 6)">
    </div>
    <div class="game1">
      <div class="logo1">
        <img src="logo1.jpg" alt="Girl in a jacket" width="80" height="100">
      </div>
      <div class="g1name">
        <label for="g1name">Item 1 Name</label>
      </div>
      <div class="g1price">
        <label for="g1price">Price1</label>
      </div>
    </div>

    <div class="game2">
      <div class="logo2">
        <img src="logo2.jpg" alt="Girl in a jacket" width="80" height="100">
      </div>
      <div class="g2name">
        <label for="g2name">Item 2 Name</label>
      </div>
      <div class="g2price">
        <label for="g2price">Price2</label>
      </div>
    </div>

    <div class="price">
      <label for="price">Price</label>
      <div class="pricev">
        <label for="pricev">99$</label>
      </div>
      <label for="dis">Sale Discount</label>
      <div class="disv">
        <label for="disv">10$</label>
      </div>
      <hr style="width:75%;text-align:left;margin-left:0">
      <label for="total"><b>Total</label>
      <div class="pricev">
        <label for="total">99$</label></b>
      </div>
    </div>

    <div class="placeorder">
      <input type="submit" id="place" value="Place Order"></button>
    </div>

  </div>
  <!--Including Footer-->

  <style>
    <?php include('../src/css/footer.css'); ?>
  </style>
  <?php include("../components/footer.php"); ?>


  <?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
    <script src="../src/js/navbar.js"></script>
  <?php } else { ?>
    <script src="../src/js/navbarcopy.js"></script>
  <?php } ?>

</html>