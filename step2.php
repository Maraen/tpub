<?php
session_start();

echo $_SESSION['nom_Campagne'];
var_dump($_SESSION['geneve']);
var_dump($_SESSION['lausanne']);
var_dump($_SESSION['france']);

if(isset($_POST['submit'])){

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

?>

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