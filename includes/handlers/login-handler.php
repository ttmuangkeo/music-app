<?php 

if(isset($_POST['loginButton'])) {
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	//login function

	$result = $account->login($username, $password);

	if($result == true) {
		header("Location: index.php");
	}
}
