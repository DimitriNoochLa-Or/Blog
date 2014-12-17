<?php 
	    require_once(__DIR__ . "/header.php");
		require_once(__DIR__ . "/../model/config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 

</head>
	<body>
	<br>
	<br>
		<h1>Login</h1>
		<form method="post" action="<?php echo $path . "/../controller/login-user.php" ; ?>">
		        <div class="login fonttext">
					<label for="username">Username:</label>
					<input type="text" name="username" />
				</div>
			    <div class="login fonttext">
					<label for="password">Password:</label>
					<input type="password" name="password" />
				</div>

			    <div class="login fonttext">
					<button type="submit">click I Dare You ....... i dare you</button>
				</div>
		</form>

	</body>
</html>
