<?php 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="library.jpg">
<div class="form">
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table style="background-image:url(blue.jpg)" width="100%" border="5" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Course</strong></th><th><strong>Standing</strong></th><th><strong>address</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count = 1;
$con = $connect->query ("SELECT * from new_record ORDER BY id desc");
$con->execute();
$results = $con->fetchall(PDO::FETCH_OBJ);

foreach ($results as $g): ?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $g->name ?></td>
<td align="center"><?php echo $g->age ?></td>
<td align="center"><?php echo $g->course ?></td>
<td align="center"><?php echo $g->standing ?></td>
<td align="center"><?php echo $g->address ?></td>
<td align="center"><a href="edit.php?id=<?php echo $g->id; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $g->id; ?>">Delete</a></td>
</tr>
<?php $count++;
endforeach;  ?>
</tbody>
</table>
</div>
</body>
</html>
 