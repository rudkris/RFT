<html>
<script>
	function kitoltotte() 
	{
		if (document.getElementById("nev").value=="" || document.getElementById("mat").value=="" ||document.getElementById("ang").value==""||document.getElementById("tesi").value=="" ||document.getElementById("csaladszam").value==""||document.getElementById("tesoszam").value=="" ||document.getElementById("mnyelv").value==""){
			alert("üres mező van!");
			return false;
		}
	}
</script>
	</html>
<?php
			if(!isset($_SESSION)){
				session_start();}
			if (!isset($_SESSION['plevel'])){
			$_SESSION['plevel']=0;
			}

			if($_SESSION['plevel'] >0)
			{
				echo '<form action="insert-process.php" method="post" onsubmit="return kitoltotte();" enctype="multipart/form-data">';
				echo "<td><table> 
		<tr>
		<td style='text-align:right'>név:</td>
		<td style='text-align:left'><input type='text' name='nev' id='nev'></td>
		</tr>
		<tr>
		<td style='text-align:right'>matek:</td>
		<td style='text-align:left'><input type='text' name='mat' id='mat' ></td>
		</tr>
		<td style='text-align:right'>angol:</td>
		<td style='text-align:left'> <select id='ang' name='ang' >
        <option value='a1' name='a1' id='a1'>a1</option>
	    <option value='a2' name='a22' id='a2'>a2</option>
		<option value='b2' name='b2' id='b2'>b2</option>
		</select> </tr>
		<td style='text-align:right'>családszám:</td>
		<td style='text-align:left'><input type='text' name='csaladszam' id='csaladszam' ></td>
		</tr>
		<td style='text-align:right'>testvérek száma:</td>
		<td style='text-align:left'><input type='text' name='tesoszam' id='tesoszam' ></td>
		</tr>
		<td style='text-align:right'>tesi:</td>
		<td style='text-align:left'><input type='text' name='tesi' id='tesi' ></td>
		</tr>
		<td style='text-align:right'>2. nyelv:</td>
		<td style='text-align:left'><input type='text' name='mnyelv' id='mnyelv' ></td>
		</tr>
		<td></td>
		<td style='text-align:left'><input type='submit' value='Hozzáad'></td>
		</tr>
		</table>";
				print   "</form>";
			}
			else
			{
				echo "<div align=center>A módosításhoz nincs hozzáférési jogod.</div><br>";
			}
?>




