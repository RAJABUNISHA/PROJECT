<div class="topnav" id="myTopnav">
  <!--<a href="admin.php" class="active">Home</a>-->
  <a href="view_apply.php">Job Applied</a>
  <div class="dropdown">
    <button class="dropbtn">User
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	  <a href="need3.php">Needs</a>
	 
    </div>
  </div> 
  <!--<div class="dropdown">
    <button class="dropbtn">Customer
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="add_cat.php">Category</a>
	 
    </div>
  </div> -->
  
  <a href="security2.php">Security</a>
  
  <a href="feedback.php">Feedback</a>
  <a href="report2.php">Report</a>
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