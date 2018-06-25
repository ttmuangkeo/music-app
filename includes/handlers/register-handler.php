<?php


function sanitizeFormUsername($inputText) {
	$username = strip_tags($inputText);
	$username = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}


function sanitizeFormPassword($inputText) {
	$username = strip_tags($inputText);
	return $inputText;
}


if(isset($_POST['registerButton'])) {
	//login button was pressed

	$username = sanitizeFormUsername($_POST['username']);

	$firstName = sanitizeFormUsername($_POST['firstName']);

	$lastName = sanitizeFormUsername($_POST['lastName']);

	$email = sanitizeFormUsername($_POST['email']);

	$email2 = sanitizeFormUsername($_POST['email2']);

	$password = sanitizeFormPassword($_POST['password']);

	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}

}



?>