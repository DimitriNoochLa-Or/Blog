<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	if (!authenticateUser()){
		header("Location: " . $path . "blog.php")// redirects user
		die();
	}

	// now have access to the path variable
?>
<h1>Create BLog Post</h1>
<!-- created header -->

<form method="post" action="<?php echo $path . "controller/create-post.php" ; ?>">

<!-- sends the post to creat-post.php -->
<!-- tell the action of what we want to preform -->
<!-- method allows you to show sent or received  -->
<!-- first div box is for the title -->
	<div>
		<label for="title">Title: </label>
		<input type="text" name="title" />
	</div>
<!-- second div box is for the post -->
	<div>
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>
<!-- for the submit button -->
	<div>
		<button type="submit">OH LOOK A BUTTON I WONDER WHAT THIS DOES</button>
	</div>
</form>
