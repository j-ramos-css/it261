<?php include('includes/header.php'); ?>

<!-- END OF HEAD -->


    <main>
        <h1><?php echo $headline; ?></h1>
        <p>
            Puerto Rico has a republican form of government based on the American model, with separation of powers subject to the jurisdiction and sovereignty of the United States. All governmental powers are delegated by the United States Congress, with the head of state being president of the United States. As an unincorporated territory, Puerto Rico lacks full protection under the United States Constitution.
        </p>
        <br>
        <p>
            Initially a subject of Spain, it was transferred to the United States following the Spanish-American War. Since then, Puerto Rico has been under the complete control of the US and, unlike other Latin American nations, has not achieved independence.
        </p>
        <br>
        <p>
            It is in this context that various political formations have arisen. This is a list to the most prominent and well known of these parties.
        </p>

        <?php
        $sql = 'SELECT * FROM project';

        // we need to connect to database using mysqli_connect() function

        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
        // create a variable $result

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

        // if statement --- if we have more than zero rows, we're good

        // parties_id	int(3) unsigned Auto Increment	
        // name	varchar(30)	
        // orientation	varchar(10)	
        // position	varchar(30)	
        // age	year(4) NULL	
        // description	longtext NULL

        if(mysqli_num_rows($result) > 0 ) {
            // now time for the while loop - while loop will return array
            while($row = mysqli_fetch_assoc($result)) {
                echo '<h3>'.$row['name'].' - <a href="project-view.php?id='.$row['parties_id'].'">More</a></h3>';
                echo '<ul>';
                echo '<li>'.$row['name'].'</li>';
                echo '<li>'.$row['orientation'].'</li>';
                echo '<li>'.$row['position'].'</li>';
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
        <h3>Political parties of Puerto Rico &#127477;&#127479;</h3>
        <img class="beer-aside" src="images/pr-aside.jpg">
    </aside>

    <!-- BEGINNING OF FOOTER -->

    <?php include('includes/footer.php'); ?>