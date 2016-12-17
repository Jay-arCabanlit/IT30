<?php 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];

$con = $connect->query("SELECT * from new_record where id='$id'");
$con->execute();
$result = $con->fetch(PDO::FETCH_OBJ);
//$query = "SELECT * from new_record where id='".$id."'"; 
//$result = mysql_query($query) or die ( mysql_error());
//$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" /></head>
<body background="library.jpg">
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age =$_REQUEST['age'];
$course =$_REQUEST['course'];
$standing =$_REQUEST['standing'];
$address =$_REQUEST['address'];
$submittedby = $_SESSION["username"];

$con = $connect-> query("UPDATE new_record set trn_date='".$trn_date."', name='".$name."', age='".$age."', course='".$course."', standing='".$standing."' ,address='".$address."', submittedby='".$submittedby."' where id='".$id."'");
/*$update="update new_record set trn_date='".$trn_date."', name='".$name."', age='".$age."', course='".$course."', standing='".$standing."' ,address='".$address."', submittedby='".$submittedby."' where id='".$id."'";
mysql_query($update) or die(mysql_error());*/
$con-> execute();
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $result->id;?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $result->name;?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $result->age;?>" /></p>
<p><input type="text" name="course" placeholder="Enter course" required value="<?php echo $result->course;?>" /></p>
<p><input type="text" name="standing" placeholder="Enter Year Level" required value="<?php echo $result->standing;?>" /></p>
<p><input type="text" name="address" placeholder="Enter address" required value="<?php echo $result->address;?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
