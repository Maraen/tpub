    <?php
    //CHECK SI VIDE 
    if (empty($_POST['AL4F4']) or empty($_POST['AL200F200']) or empty($_POST['AR200F200']) or empty($_POST['AL13F12']) or empty($_POST['AR12F12']) or empty($_POST['MAXI12']) or empty($_POST['MEGA12']) or empty($_POST['AL24F24']) or empty($_POST['ARMIDI24']) or empty($_POST['ARMINI24']) or empty($_POST['ALMINI12']) or empty($_POST['ARMINI12']) or empty($_POST['OFFRESPME']) or empty($_POST['OFFRESSPECIALES']) or empty($_POST['CR2CR3']) or empty($_POST['MOUETTE']) or empty($_POST['TÉLÉPHERIQUEDUSALEVE']) or empty($_POST['ARTAC']) or empty($_POST['FDTAC']) or empty($_POST['FGTAC'])) 
    {
    	header('location: movingStar.php');
    }
    else 
    {
	   	$_SESSION['AL4F4'] = isset($_POST['AL4F4']) ? $_POST['AL4F4'] : NULL;
	    $_SESSION['AL200F200'] = isset($_POST['AL200F200']) ? $_POST['AL200F200'] : NULL;
	    $_SESSION['AR200F200'] = isset($_POST['AR200F200']) ? $_POST['AR200F200'] : NULL;
	    $_SESSION['AL13F12'] = isset($_POST['AL13F12']) ? $_POST['AL13F12'] : NULL;
	   	$_SESSION['AR12F12'] = isset($_POST['AR12F12']) ? $_POST['AR12F12'] : NULL;
	    $_SESSION['MAXI12'] = isset($_POST['MAXI12']) ? $_POST['MAXI12'] : NULL;
	    $_SESSION['MEGA12'] = isset($_POST['MEGA12']) ? $_POST['MEGA12'] : NULL;
	    $_SESSION['AL24F24'] = isset($_POST['AL24F24']) ? $_POST['AL24F24'] : NULL;
	   	$_SESSION['ARMIDI24'] = isset($_POST['ARMIDI24']) ? $_POST['ARMIDI24'] : NULL;
	    $_SESSION['ARMINI24'] = isset($_POST['ARMINI24']) ? $_POST['ARMINI24'] : NULL;
	    $_SESSION['ALMINI12'] = isset($_POST['ALMINI12']) ? $_POST['ALMINI12'] : NULL;
	    $_SESSION['ARMINI12'] = isset($_POST['ARMINI12']) ? $_POST['ARMINI12'] : NULL;
	    $_SESSION['OFFRESPME'] = isset($_POST['OFFRESPME']) ? $_POST['OFFRESPME'] : NULL;
	    $_SESSION['OFFRESSPECIALES'] = isset($_POST['OFFRESSPECIALES']) ? $_POST['OFFRESSPECIALES'] : NULL;
	    $_SESSION['CR2CR3'] = isset($_POST['CR2CR3']) ? $_POST['CR2CR3'] : NULL;
	    $_SESSION['MOUETTE'] = isset($_POST['MOUETTE']) ? $_POST['MOUETTE'] : NULL;
	    $_SESSION['TÉLÉPHERIQUEDUSALEVE'] = isset($_POST['TÉLÉPHERIQUEDUSALEVE']) ? $_POST['TÉLÉPHERIQUEDUSALEVE'] : NULL;
	    $_SESSION['ARTAC'] = isset($_POST['ARTAC']) ? $_POST['ARTAC'] : NULL;
	    $_SESSION['FDTAC'] = isset($_POST['FDTAC']) ? $_POST['FDTAC'] : NULL;
	    $_SESSION['FGTAC'] = isset($_POST['FGTAC']) ? $_POST['FGTAC'] : NULL;

	    header('location: step3.php');
    }
    ?>

<form>
		<input type="checkbox" name="AL4F4"> <label> AL4 - F4 </label>
		<input type="checkbox" name="AL200F200"> <label> AL200 - F200 </label>
		<input type="checkbox" name="AR200F200"> <label> AR200 - F200 </label>
		<input type="checkbox" name="AL13F12"> <label> AL13 - F12 </label>
		<input type="checkbox" name="AR12F12"> <label> AR12 - F12 </label>
		<input type="checkbox" name="MAXI 12"> <label> MAXI 12 </label>
		<input type="checkbox" name="MEGA12"> <label> MEGA 12 </label>
		<input type="checkbox" name="AL24F24"> <label> AL24 - F24 </label>
		<input type="checkbox" name="ARMIDI24"> <label> AR MIDI 24 </label>
		<input type="checkbox" name="ARMINI24"> <label> AR MINI 24 </label>
		<input type="checkbox" name="ALMINI12"> <label> AL MINI 12 </label>
		<input type="checkbox" name="ARMINI12"> <label> AR MINI 12 </label>
		<input type="checkbox" name="OFFRESPME"> <label> OFFRES PME </label>
		<input type="checkbox" name="OFFRESSPECIALES"> <label> OFFRES SPECIALES </label>
		<input type="checkbox" name="CR2CR3"> <label> CR2 - CR3 </label>
		<input type="checkbox" name="MOUETTE"> <label> MOUETTE </label>
		<input type="checkbox" name="TÉLÉPHERIQUEDUSALEVE"> <label> TÉLÉPHERIQUE DU SALEVE </label>
		<input type="checkbox" name="ARTAC"> <label> AR - TAC </label>
		<input type="checkbox" name="FDTAC"> <label> FD - TAC </label>
		<input type="checkbox" name="FGTAC"> <label> FG - TAC </label>
</form>
