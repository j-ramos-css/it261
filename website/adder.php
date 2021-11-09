<?php //adder-wrong.php

if (isset($_POST['myTotal'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;

echo '<h2>You added '.$num1.' and '.$num2.' ';

echo '<p> and the answer is <br>
<style="color: red;">'.$myTotal.'!</p>';

echo'<p><a href="">Reset page</a>';

}
?>

<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>

</head>

<body>

<h1>Adder.php</h1> 

<form action="<?php echo htmlspecialchars ($_SERVER['PHP SELF']) ;?>" method="post">
<label>the first number:</label>

<input type="text" name="num1">

<br>

<label>Enter the second number:</label>

<input type="text" name="num2">

<br>

<input type="submit" name="myTotal" value="Add Em!!">
</form>


	<!--There was a missing </h2>-->
	<!--Form missing '<' -->
	<!--<label> and </label> were missing-->
	<!--Too many quote marks in the echos-->
	<!--Fixed ending PHP tag-->
	<!--Added "htmlspecialchars" in form tag-->
	<!--Fixed $ mytotal -= -->

</body>
</html>



