 <!DOCTYPE html>
 <html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body>

	<?php
	session_start();
$conn=mysqli_connect('localhost','root','','rudkris');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
			
				$sql = "SELECT username FROM users WHERE username = '".$_POST['username']."'" or die("rossz"); 
				$result = mysqli_query($conn,$sql) or die (mysql_error()); 
				$num = mysqli_num_rows($result);
				if ( $num != 0 ) { 
				include "reg.php";
				echo "Már van ilyen felhasználó!";
				}
				else{
				if($_POST['kapcsa'] == $_SESSION['captcha'])
		{
			$sql="insert into users (username,passwd,name,level) values ('".$_POST['username']."','".$_POST['passwd']."','".$_POST['nev']."',1)"; 
				if (!mysqli_query($conn, $sql)) {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				header("Location: sikerreg.php");
		}
		else
		{
			include "reg.php";
			echo "rossz Captcha!";
		}
				}
		 
		 
		 
		 


		
	?>
	</body>
</html>
