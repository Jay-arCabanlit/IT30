<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>STUDENT INFORMATION SYSTEM</title>
    
    
    <link rel="stylesheet" href="material-login-form/css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="material-login-form/css/style.css">

    
    
    
  </head>

  <body>


<!--<!DOCTYPE html>-->
<!--<html>-->
<!--head-->
<!--meta charset="utf-8"-->
<!--title>Login</title-->
<!--link rel="stylesheet" href="css/style.css" /-->
<!--/head-->
<!--body background="library.jpg"-->
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		//$username = stripslashes($username);
		//$username = mysql_real_escape_string($username);
		//$password = stripslashes($password);
		//$password = mysql_real_escape_string($password);
	//Checking is user existing in the database or not
        $sth = $connect->query("SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'");
        $sth->execute();
		$rows = $sth->rowcount();

        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>


<div class="pen-title">
  <h1>STUDENT INFORMATION SYSTEM</h1><span>Pen <i class='fa fa-code'></i> by <a href='http://andytran.me'>SJPIICD</a></span>
</div>
<div class="rerun"><a href="">Rerun Pen</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>

    <form action="" method="post" name="login">
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>GO</span></button>
      

      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" id="username" required="required"/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    <?php } ?>
 </body>
</html>

<!--div class="form"-->
<!--h1>STUDENT'S RECORD</h1-->
<!--h2>Log In</h2-->
<!--form action="" method="post" name="login"-->
<!--input type="text" name="username" placeholder="Username" required /-->
<!--input type="password" name="password" placeholder="Password" required /-->
<!--input name="submit" type="submit" value="Login" /-->
<!--/form>
</table>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div-->
<!--?php } ?-->
<!--/body>
</html>>

