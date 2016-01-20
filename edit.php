<?php
			if(!isset($_SESSION)){
session_start();}
			if (!isset($_SESSION['plevel'])){
			$_SESSION['plevel']=1;
			}

			if($_SESSION['plevel'] >1)
			{
				echo "<table width=100% border=2>
<tr>
<th>név</th>
<th>családtagok száma</th>
<th>testvérek száma</th>
<th>matek</th>
<th>angol</th>
<th>tesi</th>
<th>2. nyelv</th>
</tr>";
require "mydb.php";
$eredmeny = mysqli_query($con,"SELECT nev, mat, ang, csaladszam, tesoszam, tesi, mnyelv FROM osztaly") or die("rossz");		
$i=0;
while ( $rekord = mysqli_fetch_array( $eredmeny ) )
{  
     if($i%1===0)
     {    
        echo "</tr><tr>";
     } 
     echo "<td><table> 
		<tr>
		<td>$rekord[nev]</td></table>
		<td>$rekord[csaladszam]</td>
		<td>$rekord[tesoszam]</td>
		<td>$rekord[mat]</td>
		<td>$rekord[ang]</td>
		<td>$rekord[tesi]</td>
		<td>$rekord[mnyelv]</td>
		<td><a href='edit2.php?modosit=$rekord[nev]'><img src=edit.png width=20 height=20></a></td>
		</tr>";
     echo"</form>"; 
     $i++;
}
echo "</td></tr></table>";
mysqli_close($con);
			}
			else
			{
				include "index.php";
				echo "<div align=center>A módosításhoz nincs hozzáférési jogod.</div><br>";
			}
?>