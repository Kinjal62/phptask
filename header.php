
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="indexstyle.css">
		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";
			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";
			}
		</script>
</head>
<body>
<div class="row hidden-xs">
		<nav class="navbar navbar-inverse">
			<p class="navbar-text">Start Bootstrap</p>
			<ul class="nav navbar-nav navbar-right">
				<li class="<?php if($currentPage =='Index'){echo 'active';}?>"><a href="index.php">Home</a></li>
				<li class="<?php if($currentPage =='About'){echo 'active';}?>"><a href="about.php">About</a></li>
				<li class="<?php if($currentPage =='Services'){echo 'active';}?>"><a href="services.php">Services</a></li>
				<li class="<?php if($currentPage =='Contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="row container visible-xs ">
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<li class="<?php if($currentPage =='Index'){echo 'active';}?>"><a href="index.php">Home</a></li>
			<li class="<?php if($currentPage =='About'){echo 'active';}?>"><a href="about.php">About</a></li>
			<li class="<?php if($currentPage =='Services'){echo 'active';}?>"><a href="services.php">Services</a></li>
			<li class="<?php if($currentPage =='Contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Start Bootstrap</span>
	</div>