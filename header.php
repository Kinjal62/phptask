
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
			$(function () {
    var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
    var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.nav.navbar-nav.navbar-right li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;

            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
})

			$(function () {
    var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
    var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.nav.nav-sidebar.list-group li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;

            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
})
		</script>

</head>
<body>
<div class="row hidden-xs">
		<nav class="navbar navbar-inverse">
			<p class="navbar-text">Start Bootstrap</p>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="row container visible-xs ">
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<ul class="nav nav-sidebar list-group">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
		</div>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Start Bootstrap</span>
	</div>