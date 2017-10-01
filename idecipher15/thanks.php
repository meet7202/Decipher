<?php
	require('function.php');
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location: 404.html");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
</head>
<body>
<h1>Thank You for Participate</h1>
</body>
</html>


<?php
unset($_SESSION['user']);
unset($_SESSION['qno']);
// Delete all session variables
 session_destroy();

// Jump to login page

?>

