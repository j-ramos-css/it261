<?php
//our first form
// no HTML
// form elements are important
// form attributes and values are important
// use global variable of $_POST
// two items - two input fields: name, email


if(isset($_POST['fname'],
		 $_POST['lname'],
		 $_POST['email'],
		 $_POST['comments'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	if(empty($_POST['fname'] &&
			 $_POST['lname'] &&
			$_POST['email'] &&
			$_POST['comments'])) {
		echo 'Please fill out the fields!';
	} else {
		echo $fname;
		echo $lname;
		echo $email;
		echo $comments;
	}
} else {
	echo '
	<form action="" method="post">
	<label>FIRST NAME</label>
	<input type="text" name="fname">
	
	<label>LAST NAME</label>
	<input type="text" name="lname">
	
	<label>EMAIL</label>
	<input type="email" email="email">
	
	<input type="submit" value="Send it!">
	</form>
	';
}