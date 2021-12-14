<?php //project-view.php

include("includes/header.php");

// if isset $_GET['today'] <etc class="">

if(isset($_GET[id])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM project WHERE parties_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
// create a variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {
    // now time for the while loop - while loop will return array
    while($row = mysqli_fetch_assoc($result)) { // we are not echoing, we are assigning our row first_name to variable first_name
        $name = stripslashes($row['name']);
        $orientation = stripslashes($row['orientation']);
        $position = stripslashes($row['position']);
        $age = stripslashes($row['age']);
        $us_affiliation = stripslashes($row['us_affiliation']);
        $description = stripslashes($row['description']);
        $blurb = stripslashes($row['blurb']);
        $feedback = '';
    } // end while
} else {
    $feedback = 'Something is not working';
}

// for the BIG assignment, I will call out the header include (include/header.php)

?>
<main>
<h1>Welcome to the <?php echo $name;?>'s page!</h1>

<?php

if($feedback == '') {
    echo '<ul>';
    echo '<li><b>Name:</b> '.$name.'</li>';
    echo '<li><b>Political Orientation:</b> '.$orientation.'</li>';
    echo '<li><b>Position on Puerto Rican status:</b> '.$position.'</li>';
    echo '<li><b>US Political Affiliation:</b> '.$us_affiliation.'</li>';
    echo '<li><b>Founding:</b> '.$age.'</li>';
    echo '</ul>';
    echo '<p class="pview-disc">'.$description.'</p>';
    echo '<a href="project.php">Back</a>';
}

?>
</main>

<aside>
<?php

if($feedback == '') {
    echo '<img src="images/parties'.$id.'.jpg" alt="'.$name.'" class="view-img-aside">';
    echo '<h2>'.$name.'</h2>';
    echo '<p class="blurb">'.$blurb.'</p>';
}
?>

</aside>


<?php mysqli_free_result($result);
mysqli_close($iConn); ?>
<?php include('includes/footer.php'); ?>