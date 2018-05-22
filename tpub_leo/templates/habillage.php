<?php
session_start();


if(isset($_POST['submit'])){

if (isset($_SESSION['moving_Star'])){
		header('location: moving_star.php');
	}

elseif (isset($_SESSION['espace_Interieur'])){
		header('location: interieurs.php');
	}

elseif (isset($_SESSION['digital'])){
		header('location: digital.php');
	}
}
?>

<body>
	<form method="POST">
		<input type="submit" name="submit">
	</form>
</body>