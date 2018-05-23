<?php
session_start();

if(isset($_POST['submit'])){

    //CHECK SI VIDE 
    if (empty($_POST['Nom']) or empty($_POST['Prenom']) or empty($_POST['Rue']) or empty($_POST['Localite']) or empty($_POST['Societe']) or empty($_POST['Client']) and empty($_POST['Confidential']) or empty($_POST['Email']) or empty($_POST['Telephone']))
    {
    	header('location: step5.php');
    }
    else
    {
    $_SESSION['Nom'] = isset($_POST['Nom']) ? $_POST['Nom'] : NULL;
    $_SESSION['Prenom'] = isset($_POST['Prenom']) ? $_POST['Prenom'] : NULL;
    $_SESSION['Rue'] = isset($_POST['Rue']) ? $_POST['Rue'] : NULL;
    $_SESSION['Localite'] = isset($_POST['Localite']) ? $_POST['Localite'] : NULL;
    $_SESSION['Societe'] = isset($_POST['Societe']) ? $_POST['Societe'] : NULL;
    $_SESSION['Client'] = isset($_POST['Client']) ? $_POST['Client'] : NULL;
    $_SESSION['Confidential'] = isset($_POST['Confidential']) ? $_POST['Confidential'] : NULL;
    $_SESSION['Email'] = isset($_POST['Email']) ? $_POST['Email'] : NULL;
    $_SESSION['Telephone'] = isset($_POST['Telephone']) ? $_POST['Telephone'] : NULL;


    header('location: step6.php');
    }
}
?>

<body>
	<form method="POST">
		<input type="text" name="Nom">
		<label> Nom </label>
		<br/>
		<input type="text" name="Prenom">
		<label> Prénom </label>
		<br/>
		<input type="text" name="Rue">
		<label> Rue </label>
		<br/>
		<input type="text" name="Localite">
		<label> Localité </label>
		<br/>
		<input type="text" name="Societe">
		<label> Société </label>
		<br/>

		<h2>Agence</h2>

		<input type="text" name="Client">
		<label> -Client </label>
		<br/>
		<input type="checkbox" name="Confidential">
		<label> Confidentiel </label>
		<br/>
		<input type="text" name="Email">
		<label> Email </label>
		<br/>
		<input type="text" name="Telephone">
		<label> Téléphone </label>
		<br/>
		<input type="submit" name="submit">
	</form>
</body>
