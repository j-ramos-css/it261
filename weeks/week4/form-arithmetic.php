<!doctype html>
<html lang="en">
<head>
<title>Arithmetic Form</title>
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
        text-align: center:
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
            <label for="coffees">How many coffees?</label>
            <input type="number" name="coffees">
            <label for="lattes">Lattes</label>
            <input type="numbers" name="lattes">
            <label for="caps">Cappucino</label>
            <input type="number" name="caps">
            <input type="submit" value="Send it!">

        </fieldset>
    </form>

    <?php
// form 3 - adding HTML and CSS
if(isset($_POST['fname'],
         $_POST['coffees'],
         $_POST['lattes'],
         $_POST['caps'])) {

$fname = $_POST['fname'];
$coffees = $_POST['coffees'];
$lattes = $_POST['lattes'];
$caps = $_POST['caps'];

$total = $coffees + $lattes + $caps;

$friendly_total = number_format($total, 0);

// nest an if/else statment

if(empty($fname && $coffees && $lattes && $caps)) {
    echo '<h3>Please fill out the input fields</h3>';
} else {
//    echo $fname;
//    echo $lname;
//    echo $email;
//    echo $comments;

echo '

<div class="box">
<h2>Hello '.$fname.'</h2>
<p>You have ordered the following:</p>
<ul>

    <li>'.coffees.' Coffees</li>
    <li>'.lattes.' Lattes</li>
    <li>'.caps.' Cappacinos</li>

</ul>
<p>Totalling '.$friendly_total.' beverages</p>

</div>

';

} // end else

} //  end isset

?>

</body>

</html>