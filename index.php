<?php 
include('includes/config.php');

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	header("Location: register.php");
}

?>




<html>
<head>
	<title>welcome to music app</title>
</head>
<body>
	<h1>hello</h1>
</body>
</html>