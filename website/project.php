<?php
// project.php
// project-view.php
// config file
// credentials
// this needs to be uploaded to server

include('config.php');
include('includes/header.php');
// for BIG database assignment, my header include would go right here.

// we need to grab our table and assign it to a variable
?>

<main>
<h1>Welcome to my project page</h1>

<?php
$sql = 'SELECT * FROM people';

// we need to connect to database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
// create a variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement --- if we have more than zero rows, we're good

if(mysqli_num_rows($result) > 0 ) {
    // now time for the while loop - while loop will return array
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h3>For more information about '.$row['first_name'].', please click <a href="project-view.php?id='.$row['people_id'].'">here.</a></h3>';
        echo '<ul>';
        echo '<li>'.$row['first_name'].'</li>';
        echo '<li>'.$row['last_name'].'</li>';
        echo '<li>'.$row['email'].'</li>';
        echo '</ul>';
        echo '<hr>';
    }
} else {
    echo 'Houston, we have a problem.';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main>

<aside>


</aside>

</div> <!--end wrapper-->

<?php include('includes/footer.php'); ?>