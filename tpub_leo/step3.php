<?php
session_start();

/*
var_dump($_SESSION['habillage']);
var_dump($_SESSION['moving_Star']);
var_dump($_SESSION['espace_Interieur']);
var_dump($_SESSION['digital']);
*/



if (isset($_SESSION['habillage'])){
		header('location: templates/habillage.php');
	}

elseif (isset($_SESSION['moving_Star'])){
		header('location: templates/moving_star.php');
	}

elseif (isset($_SESSION['espace_Interieur'])){
		header('location: templates/interieurs.php');
	}

elseif (isset($_SESSION['digital'])){
		header('location: templates/digital.php');
	}




/*if(isset($_POST['submit'])){

    //CHECK SI VIDE 
    if (empty($_POST['habillage']) && empty($_POST['moving_Star']) && empty($_POST['espace_Interieur']) && empty($_POST['digital'])) 
    {
    	header('location: step2.php');
    }
    else
    {
    $_SESSION['habillage'] = isset($_POST['habillage']) ? $_POST['habillage'] : NULL;
    $_SESSION['moving_Star'] = isset($_POST['moving_Star']) ? $_POST['moving_Star'] : NULL;
    $_SESSION['espace_Interieur'] = isset($_POST['espace_Interieur']) ? $_POST['espace_Interieur'] : NULL;
    $_SESSION['digital'] = isset($_POST['digital']) ? $_POST['digital'] : NULL;

    header('location: step3.php');
    }
}
*/
?>
<!--
<body>
	<form method="POST">
		<input type="checkbox" name="habillage">
		<label> habillage </label>
		<br/>
		<input type="checkbox" name="moving_Star">
		<label> Moving Star </label>
		<br/>
		<input type="checkbox" name="espace_Interieur">
		<label> Espace intérieur </label>
		<br/>
		<input type="checkbox" name="digital">
		<label> Digital </label>
		<br/>
		<input type="submit" name="submit">
	</form>
</body>
-->