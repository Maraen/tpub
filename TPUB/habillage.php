<?php
    //CHECK SI VIDE 
    if (empty($_POST['tramintegral']) or empty($_POST['integralM1']) or empty($_POST['integralLeb']) or empty($_POST['integralBusTrolleybus']) or empty($_POST['arriereBusTrolleyBusandShop']) or empty($_POST['interieurGuerillaMarketing'])) 
    {
    	header('location: movingStar.php');
    }
    else 
    {
	   	$_SESSION['tramintegral'] = isset($_POST['tramintegral']) ? $_POST['tramintegral'] : NULL;
	    $_SESSION['integralM1'] = isset($_POST['integralM1']) ? $_POST['integralM1'] : NULL;
	    $_SESSION['integralLeb'] = isset($_POST['integralLeb']) ? $_POST['integralLeb'] : NULL;
	    $_SESSION['integralBusTrolleybus'] = isset($_POST['integralBusTrolleybus']) ? $_POST['integralBusTrolleybus'] : NULL;
	   	$_SESSION['arriereBusTrolleyBusandShop'] = isset($_POST['arriereBusTrolleyBusandShop']) ? $_POST['arriereBusTrolleyBusandShop'] : NULL;
	    $_SESSION['interieurGuerillaMarketing'] = isset($_POST['interieurGuerillaMarketing']) ? $_POST['interieurGuerillaMarketing'] : NULL;
	    
	    header('location: step3.php');
    }
?>


<form>
	<input type="checkbox" name="tramintegral"> <label> Tram intégral </label> 
	<input type="checkbox" name="integralM1"> <label> Intégral M1 </label> 
	<input type="checkbox" name="integralLeb"> <label> Intégral Leb </label>
	<input type="checkbox" name="integralBusTrolleybus"> <label> Intégral Bus/TrolleyBus </label>
	<input type="checkbox" name="arriereBusTrolleyBusandShop"> <label> Arrière Bus/TrolleyBus </label> 
	<input type="checkbox" name="interieurGuerillaMarketing"> <label> Hand Tags </label>
</form>
