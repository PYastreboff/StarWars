<?php
$method= $_SERVER["REQUEST_METHOD"];  //FIrst time is GET, subit is POST

$message = "Choose the answer you think is correct and hit the submit button";
$message1 = ' ';
$message2 = ' ';
$message3 = ' ';
$message4 = ' ';
$message5 = ' ';
$message6 = ' ';
$message7 = ' ';
$message8 = ' ';
$message9 = ' ';
$message10 = ' ';
$total = 0;

IF ($method == "POST") {
	//Get all the answers from the form
    $ans1 = $_POST["q1"];
	$ans2 = $_POST["q2"];
	$ans3 = $_POST["q3"];
	$ans4 = $_POST["q4"];
	$ans5 = $_POST["q5"];
	$ans6 = $_POST["q6"];
	$ans7 = $_POST["q7"];
	$ans8 = $_POST["q8"];
	$ans9 = $_POST["q9"];
	$ans10 = $_POST["q10"];
	
	//Proccess the answers
	if ($ans1 == "T") {
		$message1 = "Correct";
		$total += 1;
	} 
	else {
		$message1 = "Answer Incorrect";
	}
	if ($ans2 == "T") {
		$message2 = "Correct";
		$total += 1;
	} 
	else {
		$message2 = "Answer Incorrect";
	}
	if ($ans3 == "T") {
		$message3 = "Correct";
		$total += 1;
	} 
	else {
		$message3 = "Answer Incorrect";
	}
	if ($ans4 == "T") {
		$message4 = "Correct";
		$total += 1;
	} 
	else {
		$message4 = "Answer Incorrect";
	}
	if ($ans5 == "T") {
		$message5 = "Correct";
		$total += 1;
	} 
	else {
		$message5 = "Answer Incorrect";
	}
	if ($ans6 == "T") {
		$message6 = "Correct";
		$total += 1;
	} 
	else {
		$message6 = "Answer Incorrect";
	}
	if ($ans7 == "T") {
		$message7 = "Correct";
		$total += 1;
	} 
	else {
		$message7 = "Answer Incorrect";
	}
	if ($ans8 == "T") {
		$message8 = "Correct";
		$total += 1;
	} 
	else {
		$message8 = "Answer Incorrect";
	}
	if ($ans9 == "T") {
		$message9 = "Correct";
		$total += 1;
	} 
	else {
		$message9 = "Answer Incorrect";
	}
	if ($ans10 == "T") {
		$message10 = "Correct";
		$total += 1;
	} 
	else {
		$message10 = "Answer Incorrect";
	}
	//Choose the final message to say based on the $total variable
	if ($total == 0) {
		$message = "What a load of Rubbish, YOU GOT ZERO!";
	} else if ($total == 1) {
	$message = "Ok good attempt, you scored ".$total." point in the quiz today";
	} else if ($total == 10) {
	$message = "Congratulations you got EVERY SINGLE QUESTION right in the quiz today!";
	} else {
	$message = "Congratulations you scored ".$total." points in the quiz today";
	}
}

?>

<!DOCTYPE html>
<!--



    "May The Source Be With You!"



-->

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
	
	
	
	
	
	
	<form name="quiz" action="" method="post">
		<table>
			<tr><td></br><h1>Q1: Who is Luke Skywalkers Father //</h1></td></tr>
			<tr><td><input type="radio" name="q1" id="q1a" value="T">Darth Vader</input></td></tr>
			<tr><td><input type="radio" name="q1" id="q1b" value="F">Lando Calrissian</input></td></tr>
			<tr><td><input type="radio" name="q1" id="q1c" value="F">Han Solo</input></td></tr>
			<tr><td><?php echo $message1 ?></td></tr>

			<tr><td></br><h1>Q2: Who is the "Phantom Menace" of the Series //</h1></td></tr>
			<tr><td><input type="radio" name="q2" id="q2a" value="F">Jango Fett</input></td></tr>
			<tr><td><input type="radio" name="q2" id="q2b" value="T">Emperor Palpatine</input></td></tr>
			<tr><td><input type="radio" name="q2" id="q2c" value="F">Greedo</input></td></tr>
			<tr><td><?php echo $message2 ?></td></tr>
			
			<tr><td></br><h1>Q3: What is Darth Vaders Real Name //</h1></td></tr>
			<tr><td><input type="radio" name="q3" id="q3a" value="T">Anakin Skywalker</input></td></tr>
			<tr><td><input type="radio" name="q3" id="q3b" value="F">Mr Scary Man</input></td></tr>
			<tr><td><input type="radio" name="q3" id="q3c" value="F">Barry B Benson</input></td></tr>
			<tr><td><?php echo $message3 ?></td></tr>
			
			<tr><td></br><h1>Q4: Who Owns The Millenium Falcon //</h1></td></tr>
			<tr><td><input type="radio" name="q4" id="q4a" value="F">The Emperor</input></td></tr>
			<tr><td><input type="radio" name="q4" id="q4b" value="F">Princess Leia</input></td></tr>
			<tr><td><input type="radio" name="q4" id="q4c" value="T">Han Solo</input></td></tr>
			<tr><td><?php echo $message4 ?></td></tr>
			
			<tr><td></br><h1>Q5: What is The Main Bounty at the Start of The Mandalorian //</h1></td></tr>
			<tr><td><input type="radio" name="q5" id="q5a" value="F">Some Credits</input></td></tr>
			<tr><td><input type="radio" name="q5" id="q5b" value="F">A Criminal</input></td></tr>
			<tr><td><input type="radio" name="q5" id="q5c" value="T">Baby Yoda</input></td></tr>
			<tr><td><?php echo $message5 ?></td></tr>
			
			<tr><td></br><h1>Q6: Who continues to own Anakins Lightsaber //</h1></td></tr>
			<tr><td><input type="radio" name="q6" id="q6a" value="F">Princess Leia</input></td></tr>
			<tr><td><input type="radio" name="q6" id="q6b" value="F">A Criminal</input></td></tr>
			<tr><td><input type="radio" name="q6" id="q6c" value="T">Luke</input></td></tr>
			<tr><td><?php echo $message6 ?></td></tr>
			
			<tr><td></br><h1>Q7: Who Dies at the end of the Rise of Skywalker //</h1></td></tr>
			<tr><td><input type="radio" name="q7" id="q7a" value="F">Luke</input></td></tr>
			<tr><td><input type="radio" name="q7" id="q7b" value="F">Rey</input></td></tr>
			<tr><td><input type="radio" name="q7" id="q7c" value="T">Kylo Ren</input></td></tr>
			<tr><td><?php echo $message7 ?></td></tr>
			
			<tr><td></br><h1>Q8: Who is Maz Kanatas "Boyfriend" //</h1></td></tr>
			<tr><td><input type="radio" name="q8" id="q8a" value="F">Mr. Kanata</input></td></tr>
			<tr><td><input type="radio" name="q8" id="q8b" value="F">Baby Yoda</input></td></tr>
			<tr><td><input type="radio" name="q8" id="q8c" value="T">Chewbacca</input></td></tr>
			<tr><td><?php echo $message8 ?></td></tr>
			
			<tr><td></br><h1>Q9: Who Kills Han Solo //</h1></td></tr>
			<tr><td><input type="radio" name="q9" id="q9a" value="T">Kylo Ren</input></td></tr>
			<tr><td><input type="radio" name="q9" id="q9b" value="F">A Criminal</input></td></tr>
			<tr><td><input type="radio" name="q8" id="q9c" value="F">Jango Fet</input></td></tr>
			<tr><td><?php echo $message9 ?></td></tr>
			
			<tr><td></br><h1>Q10: What Colour is Darth Vaders Suit //</h1></td></tr>
			<tr><td><input type="radio" name="q10" id="q10a" value="F">Red</input></td></tr>
			<tr><td><input type="radio" name="q10" id="q10b" value="F">Yellow</input></td></tr>
			<tr><td><input type="radio" name="q10" id="q10c" value="T">Black</input></td></tr>
			<tr><td><?php echo $message10 ?></td></tr>

			<tr><td></br><button type="submit">Answer Quiz</button></td></tr>
			<tr><td><h2><?php echo $message ?><h2></td></tr>
		</table>
	</form>
	
	
	
	
	
	
	
	
	<footer class="picFooter">
	</footer>
	<footer class="textFooter">
		<p>(c) Peter Yastreboff. All Rights Reserved</p>
	</footer>

</body>

</html>

