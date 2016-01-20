<?php
			if(!isset($_SESSION)){
session_start();}
			if (!isset($_SESSION['plevel'])){
			$_SESSION['plevel']=1;
			}

			if($_SESSION['plevel'] >1)
			{
				xxx
			}
			else
			{
				echo "<div>A módosításhoz nincs hozzáférési jogod.</div><br>";
			}
?>