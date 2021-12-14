<?php 

include('includes/header.php');
// HEADER START

?>

<?php if(isset($_SESSION['success'])) :?>
    <div class="success">
        <h4>
            <?php echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h4>
    </div> <!-- end div success -->
<?php endif ; ?>

<!-- END OF HEAD, END OF LOGIN PHP -->

    <div>
    <?php echo random_pics($photos); ?> 
    </div>
    <!--end hero-->

    <main class="index-main">
        <h1><?php echo $headline; ?></h1>
        <p>
            This is my page about Puerto Rico! You'll find interesting facts, from the local cities, political parties, and activities and more.
        </p>
        <br>
        <p>
            If you’re the one looking for your next beach holiday, you’d do well to consider Puerto Rico – it’s the stuff that Caribbean daydreams are made of. With fantastic beaches, incredible waves, and stunning coral reefs, you’ll find a beach to suit your mood.
        </p>
    </main>

    <aside class="index-aside">
        <h2>About Puerto Rico</h2>
        <p>
            The Commonwealth of Puerto Rico is an archipelago among the Greater Antilles located between the Dominican Republic and the U.S. Virgin Islands; it includes the eponymous main island and several smaller islands, such as Mona, Culebra, and Vieques. It has roughly 3.2 million residents, and its capital and most populous city is San Juan. Spanish and English are the official languages of the executive branch of government, though Spanish predominates.
        </p>
    </aside>

    <!-- BEGINNING OF FOOTER -->

<?php include('includes/footer.php'); ?>