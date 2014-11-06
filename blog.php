<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body id="background">
	<?php
// The require_once statement is identical to require except PHP will check 
// if the file has already been included, and if so, not 
// include (require) it again
// choose to require a file
//calls the file header.php and footer.php
//navigation is a link to pour post
	require_once(__DIR__ . "/view/header.php");
	require_once(__DIR__ . "/view/navigation.php");
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/view/footer.php");

	// executes file from here and concatinates the directory from here

	?>
</body>
</html>

