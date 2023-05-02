<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Do something with the form data, such as sending an email

	echo "Thank you for submitting the form!";
} else {
	echo "Error: Invalid request method.";
}
?>