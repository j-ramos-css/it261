<?php
//our first form
// no HTML
// form elements are important
// form attributes and values are important
// use global variable of $_POST
// two items - two input fields: name, email


if(isset($_POST['name'],
		$_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	if(empty($_POST['name'] &&
			$_POST['email'])) {
		echo 'Please fill out the fields!';
	} else {
		echo $name;
		echo $email;
	}
} else {
	echo '
	<form action="" method="post">
	<label>NAME</label>
	<input type="text" name="name">
	
	<label>EMAILI</label>
	<input type="emial" email="email">
	
	<input type="submit" value="Send it!">
	</form>
	';
}