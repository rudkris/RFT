  <?php

   ?>

<div id="logoDiv">
		<a href="index.php"><img id ="logo" src="header.jpg" width="100%" height="100%"/></a>
	</div>
  <link href="style.css" rel="stylesheet" type="text/css">
<div id="navigation" align="center">
  <ul>
  <?php
  if(!isset($_SESSION)){
				session_start();}
							if (!isset($_SESSION['plevel'])){
			$_SESSION['plevel']=0;
			}
   $mysqli=mysqli_connect('localhost','root','','rudkris');
   mysqli_set_charset($mysqli,"utf8");
   $sql="SELECT * FROM menu WHERE id = 0 and plevel<='" . $_SESSION['plevel'] . "'";
   $result=mysqli_query($mysqli,$sql) or die(mysqli_error());
   while($row=mysqli_fetch_array($result)){
	$cat_id=$row['muv_id'];
    $cat_name=$row['muvelet'];
    echo "<li>
    <a href='index.php?cat=$cat_id'>".$cat_name."</a>";
   }
   ?>
        </ul>
  </div>
   <?php
if (!isset($_GET['cat'])){
	$_GET['cat']=0;
}
if($_GET['cat'] == "1"){ 
include"list.php"; } 
elseif($_GET['cat']== "2"){ 
include"torles.php"; }
elseif($_GET['cat'] == "3"){ 
include"insert.php"; }
elseif($_GET['cat'] == "4"){ 
include"edit.php"; }
elseif($_GET['cat'] == "5"){ 
include"combo.php"; }
  ?>