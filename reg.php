 <!DOCTYPE html>
 <html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	function kitoltotte() 
	{
		var pw1=document.getElementById("passwd").value;
		var pw2=document.getElementById("passwd2").value;
		if(pw1 != pw2 || pw1==""){
		 alert("jelszavak nem egyeznek");
		 return false;
		}
		if (document.getElementById("username").value==""){
			alert("nem adtál meg usernevet");
			return false;
		}
		if (document.getElementById("nev").value==""){
			alert("nem adtál meg nevet");
			return false;
		}
		if (document.getElementById("kapcsa").value==""){
			alert("nem adtál meg capchha-t");
			return false;
		}
	}
</script>

	<title>reg</title>
	</head>

	<body>
		<?php
		include "menu.php";
		echo '<form action="reg2.php" method="post" onsubmit="return kitoltotte();" enctype="multipart/form-data">';
		echo '<div>felhaszn:*</div>';
		echo '<input type="text" name="username" id="username"><br>';
		'<input type="text" name="rejtett" id="rejtett" value=username>';
		echo '<div>Jelszó:*</div>';
		echo '<input type="password" name="passwd" id="passwd"><br>';
		echo '<div>Jelszó ismét*</div>';
		echo '<input type="password" name="passwd2" id="passwd2"><br>';
		echo '<div>név:*</div>';
		echo '<input type="text" name="nev" id="nev"><br>';
		echo '<img src="chp.php">';
		echo '<div>Captcha:</div>';
		echo '<input type="text" name="kapcsa" id="kapcsa"><br>';
		echo '<input type="submit">';
		echo '</form>';

		?>
	</body>

</html> 