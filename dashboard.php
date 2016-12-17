<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="library.jpg">
<div class="form">
<h1>
<p>Welcome to Dashboard.</p>
</h1>
<h3>
<p><a href="index.php">Home</a><p>
<p><a href="insert.php">Insert New Record</a></p>
<p><a href="view.php">View Records</a><p>
<p><a href="logout.php">Logout</a></p>
</h3>
</div>
</body>
</html>
