<?php
session_start();

if(isset($_POST['submit'])){

    //CHECK SI VIDE 
    if (empty($_POST['nom_Campagne']) or empty($_POST['geneve']) and empty($_POST['lausanne']) and empty($_POST['france'])) 
    {
    	header('location: step1.php');
    }
    else
    {
    $_SESSION['nom_Campagne'] = isset($_POST['nom_Campagne']) ? $_POST['nom_Campagne'] : NULL;
    $_SESSION['geneve'] = isset($_POST['geneve']) ? $_POST['geneve'] : NULL;
    $_SESSION['lausanne'] = isset($_POST['lausanne']) ? $_POST['lausanne'] : NULL;
    $_SESSION['france'] = isset($_POST['france']) ? $_POST['france'] : NULL;

    header('location: step2.php');
    }
}
?>

<body>
	<form method="POST">
		<input type="text" name="nom_Campagne">
		<label> Nom campagne </label>
		<br/>
		<input type="checkbox" name="geneve">
		<label> Geneve </label>
		<br/>
		<input type="checkbox" name="lausanne">
		<label> Lausanne </label>
		<br/>
		<input type="checkbox" name="france">
		<label> France </label>
		<br/>
		<input type="submit" name="submit">
	</form>
</body>