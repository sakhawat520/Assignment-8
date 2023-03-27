<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<?php
		// Start the session
		session_start();

		// Check if user is logged in
		if (isset($_SESSION['email'])) {
			echo "<h1>Welcome  !</h1>";
		} else {
			// Redirect to login page
			header('Location: login.php');
			exit;
		}
	?>
</body>
</html>
