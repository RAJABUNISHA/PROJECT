<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];


if($rdate=="")
{
$rdate=date("d-m-Y");
}	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php include("include/title.php"); ?></title>
<link rel="shortcut icon" href="img/icon.ico">
<style type="text/css">
<!--
.box {
	background-color: #F3F3F3;
	height: 270px;
	width: 270px;
	border: 1px solid #A8A8A8;
	padding:10px;
}
.box1 {
	background-color: #F3F3F3;
	height: 100px;
	width: 270px;
	border: 1px solid #A8A8A8;
	padding:10px;
}
.box2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	padding:10px;
}
.box3 {
padding:10px;
}
.t1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #0066CC;
	font-variant: small-caps;
	text-transform: none;
}
.msg {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF0000;
}
.box4
{
width:250px;
height:35px;
}
-->

</style>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="shortcut icon" href="favicon.ico">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color:#CC0066;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>	
</head>

<body>
   <?php include("link_user.php"); ?>
 <div class="panel panel-default">
  <div class="panel-heading" align="center"><img src="img/apprt.jpg" width="1060" height="276" /></div>
  <div class="panel-body">User: <?php echo $uname; ?>
   <h3 align="center"></h3>
  </div>
</div>
 <!--start content area-->
  <?php

if($_REQUEST['act']=="wrong")
{
?>
<div class="row">
			<div class="col-lg-4">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <div class="col-lg-4">
<div class="alert alert-warning">
  <strong>Warning!</strong> This Username or Password Incorrect!
</div>
			</div>
</div>			
<?php
}
?>			
<div class="row">
			<div class="col-lg-4">
				
				<!-- A grey horizontal navbar that becomes vertical on small screens -->
			</div>
			
			
			
            <!--<div class="col-lg-4">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">
                    <h2>Devices </h2>
                  </h2>
                </div>
                <div class="card-block">
                  <p></p>
                  <form name="name" method="post">
                   
					<div class="form-group">
                      <label>Type here </label>
                      <input type="text" name="data" value="<?php //echo $data; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group">       
                      <input type="submit" name="btn" value="Submit" class="btn btn-primary">
                    </div>
					
                  </form>
                </div>
              </div>
			</div>-->
</div>			
<!--end content area--><br /><br />


<div class="row">
	<div class="col-lg-2">
	
	</div>
	<div class="col-lg-8">
	<h2 align="center">Cart</h2>
			  	<div  align="center">
				<?php
				
				$qry=mysql_query("select * from addcart where uname='$uname'");
				
				$num=mysql_num_rows($qry);
				if($num>0)
				{
				?>
				<table width="45%" class="table table-bordered" align="center">
				<thead>
				  <tr>
					<th width="3%" class="bg-info">Sno</th>
					<th width="5%" class="bg-info">Camera</th>
					<th class="bg-info">Cost</th>
					<th class="bg-info">Date</th>
					<th class="bg-info">Status</th>
				  </tr>
				</thead>
				<tbody>
				<?php
				$i=0;
				
				while($row=mysql_fetch_array($qry))
				{
				$i++;
				?>
				  <tr>
					<td class="bg-info2"><?php echo $i; ?></td>
					<td class="bg-info2"><?php echo $row['device']; ?></td>
					<th width="13%" class="bg-info2"><?php echo $row['price']; ?></th>
					<th width="13%" class="bg-info2"><?php echo $row['rdate']; ?></th>
					<th width="15%" class="bg-info2"><?php 
					if($row['status']=="1")
					{
					echo "Delivered";
					}
					else
					{
					echo "Requires..";
					}
					?></th>
				
					
				  </tr>
				  <?php
				  }
				  ?>
				</tbody>
    		</table>
			<?php
			}
			else
			{
			echo "";
			}
			?>
			</div>	
  	</div>
	<div class="col-lg-2">
		</div>
</div>

  <p align="center" class="msg"><?php
  if($msg!="")
  {
  echo $msg;
  }
  ?></p>
  <p>&nbsp;</p>
</body>
</html>