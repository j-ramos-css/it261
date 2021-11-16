<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>
        " method="post">

        <fieldset>
            <label for="name">Your Name</label>
            <input type="text" name="name" value="
                <?php 
                if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);
                ?>
            ">

            <label for="miles">How many miles will you be driving?</label>
            <input type="text" name="miles" value="
                <?php 
                if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);
                ?>
            ">

            <label for="hours_day">How many hours per day do you want to drive?</label>
            <input type="text" name="hours_day" value="
            <?php 
                if(isset($_POST['hours_day'])) echo htmlspecialchars($_POST['speed']);
            ?>
            ">

            <label for="cost">Price per gallon:</label>
            <ul>
            <li><input type="radio" name="cost" value="3.00"
            <?php
                if(isset($_POST['cost']) && $_POST['cost'] == '3.00') echo 'checked="checked"' 
            ;?>>$3.00</li>
            <li><input type="radio" name="cost" value="3.50"
            <?php
                if(isset($_POST['cost']) && $_POST['cost'] == '3.50') echo 'checked="checked"' 
            ;?>>$3.50</li>
            <li><input type="radio" name="cost" value="4.00"
            <?php
                if(isset($_POST['cost']) && $_POST['cost'] == '4.00') echo 'checked="checked"' 
            ;?>>$4.00</li>
            </ul>

            <label for="fuel">Fuel Efficiency</label>

            <select name="fuel">
                
                <option value="10"
                <?php 
                    if(isset($_POST['fuel']) && $_POST['fuel'] == '10') echo 'selected="selected"';
                ?>
                >Poor</option>
                <option value="20"
                <?php 
                    if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected="selected"';
                ?>
                >Decent</option>
                <option value="30"
                <?php 
                    if(isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected="selected"';
                ?>
                >Good</option>
                <option value="40" 
                <?php 
                    if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected="selected"';
                ?>
                >Great</option>

            </select>

            <input type="submit" value="Submit!">

            <p><a href="">Reset</a></p>
        </fieldset>


    </form>

    <?php

     if($_SERVER['REQUEST_METHOD'] == 'POST') {
 
         if(empty($_POST['name'])) {
             echo '<span class="error">Please fill out your name.</span>';
         }
 
         if(empty($_POST['miles'])) {
             echo '<span class="error">Please fill out your miles per hour.</span>';
         }
 
         if(empty($_POST['hours_day'])) {
             echo '<span class="error">Please fill out how many hours per day you want to drive.</span>';
         }
 
         if(empty($_POST['cost'])) {
             echo '<span class="error">Please choose your price per gallon</span>';
         }
 
         // if bank is NULL, please select bank
 
         if($_POST['fuel'] == NULL) {
             echo '<span class="error">Please choose fuel efficiency</span>';
         }

         if(isset(
            $_POST['name'],
            $_POST['miles'],
            $_POST['hours_day'],
            $_POST['cost']
        )) {
            $name = (int)$_POST['name'];
            $miles = (int)$_POST['miles'];
            $hours_day = (int)$_POST['hours_day'];
            $cost = (int)$_POST['cost'];
            $fuel = (int)$_POST['fuel'];

            $speed  = 65; //average speed
            $hours_total = $miles / $speed;
            $gallons = ($miles / $fuel);
            $money = $gallons * $cost;
            $days = ($hours_total / $hours_day);

            if(!empty ($name && $miles && $hours_day && $fuel && $cost));
            echo '
                <div class="results">
                <h1>Calculator Results</h1>
                <ul>
                <li>You will spend $'.floor($money).'</li>
                <li>Gallons:'.floor($gallons).'</li>
                <li>You will spend a total of hours driving: '.floor($hours_total).'</li>
                <li>Days:</b> '.ceil($days).'</li>
                </ul> 
                </div>';

        } //close isset
    
    } //server request
    ?>
</body>
</html>