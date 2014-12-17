	<?php
		// The require_once statement is identical to require except PHP will check 
		// if the file has already been included, and if so, not 
		// include (require) it again
		// choose to require a file
		//calls the file header.php and footer.php
		//navigation is a link to pour post
			require_once(__DIR__ . "/controller/login-verify.php");  
			require_once(__DIR__ . "/view/header.php");
			if(authenticateUser()){
				require_once(__DIR__ . "/view/navigation.php");

			}
			require_once(__DIR__ . "/controller/create-db.php");
			require_once(__DIR__ . "/controller/read-posts.php");
			require_once(__DIR__ . "/view/body.php");
			require_once(__DIR__ . "/view/footer.php");
	?>


