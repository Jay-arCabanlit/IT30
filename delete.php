<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>
<?php 
require('db.php');
$id=$_REQUEST['id'];

$con = $connect->query("DELETE FROM new_record WHERE id=$id");
$con->execute(); 

header("Location: view.php"); 
 ?>
