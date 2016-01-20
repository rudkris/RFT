<?php
if(!isset($_SESSION)){
				session_start();}
?>
<!DOCTYPE html>
<html>
  <head>
  <?php

		if(!isset($_SESSION)){
    
}
		if(!isset($_SESSION['username']))
		{
			echo "<div>Add meg a neved!</div>";
			echo '<form action="login-process.php" method="post" enctype="multipart/form-data" onSubmit="return kitoltotte();">';
			echo '<input type="text" name="username" id="username"><br>';
			echo "<div>Add meg a jelszavad!</div>";
			echo '<input type="password" name="password" id="password"><br>';
			echo '<br>';
			echo '<img src="chp.php">';
			echo '<div>Captcha kód:</div><input type="text" name="kapcsa" id="kapcsa"><br>';

			echo '<input type="submit">';
			echo '</form>';
			echo '<form action="reg.php">';
   			echo '<input type="submit" value="Regisztráció">';
			echo '</form>';
			echo "</div>";
		}
		else
		{
			echo '<p>Szia '.$_SESSION['username'].'!';
			echo '<a href="kijelentkezes.php"><img src=logout.png width=20 height=20></a>';
		}
		?>
  <script>
		function kitoltotte()
		{
			if (document.getElementById("username").value=="" || document.getElementById("password").value=="" || 
				document.getElementById("kapcsa").value=="")
			{ 	
				alert("Tölts ki minden mezőt!");
				return false; 
			}
			return true;
		}
	</script>
   <title>Rudlof Kristóf</title>
  </style>
  </head>
  <body>
  <?php
  include "menu.php";
  ?>

    </body>
</html>