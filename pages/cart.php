<!DOCTYPE html>
<html lang="en">
<!--Including Navbar-->
<body>
<style>
    <?php include('../src/css/navbar.css'); ?>
</style>
<?php include("../components/navbar.php"); ?>


<style>
    <?php include('../src/css/cart.css'); ?>
</style>
  <div class="title">
  <h1>My Cart</h1><hr style="width:700%;text-align:left;margin-left:0">
  </div>

  <div class="column">
    <div class="checkout-panel">
        <div class="panel-body">
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
                <div class="remove1">
                    <input type="button" value="Remove">
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
              <div class="remove2">
                  <input type="button" value="Remove">
              </div>
              
            </div>
        </div>  
    </div>
  
</div>
  <div class="column2">
    <div class="summary" >
      <h2><label for="summary">Order Summary</label></h2>
      
   
    <div class="price">
      <label for="price">Price</label>
      <div class="pricev">
        <label for="pricev">99$</label>
      </div>
      <label for="dis">Sale Discount</label>
      <div class="disv">
        <label for="disv">-10$</label>
      </div>
      <hr style="width:75%;text-align:left;margin-left:0">
      <label for="total"><b>Total</label>
      <div class="pricev">
        <label for="total">99$</label></b>
      </div>
    </div>
    <div class="checkout">
      <button class="checkout1">Checkout</button>
    </div>
    
  </div>
</div>  
<!--Including Footer-->
<style>
    <?php include('../src/css/footer.css'); ?>
</style>
<?php include("../components/footer.php"); ?>



<script src="../src/js/navbar.js"></script>
</body>
</html>




  