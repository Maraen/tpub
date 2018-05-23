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
    //AFFECTE LES VALEURES
    $_SESSION['nom_Campagne'] = isset($_POST['nom_Campagne']) ? $_POST['nom_Campagne'] : NULL;
    $_SESSION['geneve'] = isset($_POST['geneve']) ? $_POST['geneve'] : NULL;
    $_SESSION['lausanne'] = isset($_POST['lausanne']) ? $_POST['lausanne'] : NULL;
    $_SESSION['france'] = isset($_POST['france']) ? $_POST['france'] : NULL;
    $_SESSION['datei'] = isset($_POST['datei']) ? $_POST['datei'] : NULL;
    $_SESSION['dateii'] = isset($_POST['dateii']) ? $_POST['dateii'] : NULL;

    header('location: step2.php');
    }
}
?>
<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="date.js"></script>
	<script>
	$( function() {
		$( "#datepicker" ).datepicker();
	} );
	</script>
	<script type="text/javascript"></script>
</head>
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
		<input type="text" name="datei" id="dt1">
		<input type="text" name="dateii" id="dt2">	
		<input type="submit" name="submit">
	</form>

</body>