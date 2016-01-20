<?php
function connect($username,$passwd)
{  
   $con=mysqli_connect('localhost',$username,$passwd);  
   mysqli_set_charset($con,"utf8");
   if(!isset($con))  
	{ 
        echo "Error".mysql_error();  
}  
return $con;
}
$dbname="rudkris";
$con=connect("root","");  
mysqli_select_db($con,$dbname);
				if(isset($con) == null)
				{
					echo "Hiba az adatbáziskapcsolat kialakításában".mysql_error();
				}

				mysqli_select_db($con,"$dbname"); 
?>