<?php //index.php - will be acccessed only via login

session_start();
include('config.php');
include('includes/header.php');

// user must log in correctly, else be directed to register

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('include/header.php');
// HEADER START

if(isset($_SESSION['success'])) :?>
<header>
<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div> <!-- end div success -->

<?php endif ;

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
    <h3>Hello <?php echo $_SESSION['username']; ?></h3>
    <a href="index.php?logout='1'">Log out</a>
</div> <!-- end welcome-logout div -->
<?php endif; ?>

</header>
<div id="wrapper">
<h1>Welcome to the home page!</h1>

</div> <!-- END WRAPPER -->
<!-- FOOTER -->
<?php include('include/footer.php'); ?>