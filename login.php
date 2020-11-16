<?php
$method= $_SERVER["REQUEST_METHOD"];  //FIrst time is GET, subit is POST

$message = "Please Login";

$dbserver   = $_SERVER['SERVER_NAME'];
$dbname     = "studentdb";
$dbuser     = "user";
$dbpassword = "password";

$conn = mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname);


IF ($method == "POST") {
	//Get all the answers from the form
    $userid    = $_POST["userid"];
	$password  = $_POST["password"];
	
	//echo($userid);
	//echo(password);
	//process
	
	$sql = "SELECT u.userName FROM users AS u WHERE u.userId = '$userid' AND u.PASSWORD = '$password'";
	
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
	if (mysqli_num_rows($result)==1) {
		//login successfull
		$row = mysqli_fetch_assoc($result);
		$username = $row["userName"];
		$message = "Welcome to Star Wars, $username";
	} else {
		//login failed
		$message = "Login failed, please try again";
	}
	

}

?>

<!DOCTYPE html>
<!--



    "May The Source Be With You!"



-->

<!-- \\spx-webtest-s01\2022\YAST03 -->

<!-- http://spx-webtest-s01/2022/YAST03/ -->


<html lang="en">
<head>
	<link rel="stylesheet" href="main.css">

	<title>Star Wars</title>
</head>

<body>
	
	<header>

	</header>
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="quiz.php">Quiz</a></li>
			<li><a href="login.php">Login</a></li>
			<li style="float:right"><a class="active" href="about.html">About</a></li>
		</ul>
	<nav>
	
	
		<h1>Login //</h1>
	
	
	<form name="login" action="" method="post">
		<table width="30%">
		    <tr>
				<td width="15%">User Id</td>
				<td><input type="text" name="userid" size="15"></td>
			</tr>
			<tr>
				<td width="15%">Password</td>
				<td><input type="password" name="password" size="15"></td>
			</tr>

			<tr><td colspan='2' align='center'></br><button type="submit">Login</button></td></tr>
			<tr><td colspan='2' align='center'><marquee><h2><?php echo $message ?></h2><marquee></td></tr>
		</table>
	</form>
	
	<section>
		<p></p>
    </section>
	
	
	
	
	<footer class="picFooter">
	</footer>
	<footer class="textFooter">
		<p>(c) Peter Yastreboff. All Rights Reserved</p>
	</footer>

</body>

</html>