

<?php

$saving = $_REQUEST['saving'];
if ($saving == 1){
	$customerName = $_POST['customerName'];
	$customerEmail = $_POST['customerEmail'];
	$customerAge = $_POST['customerAge'];
	$neckSize = $_POST['neckSize'];
	$shoulderSize = $_POST['shoulderSize'];
	$shirtSize = $_POST['shirtSize'];
	$stomachSize = $_POST['stomachSize'];
	$waistSize = $_POST['waistSize'];
	$sleeveSize  = $_POST['sleeveSize'];
	$bicepSize  = $_POST['bicepSize'];
	$wristSize  = $_POST['wristSize'];

	$shoulderRadio  = $_POST['shoulderRadio'];
	$chestRadio  = $_POST['chestRadio'];
	$stomachRadio  = $_POST['stomachRadio'];
	$postureRadio  = $_POST['postureRadio'];
	$skinRadio = $_POST['skinRadio'];
	$faceRadio  = $_POST['faceRadio'];

	$file = "profiles/data/".$customerName.".doc"; 

	$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
	
	fwrite($fp,'customerName = '); fwrite($fp, $customerName); fwrite($fp, "\n");
	fwrite($fp,'customerEmail = '); fwrite($fp, $customerEmail); fwrite($fp, "\n");
	fwrite($fp,'customerAge = '); fwrite($fp, $customerAge); fwrite($fp, "\n");
	fwrite($fp,'neckSize = '); fwrite($fp, $neckSize); fwrite($fp, "\n");
	fwrite($fp,'shoulderSize = '); fwrite($fp, $shoulderSize); fwrite($fp, "\n");
	fwrite($fp,'shirtSize = '); fwrite($fp, $shirtSize); fwrite($fp, "\n");
	fwrite($fp,'stomachSize = '); fwrite($fp, $stomachSize); fwrite($fp, "\n");
	fwrite($fp,'waistSize = '); fwrite($fp, $waistSize); fwrite($fp, "\n");
	fwrite($fp,'sleeveSize = '); fwrite($fp, $sleeveSize); fwrite($fp, "\n");
	fwrite($fp,'bicepSize = '); fwrite($fp, $bicepSize); fwrite($fp, "\n");
	fwrite($fp,'wristSize = '); fwrite($fp, $wristSize); fwrite($fp, "\n");

	fwrite($fp,'shoulderRadio = '); fwrite($fp, $shoulderRadio); fwrite($fp, "\n");
	fwrite($fp,'chestRadio = '); fwrite($fp, $chestRadio); fwrite($fp, "\n");
	fwrite($fp,'stomachRadio = '); fwrite($fp, $stomachRadio); fwrite($fp, "\n");
	fwrite($fp,'postureRadio = '); fwrite($fp, $postureRadio); fwrite($fp, "\n");
	fwrite($fp,'skinRadio = '); fwrite($fp, $skinRadio); fwrite($fp, "\n");
	fwrite($fp,'faceRadio = '); fwrite($fp, $faceRadio); fwrite($fp, "\n");

	fwrite($fp,'---------------'."\n");

	$target_Path = "profiles/data/".$customerName."-";
	$target_Path1 = $target_Path.basename( $_FILES['fileInput1']['name'] );
	move_uploaded_file( $_FILES['fileInput1']['tmp_name'], $target_Path1 );

	$target_Path2 = $target_Path.basename( $_FILES['fileInput2']['name'] );
	move_uploaded_file( $_FILES['fileInput2']['tmp_name'], $target_Path2 );

	$target_Path3 = $target_Path.basename( $_FILES['fileInput3']['name'] );
	move_uploaded_file( $_FILES['fileInput3']['tmp_name'], $target_Path3 );


	fclose($fp); 
	echo "Saved $customerName 's files successfully!";
}

?>
