<div class="topnav" id="myTopnav">
  <a href="user.php" class="active">Home</a>
  <!--<div class="dropdown">
    <button class="dropbtn">Product
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="add_cat.php">Category</a>
	  <a href="view_product.php">View</a>
      <a href="add_product.php">Add New</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Customer 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view_cus.php">View</a>
      <a href="view_purchase.php">Purchase</a>
	  <!--<a href="add_eva.php">Evaluation</a>-/->
    </div>
  </div> -->
  <a href="cart.php">Cart</a>
  <a href="need.php">Needed</a>
  <a href="add_feed.php">Feedback</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onClick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>