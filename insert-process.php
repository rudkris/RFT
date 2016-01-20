<?php
if(!isset($_SESSION)){
session_start();}
$conn=mysqli_connect('localhost','root','','rudkris');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="insert into osztaly (nev, mat, ang,tesi,csaladszam,tesoszam,mnyelv,kiadta) 
values ('".$_POST['nev']."','".$_POST['mat']."','".$_POST['ang']."','".$_POST['tesi']."','".$_POST['csaladszam']."','".$_POST['tesoszam']."','".$_POST['mnyelv']."','" . $_SESSION['username'] . "')"; 

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo '<meta http-equiv="refresh" content="0; URL=index.php?cat=1">';
?>