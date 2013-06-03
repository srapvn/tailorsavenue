

<?php

$saving = $_REQUEST['saving'];
if ($saving == 1){
	$customerName = $_POST['customerName'];
	$customerEmail = $_POST['customerEmail'];
	$customerOccasion = $_POST['customerOccasion'];
	$fitchoiceRadio = $_POST['fitchoiceRadio'];
	$shirtMaterial = $_POST['shirtMaterial'];
	$materialRadio = $_POST['materialRadio'];
	$collarRadio = $_POST['collarRadio'];
	$cuffRadio  = $_POST['cuffRadio'];
	$monogramName  = $_POST['monogramName'];
	$monogramRadio  = $_POST['monogramRadio'];
	$trimMaterial  = $_POST['trimMaterial'];
	$checkPocket  = $_POST['checkPocket'];
	$seamlessPlanket  = $_POST['seamlessPlanket'];
	$whiteCollars  = $_POST['whiteCollars'];
	$whiteCuffs  = $_POST['whiteCuffs'];
	$backstyleRadio  = $_POST['backstyleRadio'];
	$frontstyleRadio  = $_POST['frontstyleRadio'];
	$pocketRadio  = $_POST['pocketRadio'];
	$favoriteColors  = $_POST['favoriteColors'];
	$favoritePatterns  = $_POST['favoritePatterns'];
	$problemSleevesShort  = $_POST['problemSleevesShort'];
	$problemSleevesLong  = $_POST['problemSleevesLong'];
	$problemShouldersNarrow  = $_POST['problemShouldersNarrow'];
	$problemShouldersFar  = $_POST['problemShouldersFar'];
	$problemWaistTight  = $_POST['problemWaistTight'];
	$problemWaistFar  = $_POST['problemWaistFar'];

	$file = "visualstyles/data/".$customerName."-data.doc"; 

	$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
	
	fwrite($fp,'customerName = '); fwrite($fp, $customerName); fwrite($fp, "\n");
	fwrite($fp,'customerEmail = '); fwrite($fp, $customerEmail); fwrite($fp, "\n");
	fwrite($fp,'customerOccasion = '); fwrite($fp, $customerOccasion); fwrite($fp, "\n");
	fwrite($fp,'fitchoiceRadio = '); fwrite($fp, $fitchoiceRadio); fwrite($fp, "\n");
	fwrite($fp,'shirtMaterial = '); fwrite($fp, $shirtMaterial); fwrite($fp, "\n");
	fwrite($fp,'materialRadio = '); fwrite($fp, $materialRadio); fwrite($fp, "\n");
	fwrite($fp,'collarRadio = '); fwrite($fp, $collarRadio); fwrite($fp, "\n");
	fwrite($fp,'cuffRadio = '); fwrite($fp, $cuffRadio); fwrite($fp, "\n");
	fwrite($fp,'monogramName = '); fwrite($fp, $monogramName); fwrite($fp, "\n");
	fwrite($fp,'monogramRadio = '); fwrite($fp, $monogramRadio); fwrite($fp, "\n");
	fwrite($fp,'trimMaterial = '); fwrite($fp, $trimMaterial); fwrite($fp, "\n");
	fwrite($fp,'checkPocket = '); fwrite($fp, $checkPocket); fwrite($fp, "\n");
	fwrite($fp,'seamlessPlanket = '); fwrite($fp, $seamlessPlanket); fwrite($fp, "\n");
	fwrite($fp,'whiteCollars = '); fwrite($fp, $whiteCollars); fwrite($fp, "\n");
	fwrite($fp,'whiteCuffs = '); fwrite($fp, $whiteCuffs); fwrite($fp, "\n");
	fwrite($fp,'backstyleRadio = '); fwrite($fp, $backstyleRadio); fwrite($fp, "\n");
	fwrite($fp,'frontstyleRadio = '); fwrite($fp, $frontstyleRadio); fwrite($fp, "\n");
	fwrite($fp,'pocketRadio = '); fwrite($fp, $pocketRadio); fwrite($fp, "\n");
	fwrite($fp,'favoriteColors = '); fwrite($fp, $favoriteColors); fwrite($fp, "\n");
	fwrite($fp,'favoritePatterns = '); fwrite($fp, $favoritePatterns); fwrite($fp, "\n");
	fwrite($fp,'problemSleevesShort = '); fwrite($fp, $problemSleevesShort); fwrite($fp, "\n");
	fwrite($fp,'problemSleevesLong = '); fwrite($fp, $problemSleevesLong); fwrite($fp, "\n");
	fwrite($fp,'problemShouldersNarrow = '); fwrite($fp, $problemShouldersNarrow); fwrite($fp, "\n");
	fwrite($fp,'problemShouldersFar = '); fwrite($fp, $problemShouldersFar); fwrite($fp, "\n");
	fwrite($fp,'problemWaistTight = '); fwrite($fp, $problemWaistTight); fwrite($fp, "\n");
	fwrite($fp,'problemWaistFar = '); fwrite($fp, $problemWaistFar); fwrite($fp, "\n");
	fwrite($fp,'---------------'."\n");


	fclose($fp); 
	echo "Saved $customerName 's files successfully!";
}

?>
