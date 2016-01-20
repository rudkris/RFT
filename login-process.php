 <!DOCTYPE html>
 <html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="stiluslap.css">
	</head>

	<body>
	
	<?php 

		if(!isset($_SESSION)){
				session_start();}

		if($_POST['kapcsa'] == $_SESSION['captcha'])
		{
			require "mydb.php";
			$dbname="rudkris";
			$con=connect("root", "");
			if(isset($con) == null)
			{
				echo "Hiba az adatbáziskapcsolat kialakításában.".mysql_error();
			}
			mysqli_select_db($con,"$dbname");

			$query = mysqli_query($con,"SELECT `passwd`, `level` from users 
				WHERE username = '$_POST[username]' ") or die(mysql_error());
			$result = mysqli_fetch_array($query);

			if($result['passwd'] == $_POST['password'])
			{
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['plevel'] = $result['level'];
				header("Location: index.php");
			}
			else
			{	include "index.php";
				echo "<div>Helytelen felhasználónév vagy jelszó. </div><br>";
			}

			mysqli_close($con);
		}
		else		
		{
				include "index.php";
				echo "<div>Helytelen capthca </div><br>";
		}

	?>
	</body>
</html>