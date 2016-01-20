<?php
			if(!isset($_SESSION)){
session_start();}
			if (!isset($_SESSION['plevel'])){
			$_SESSION['plevel']=1;
			}

			if($_SESSION['plevel'] >1)
			{
						require "mydb.php";
		mysqli_query($con,"UPDATE osztaly SET nev='$_POST[nev]' , mat='$_POST[mat]', ang='$_POST[ang]',tesi='$_POST[tesi]',csaladszam='$_POST[csaladszam]', tesoszam='$_POST[tesoszam]', mnyelv='$_POST[mnyelv]' WHERE nev='$_POST[id]'")or die("rossz");
		mysqli_close($con);
		echo '<meta http-equiv="refresh" content="0; URL=index.php?cat=4">';
			}
			else
			{
				echo "<div>A módosításhoz nincs hozzáférési jogod.</div><br>";
			}
?>