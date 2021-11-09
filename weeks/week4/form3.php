<!doctype html>
<html lang="en">
<head>
<title>Form 3 with HTML and CSS</title>
<meta charset="UTF-8">
<style>

    form {
        width: 400px;
        margin: 0 auto;
    }

    fieldset {
        border: 1px solid red;
        padding: 10px;
    }

    label, textarea {
        display: block;
        margin-bottom: 5px;
    }

    input, textarea {
        margin-bottom: 10px;
    }

    input[type=text],
    input[type-email],
    textarea {
        width: 100%;
    }

    h3 {
        color: red;
        text-align: center;
    }

    .box {
        width: 400px;
        margin: 20px auto;
        padding: 15px;
        background: beige;
    }

</style>
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
    echo '<h3>Please fill out the input fields</h3>';
} else {
//    echo $fname;
//    echo $lname;
//    echo $email;
//    echo $comments;

echo '

<div class="box">
    <ul>
        <li><b>First Name :</b> '.$fname.'</li>
        <li><b>Last Name :</b> '.$lname.'</li>
        <li><b>Email :</b> '.$email.'</li>
        <li><b>Comments :</b> '.$comments.'</li>
    <ul>
</div>

';

} // end else

} //  end isset

?>

</body>

</html>