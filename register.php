<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	// Validation
	if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
		echo "All fields are required.";
		exit;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format.";
		exit;
	}

	if ($password !== $confirmPassword) {
		echo "Passwords do not match.";
		exit;
	}

	// Save to database
	// ...

	echo "Registration successful.";
}
?>
