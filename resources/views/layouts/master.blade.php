<html>
<head>
<title>Martin</title>
<link rel="stylesheet" type="text/css" href="css/mystyles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.lightbox.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0\package\css\font-awesome.css">
<script type="text/javascript" src="js/popper.min.js">
	
</script>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>

<script type="text/javascript" src="js/bootstrap.js">
</script>

<script type="text/javascript" src="js/bootstrap.lightbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});

</script>
</head>
<body class="bg-light">

    @include('inc.navbar')
     @yield('content')

<div class="container mt-5">
<div id="last" class="border border-info border-left-0 border-right-0 border-bottom-0">
	<div class="row">
		<div class="col-sm-3 p-5">
			<img src="martin.jpg" class="img-fluid rounded-circle">
			<div class="h5 mt-2"><i class="fa fa-user"></i>
			 Martin Inc.</div>
		</div>
		<div class="col-sm-3 p-5">
			<ul class="list-unstyled"><div class="h5">Contact</div>
				<li>Sheshi Italia</li>
				<li>Tirane</li>
				<li>Albania</li>
				<li>(355) 68 5972351</li>
				<li>martin.gjura@fti.edu.al</li>
			</ul>
		</div>
			<div class="col-sm-3 p-5">
			<ul class="list-unstyled"><div class="h5">Menu</div>
				<li>
				<a style="text-decoration: none;color: black;" href="rooms">Rooms</a> </li>
				<li>
				<a style="text-decoration: none;color: black;" href="gallery">Gallery</a> </li>
				<li>
				<a style="text-decoration: none;color: black;" href="about">About</a> </li>
				<li>
				<a style="text-decoration: none;color: black;" href="contact">Contact</a> </li>
				<li>
				<a style="text-decoration: none;color: black;" href="admin">Administrator</a> </li>
			</ul>
		</div>
		<div class="col-sm-3 p-5">
			<div class="row">
			<div class="h5 ml-2">Follow us</div>
			<a href="https:\\www.facebook.com" class="btn btn-light"><i class="fa fa-facebook-official mr-2" style="color: blue;"></i>Facebook</a></div>
<div class="row">
			<a href="https:\\www.twitter.com" class="btn btn-light"><i class="fa fa-twitter-square mr-2" style="color: gray;"></i>Twitter</a></div>
<div class="row">
		
			<a href="https:\\www.instagram.com" class="btn btn-light"><i class="fa fa-instagram mr-2" style="color: orange;"></i>Instagram</a></div>
<div class="row">
			
			<a href="https:\\www.youtube.com" class="btn btn-light"><i class="fa fa-youtube-play mr-2" style="color: red;"></i>Youtube</a></div>
			
		</div>
	</div>
</div>
</div>
<div class="container text-center text-muted mt-4 " id="footer">
	<p>&copy; Copyright 2018 Martin Hotel - All Rights Reserved</p>
</div>
</body>
</html>