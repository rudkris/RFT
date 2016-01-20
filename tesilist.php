 <head>
<meta charset="UTF-8">
</head>
<?PHP

header ('Content-type: text/html; charset=utf-8');

?>
<?php
require "mydb.php";

$querya1 = "SELECT nev, tesi FROM osztaly where tesi='nő'"; 	 
$resulta1 = mysqli_query($con,$querya1) or die ("Failed".$mquery);
$querya2 = "SELECT nev, tesi FROM osztaly where tesi='férfi'"; 	 
$resulta2 = mysqli_query($con,$querya2) or die ("Failed".$mquery);

echo "nő:";
echo "<br>";
while($row = mysqli_fetch_array($resulta1)){
	echo $row['nev'];
	echo "<br />";
}
echo "férfi:";
echo "<br>";
while($row = mysqli_fetch_array($resulta2)){
	echo $row['nev'];
	echo "<br />";
}


mysqli_close($con);
?>