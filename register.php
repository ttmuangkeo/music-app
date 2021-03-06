<?php 
include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);


include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");


function getInputValue($name) {
	if(isset($_POST[$name])) {
		echo $_POST[$name];
	}
}

 ?>


<html>
<head>
	<title>Welcome to my Music Project</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>

<?php 
if(isset($_POST['registerButton'])) {
	echo '<script>
			$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
			});
		</script>';
} else {
	'<script>
$(document).ready(function() {
		$("#loginForm").show();
		$("#registerForm").hide();
});
	</script>';
}
 ?>




	<div id="background">
		<div id="loginContainer">			

		<div id="inputContainer">
			<form id="loginForm" action="register.php" method="POST">
				<h2>Login into your account</h2>
				<p>
					<?php echo $account->getError(Constants::$loginFailed); ?>
					<label for="loginUsername">Username</label>
					<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. ttmuangkeo" required>
				<p>
				<p>
					<label for="loginPassword">Password</label>
					<input id="loginPassword" name="loginPassword" type="password" required>
				</p>
				<button type="submit" name="loginButton">LOG IN</button>

				<div class="hasAccountText">
					<span class="hideLogin">Dont have a account yet? Sign up here</span>
				</div>


			</form>


			<form id="registerForm" action="register.php" method="POST">
				<h2>Create your free account</h2>
				<p>
					<?php 
					echo $account->getError(Constants::$usernameCharacters);
					?>
					<label for="username">Username</label>
					<input id="username" name="username" type="text" placeholder="e.g. ttmuangkeo" value="<?php getInputValue('username') ?>" required>
				<p>

				<p>
					<?php 
					echo $account->getError(Constants::$firstNameCharacters);
					?>
					<label for="firstName">First Name</label>
					<input id="firstName" name="firstName" type="text" value="<?php getInputValue('firstName') ?>" placeholder="e.g. Tim" required>
				<p>
				<p>
					<?php 
					echo $account->getError(Constants::$lastNameCharacters);
					?>
					<label for="lastName">Last Name</label>
					<input id="lastName" name="lastName" type="text" value="<?php getInputValue('lastName') ?>" placeholder="e.g. Muangkeo" required>
				<p>
				<p>
					<?php 
					echo $account->getError(Constants::$emailsDoNotMatch);
					?>
					<?php 
					echo $account->getError(Constants::$emailInvalid);
					?>
					<label for="email">Email</label>
					<input id="email" name="email" type="email" value="<?php getInputValue('email') ?>" placeholder="e.g. ttmuangkeo@gmail.com" required>
				<p>
				<p>
					<label for="email2">Confirm email</label>
					<input id="email2" name="email2" type="email" value="<?php getInputValue('email2') ?>" placeholder="e.g. ttmuankgeo@gmail.com" required>
				<p>
				<p>
					<?php 
					echo $account->getError(Constants::$passwordsDoNotMatch);
					?>
					<?php 
					echo $account->getError(Constants::$passwordNotAlpanumeric);
					?>
					<?php 
					echo $account->getError(Constants::$passwordCharacters);
					?>
					<label for="password">Password</label>
					<input id="password" name="password" type="password" required>
				<p>
				<p>
					<label for="password2">Confirm password</label>
					<input id="password2" name="password2" type="password" required>
				<p>

				<button type="submit" name="registerButton">Sign Up</button>

				<div class="hasAccountText">
					<span class="hideRegister">Already have an account. Login here</span>
				</div>

			</form>
		</div>
		<div id="loginText">
			<h1>Get great music right now</h1>
			<h2>listen to loads of songs for free</h2>
			<ul>
				<li>Discover you fall in love with</li>
				<li>create your own playlists </li>
				<li>follow artist to keep up to date</li>
			</ul>
		</div>
	</div>
	</div>
</body>
</html>