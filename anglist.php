<head>
<meta charset="UTF-8">
</head>
<?PHP

header ('Content-type: text/html; charset=utf-8');

?>
<?php
require "mydb.php";

$querya1 = "SELECT nev, ang FROM osztaly where ang='a1'"; 	 
$resulta1 = mysqli_query($con,$querya1) or die ("Failed".$mquery);
$querya2 = "SELECT nev, ang FROM osztaly where ang='a2'"; 	 
$resulta2 = mysqli_query($con,$querya2) or die ("Failed".$mquery);
$queryb2 = "SELECT nev, ang FROM osztaly where ang='b2'"; 	 
$resultb2 = mysqli_query($con,$queryb2) or die ("Failed".$mquery);
echo "a1";
echo "<br>";
while($row = mysqli_fetch_array($resulta1)){
	echo $row['nev'];
	echo "<br />";
}
echo "a2";
echo "<br>";
while($row = mysqli_fetch_array($resulta2)){
	echo $row['nev'];
	echo "<br />";
}
echo "b2";
echo "<br>";
while($row = mysqli_fetch_array($resultb2)){
	echo $row['nev'];
	echo "<br />";
}


mysqli_close($con);
?>