<?php
			require "mydb.php";
			if(!isset($_SESSION)){
				session_start();}
			if (!isset($_SESSION['plevel'])){
			$_SESSION['plevel']=0;
			}

			if($_SESSION['plevel'] >1)
			{
				$query="select nev, csaladszam, tesoszam, mat, ang, tesi, mnyelv from osztaly"; 
$result=mysqli_query($con,$query) or die ("Failed".$query);
$i=0;
echo "<table width=100% border=2>
<tr>
<th>név</th>
<th>csaladszám</th>
<th>tesoszam</th>
<th>matek</th>
<th>angol</th>
<th>tesi</th>
<th>2. nyelv</th>
</tr>";
while (list($nev,$csaladszam,$tesoszam,$mat,$ang,$tesi,$mnyelv)=mysqli_fetch_row($result)) 
{  
     if($i%1===0)
     {    
        echo "</tr><tr>";
     }
	 echo "<form action=torles2.php method=post><input type=hidden name=id value=$csaladszam>";
     echo "<td><table> 
		<tr>
		<td>$nev</td></table>
		<td>$csaladszam</td>
		<td>$tesoszam</td>
		<td>$mat</td>
		<td>$ang</td>
		<td>$tesi</td>
		<td>$mnyelv</td>
		<td><input type=submit id=submit value=X></td>
		</tr>";
     echo"</form>"; 
     $i++;
}
echo "</td></tr></table>";
mysqli_close($con);
			}
			else
			{
				echo "<div>A törléshez nincs hozzáférési jogod.</div><br>";
			}
?>