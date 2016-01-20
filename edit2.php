<?php
			if(!isset($_SESSION)){
session_start();}
			if (!isset($_SESSION['plevel'])){
			$_SESSION['plevel']=1;
			}

			if($_SESSION['plevel'] >1)
			{
				include "index.php";
		include "mydb.php";
		$ezt=$_GET["modosit"];
		$eredmeny = mysqli_query($con,"SELECT nev, mat, ang, csaladszam, tesoszam, tesi, mnyelv FROM osztaly WHERE nev='$ezt'") or die(mysql_error());		
		$rekord = mysqli_fetch_array( $eredmeny );
		print	"<form action='edit3.php' method='post' enctype='multipart/form-data';'>";
		echo "<td><table> 
		<tr>
		<td style='text-align:right'>név:</td>
		<td style='text-align:left'><input type='text' name='nev' id='nev' value='$rekord[nev]'></td>
		</tr>
		<tr>
		<td style='text-align:right'>matek:</td>
		<td style='text-align:left'><input type='text' name='mat' id='mat' value='$rekord[mat]'></td>
		</tr>
		<td style='text-align:right'>angol:</td>
		<td style='text-align:left'> <select id='ang' name='ang' >
		<option value='$rekord[ang]' name='eredeti' id='eredeti'>$rekord[ang]</option>
        <option value='a1' name='a1' id='a1'>a1</option>
	    <option value='a2' name='a22' id='a2'>a2</option>
		<option value='b2' name='b2' id='b2'>b2</option>
		</select>
		</tr>
		<td style='text-align:right'>családszám:</td>
		<td style='text-align:left'><input type='text' name='csaladszam' id='csaladszam' value='$rekord[csaladszam]'></td>
		</tr>
		<td style='text-align:right'>testvérek száma:</td>
		<td style='text-align:left'><input type='text' name='tesoszam' id='tesoszam' value='$rekord[tesoszam]'></td>
		</tr>
		<td style='text-align:right'>tesi:</td>
		<td style='text-align:left'><input type='text' name='tesi' id='tesi' value='$rekord[tesi]'></td>
		</tr>
		<td style='text-align:right'>2. nyelv:</td>
		<td style='text-align:left'><input type='text' name='mnyelv' id='mnyelv' value='$rekord[mnyelv]'></td>
		</tr>
		<td></td>
		<td style='text-align:left'><input type='submit' id='modosit' name='modosit' value='Módosít'></td>
		</tr>
		</table>";
		print   "<input type='hidden' name='id'  value='$rekord[nev]'<br>"; 
		print   "</form>";
			}
			else
			{
				echo "<div>A módosításhoz nincs hozzáférési jogod.</div><br>";
			}
?>