<?
`mode com4: BAUD=9600 PARITY=N data=8 stop=1 xon=off`;
$fp =fopen("com4", "w+");
fwrite ($fp, chr(0x21)); 
fclose($fp);
?>

<?php
/*
// Acceso mediante PHP al puerto serie
$serproxy=true;
if ($serproxy) {
// Este código debe utilizarse en combinación con serproxy
// (http://www.lspace.nildram.co.uk/freeware.html)
$fp = fsockopen ("localhost", 5334, $errno, $errstr, 10);
if (!$fp) {
echo "$errstr ($errno)";
} else {
$string =0x01;
fputs ($fp, chr(0x50) );
//$line="";
//$line = trim(fgets($fp));
//echo "<br/>".$line;
//echo "<br /><form action='serie.php'><input type='submit' value='CAMBIAR LED'/></form>";
fclose ($fp);
}
}
*/
?>
