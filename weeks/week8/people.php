<?php
// people.php
// people-view.php
// config file
// credentials
// this needs to be uploaded to server

include('config.php');

// for big database, my header include would go right here.

// we need to grab our table and assign it to a variable

$sql = 'SELECT * FROM people';

// we need to connect to database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
// create a variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement --- if we have more than zero rows, we're good

if(mysqli_num_rows($result) > 0 ) {
    // now time for the while loop - while loop will return array
    while($row = mysqli_fetch_assoc($result)) {
        echo '<p>For more information about '.$row['first_name'].', please click <a href="people-view.php?id='.$row['people_id'].'">here.</a></p>';
        echo '<ul>';
        echo '<li>'.$row['first_name'].'</li>';
        echo '<li>'.$row['last_name'].'</li>';
        echo '<li>'.$row['email'].'</li>';
        echo '</ul>';
    }
} else {
    echo 'Houston, we have a problem.';
}

mysqli_free_result($result);
mysqli_close($iConn);
