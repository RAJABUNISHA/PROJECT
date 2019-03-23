<div class="topnav" id="myTopnav">
  <a href="admin.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">User
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cart2.php">Cart</a>
	  <a href="need2.php">Needs</a>
	 
    </div>
  </div> 
  <a href="security.php">Security</a>

  <a href="device.php">Devices</a>
  
  <a href="report.php">Report</a>
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