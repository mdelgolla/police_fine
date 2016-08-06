<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/theme.css" type="text/css">
</head>
<body>
<div id="header">
 <div id="left">
    <label>PoliceFine - Sri Lanka</label>
    </div>
    <div id="right">
     <div id="content">
         Police S.NO <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
	<div id="police">
	<h2 align="center">Welcome to control panel!</h2>
	</div>
	<div id="main">
		<div class="alert alert-success">
				<td><h3>Search By Driving Licence no :</h3></td>
			<td><input type="text" class="form-control" placeholder="NIC Number" >
					<div id="tet"><td><input type="submit" value="Search" class="btn btn-primary"></td></div>
				</td>
			<br>
		</div>
	
	<div class="alert alert-info">
		<table border="0">
		<tr>
			<td>First Name </td>
			<td><input type="text"></td>
		
			<td>Last Name </td>
			<td><input type="text"></td>
		</tr>
		<br>
		<tr>
			<td>Address </td>
			<td><input type="text"></td>
	
			<td>Distric </td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td>National Identity No </td>
			<td><input type="text"></td>
			
			<td>Licence Expaire Date  </td>
			<td><input type="text"></td>
		</tr>
		</table>
	</div>
</div>
</body>
</html>