<!doctype html>
<html lang="en">
<head>
<title>Form 3 with HTML and CSS</title>
<meta charset="UTF-8">

</head>

<body>
    <form action="" method="post">
        <fieldset>

            <label for="fname">First Name</label>
            <input type="text" name="fname">
            <label for="lname">Last Name</label>
            <input type="text" name="lname">
            <label for="email">Email</label>
            <input type="email" name="email">
            <textarea name="comments"></textarea>
            <input type="submit" value="Send it!">

        </fieldset>
    </form>

    <?php
// form 3 - adding HTML and CSS
if(isset($_POST['fname'],
         $_POST['lname'],
         $_POST['email'],
         $_POST['comments'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// nest an if/else statment

if(empty($fname && $lname && $email && $comments)) {
    $error = 'Please fill out the input fields';
} else {
    echo $fname;
    echo $lname;
    echo $email;
    echo $comments;
} // end else

} //  end isset

?>

</body>

</html>