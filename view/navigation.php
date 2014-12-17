 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
</head>
<body>
	<?php
		require_once(__DIR__ . "/../model/config.php");
		//goes to the file config 
	?>
	<br>
	<br>
	<br>
	<nav>
		<ul>
			<li>
			<!--  inserted php into href it echos to the variable path and concatenates it with a string to post.php -->
			 <a href="<?php echo $path . "post.php"?>">Blog post forum</a>
			 <!-- makes a link for blog post  -->
			</li>
		</ul>
	</nav>

</body>
</html>