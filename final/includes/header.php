<?php include('config.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="styles/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body; ?>">
    <header>

        <div class="header-inner">
            <a href="index.php">
                <img id="logo" src="images/logo.jpg" alt="logo">
            </a>

            <nav>
                <!-- <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul> -->

                <ul>
                    <?php foreach($nav as $key => $value) {
                        if(THIS_PAGE == $key) {
                            echo '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
                        } else {
                            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                        } 
                    }
                    ?>

                    <?php session_start();
                    
                    // user must log in correctly, else be directed to register
                    
                    if(!isset($_SESSION['username'])) {
                        $_SESSION['msg'] = 'You must login first!';
                        header('Location:login.php');
                    }
                    
                    if(isset($_GET['logout'])) {
                        session_destroy();
                        unset($_SESSION['username']);
                        header('Location:login.php');
                    } ?>

                    <?php if(isset($_SESSION['username'])) : ?>

                    <div class="welcome-logout">
                        <h4><?php echo $_SESSION['username']; ?></h4>
                        <a href="index.php?logout='1'">Log out</a>
                    </div> <!-- end welcome-logout div -->
                    <?php endif; ?>
                </ul>
            </nav>
        </div> <!-- Close header inner -->
    </header>

    <div id="wrapper">
        <!-- BEGIN WRAPPER -->