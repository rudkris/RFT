<head>
<meta charset="UTF-8">
</head>
<?PHP

header ('Content-type: text/html; charset=utf-8');

?>
<?php
require "mydb.php";
$query="select nev, csaladszam, tesoszam, mat, ang, tesi, mnyelv,kiadta from osztaly"; 
if(!isset($_GET['order']))
	$_GET['order']=0;
elseif($_GET['order']==1)    
	{$query.=" order by tesoszam";}
elseif($_GET['order']==2)    
	{$query.=" order by csaladszam";}
elseif($_GET['order']==3)    
	{$query.=" order by mat";}
elseif($_GET['order']==4)	
	{$query.=" order by ang";}
elseif($_GET['order']==5)    
	{$query.=" order by tesi";}
elseif($_GET['order']==6)    
	{$query.=" order by nev";}
elseif($_GET['order']==7)    
	{$query.=" order by mnyelv";}
	
$result=mysqli_query($con,$query) or die ("Failed".$query);

$i=0;


echo "<table width=100% border=2>
<tr>
<th><a href=index.php?cat=".$_GET['cat']."&order=6> név</a></th>   
<th><a href=index.php?cat=".$_GET['cat']."&order=1> tesószam</a></th>
<th><a href=index.php?cat=".$_GET['cat']."&order=2> családszam</a></th>
<th><a href=index.php?cat=".$_GET['cat']."&order=3> matek</a></th>
<th><a href=index.php?cat=".$_GET['cat']."&order=4> angol</a></th>
<th><a href=index.php?cat=".$_GET['cat']."&order=5> tesi</a></th>
<th><a href=index.php?cat=".$_GET['cat']."&order=7> 2. nyelv</a></th>
<th> hozzáadó</a></th>

</tr>";
while (list($nev,$tesoszam,$csaladszam,$mat,$ang,$tesi,$mnyelv,$kiadta)=mysqli_fetch_row($result)) 
{  
     if($i%1===0)
     {    
        echo "</tr><tr>";
     }
	 echo "<form action=torles2.php method=post>
	 <input type=hidden name=id value=$csaladszam>";
	 
     echo "<td><table> 
		<tr>
		<td>$nev</td></table>
		<td>$csaladszam</td>
		<td>$tesoszam</td>
		<td>$mat</td>
		<td>$ang</td>
		<td>$tesi</td>
		<td>$mnyelv</td>
		<td>$kiadta</td>

		</tr>";
     echo"</form>"; 
     $i++;
}
echo "</td></tr></table>";
mysqli_close($con);
?>