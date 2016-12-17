<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="library.jpg">
<div class="form">
<h1>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
</h1>
<h3>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</h3>
</div>
</body>
</html>
