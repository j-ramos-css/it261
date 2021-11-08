<?php
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Emailable Form Number 1</title>

</head>

<body>

<form action="<?php echo htmlspecialchars ($_SERVER['PHP SELF']) ;?>" method="post">

<fieldset>

    <label for="first_ name">First Name</label>
    <input type="text" name="first name">

    <label for="last name">Last Names</label>
    <input type="text" name="last name">

    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="gender">Gender</label>
    <ul>
        <li>
            <input type="radio" name="gender" value="female">Female
        </li>

        <li>
            <input type="radio" name="gender" value="male">Male
        </li>

        <li>
            <input type="radio" name="gender" value="other">Other
        </li>
    </ul>

    <label for="wines">Favorite Wines</label>
    <ul>

        <li>
            <input type="checkbox" name="wines[]" value="cab">Cabernet
        </li>

        <li>
            <input type="checkbox" name="wines[]" value="merlot">Merlot
        </li>

        <li>
            <input type="checkbox" name="wines[]" value="syrah">Syrah
        </li>

        <li>
            <input type="checkbox" name="wines[]" value="melbec">Melbec
        </li>

        <li>
            <input type="checkbox" name="wines[]" value="blend">Red Blend
        </li>

    </ul>


</fieldset>

</body>

</html>