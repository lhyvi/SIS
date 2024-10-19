<?php
session_start();

if (!isset($_SESSION['uname'])) {
	header('Location: index.php?error=Please Log-In');
	exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <title>SIS</title>
    <link rel="stylesheet" type="text/css" href="CSS/higherlower.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<h1>Student Information</h1>
	<img src="Nagamany.png" width=100>
	<table style="border: 2px solid">
		<tr>
			<td>Student ID</td>
			<td>01-0001</td>
		</tr>
		<tr>
			<td>Student Name</td>
			<td>Marco Esteban</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>January 17</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male</td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td>09123456789</td>
		</tr>
		<tr>
			<td>Email Address</td>
			<td>marcoesteban@ms.com</td>
		</tr>
		<tr>
			<td>Home Address</td>
			<td>Silica Valley, Western Calofirna</td>
		</tr>
	</table>
	</div>
	<div class="container2">
	<h2> Academic Information</h2>
	<div class="table">
	<table style="border: 2px solid">
		<tr>
			<td>Program</td>
			<td>Computer Science</td>
		</tr>
		<tr>
			<td>Year Level</td>
			<td>3rd</td>
		</tr>
		<tr>
			<td>Student Status</td>
			<td>Active</td>
		</tr>
		<tr>
			<td>Enrollment Date</td>
			<td>January 01, 0001</td>
		</tr>
	</table>
	</div>
	<form action="logout.php">
		<input type="submit" value="Logout" class="btn" />
	</form>
	</div>
</body>
</html>
