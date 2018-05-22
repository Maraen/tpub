<?php
session_start();


if(isset($_POST['submit'])){

	if (isset($_SESSION['digital'])){
		header('location: digital.php');
	}
}
?>

<body>
	<form method="POST">
		<input type="submit" name="submit">
	</form>
</body>