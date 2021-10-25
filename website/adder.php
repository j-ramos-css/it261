<?php//adder.php

if(isset($_POST['submit'])){
	
$num1 = $_POST['num1'];
	
$num2 = $_POST['num2'];
	
$myTotal = $num1+$num2;	

	echo '<h2>You added . "$num1" . and . "$num2" . </h2>';

	echo '<p> and the answer is 
	<br>
	<style="color:red;">"$myTotal"</p>';

	echo '<p><a href="adder.php">Reset page</a></p>';

}

<html>

<head>

	<title>My Adder Assignment</title>

	<style>
		p {
			color: red;
			text-align: center;
		}

		h1 {
			color: green;
		}

		h2 {
			font-size: 1.5em;
			text-align: center;
		}

		form {
			width: 350px;
			margin: 0 auto;
			border: 1px solid red;
			padding: 10px;
		}

		h1 {
			text-align: center;
		}

	</style>

</head>

<body>

	<h1>Adder.php</h1>

	<form action="" method="post">
		<label>Enter the first number:</label>
		<input type="number" name="num1">

		<br>

		<label>Enter the second number:</label>
		<input type="number" name="num2">

		<br>

		<input type="submit" value="Add Em!!">

	</form>

	<!--There was a typo in if (asset-->
	<!--There was a missing </h2>-->
	<!--Added CSS-->
	<!--here are my errors-->
	<!--Form missing '<' -->
	<!--<label> and </label> were missing-->
	<!--Too many quote marks in the echos-->
	<!--Fixed ending PHP tag-->
	<!--Fixed $ mytotal -= -->


</body>

</html>
?>
