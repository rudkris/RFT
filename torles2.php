<?php
require "mydb.php";
$query="select * from osztaly where csaladszam=".$_POST['id'];  
$result=mysqli_query($con,$query) or die ("Failed".$query);
list($file)=mysqli_fetch_row($result);  
if(is_file($file))
 { unlink($file);}  
$query="delete from osztaly where csaladszam=".$_POST['id'];  
mysqli_query($con,$query);
mysqli_close($con);
echo '<meta http-equiv="refresh" content="0; URL=index.php?cat=2">';
?>