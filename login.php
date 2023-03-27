<?php
	// Start the session
	session_start();

	// Check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Get form data
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Validate form data
		if (empty($email) || empty($password)) {
			// Display error message and redirect to login page
			$_SESSION['error'] = "Email and password are required.";
			header('Location: login.php');
			exit;
		} else {
			// Check if email and password match database record
			// If match, store email in session and redirect to welcome page
			// If no match, display error message and redirect to login page
			// Code for database lookup would go here
			if ($email == "user@example.com" && $password == "password") {
				$_SESSION['email'] = $email;
				header('Location: index.php');
				exit;
			} else {
				$_SESSION['error'] = "Invalid email or password.";
				header('Location: login.php');
				exit;
			}
		}
	} else {
		// If form is not submitted, redirect to login page
		header('Location: login.php');
		exit;
	}
?>

