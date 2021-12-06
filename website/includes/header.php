<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our IT261 website';
        $body = 'home';
        $headline = 'Welcome to our homepage of our IT261 Website';
        break;
    case 'about.php':
        $title = 'About page of our IT261 website';
        $body = 'about inner';
        $headline = 'Welcome to our About page of our IT261 Website';
        break;
    case 'daily.php':
        $title = 'Daily page of our IT261 website';
        $body = 'daily inner';
        $headline = 'Welcome to our Daily page';
        break;
    case 'project.php':
        $title = 'Project page of our IT261 website';
        $body = 'project inner';
        $headline = 'Welcome to our Project page of our IT261 Website';
        break;
    case 'contact.php':
        $title = 'Contact page of our IT261 website';
        $body = 'contact inner';
        $headline = 'Welcome to our Contact page of our IT261 Website';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our IT261 website';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery page of our IT261 Website';
        break;
    
    
}

//this is the beginning of the switch for homework 3
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' :
        $daily = '<h2>Sunday is for Voltaire!</h2>';
        $pic = 'voltaire.jpg';
        $alt = 'Voltaire';
        $content = 'Voltaire, pseudonym of François-Marie Arouet, (born November 21, 
        1694, Paris, France—died May 30, 1778, Paris), one of the greatest of all French 
        writers. Although only a few of his works are still read, he continues to be held 
        in worldwide repute as a courageous crusader against tyranny, bigotry, and cruelty.';
        break;

    case 'Monday' :
        $daily = '<h2>Monday is Plato day!</h2>';
        $pic = 'plato.jpg';
        $alt = 'Plato';
        $content = 'Plato, (born 428/427 bce, Athens, Greece—died 348/347, Athens), ancient 
        Greek philosopher, student of Socrates (c. 470–399 bce), teacher of Aristotle (384–322 bce), 
        and founder of the Academy, best known as the author of philosophical works of unparalleled influence. 
        Building on the demonstration by Socrates that those regarded as experts in ethical matters did not have 
        the understanding necessary for a good human life, Plato introduced the idea that their mistakes were due to 
        their not engaging properly with a class of entities he called forms, chief examples of which were Justice, 
        Beauty, and Equality.';
        break;

    case 'Tuesday' :
        $daily = '<h2>Tuesday is Hagel day!</h2>';
        $pic = 'hagel.jpg';
        $alt = 'Hagel';
        $content = 'Georg Wilhelm Friedrich Hegel, German philosopher who developed a dialectical scheme that emphasized 
        the progress of history and of ideas from thesis to antithesis and thence to a synthesis. Hegel was the last of 
        the great philosophical system builders of modern times.';
        break;

    case 'Wednesday' :
        $daily = '<h2>Wednesday is Karl Marx day!</h2>';
        $pic = 'marx.jpg';
        $alt = 'Marx';
        $content = 'Karl Marx, revolutionary, sociologist, historian, and economist. He published (with Friedrich Engels) 
        Manifest der Kommunistischen Partei (1848), commonly known as The Communist Manifesto, the most celebrated pamphlet 
        in the history of the socialist movement. Building off of Hagel, he expanded dialectics and discovered dialectical materialism.';
        break;

    case 'Thursday' :
        $daily = '<h2>Thursday is Machiavelli Day!</h2>';
        $pic = 'machiavelli.jpg';
        $alt = 'Machiavelli';
        $content = 'Niccolò Machiavelli, Italian Renaissance political philosopher and statesman, secretary of the Florentine republic, 
        whose most famous work, The Prince (Il Principe), brought him a reputation as an atheist and an immoral cynic.';
        break;

    case 'Friday' :
        $daily = '<h2>Friday is our Socrates Day!</h2>';
        $pic = 'socrates.jpg';
        $alt = 'Socrates';
        $content = 'Socrates was a Greek philosopher from Athens who is credited as a founder of Western philosophy and the first moral 
        philosopher of the ethical tradition of thought.';
        break;

    case 'Saturday' :
        $daily = '<h2>Saturday is Deborin Day!</h2>';
        $pic = 'deborin.jpg';
        $alt = 'Deborin';
        $content = 'Abram Moiseyevich Deborin (Ioffe) was a Soviet Marxist philosopher and academician of the Academy of Sciences of the Soviet Union (1929).';
        break;

}

// cat gallery

$cats['Maine_Coon'] = 'maine_One of the biggest domestic cats.';
$cats['Munchkin'] = 'munch_Also called a Sausage cat, it is a newer breed.';
$cats['Persian'] = 'persi_The Persian is a long-haired breed of cat  with a round face and short muzzle.';
$cats['Ragamuffin'] = 'ragam_They are notable for their friendly personalities and thick, rabbit-like fur.';
$cats['Scottish_Fold'] = 'sfold_A breed with a natural mutation that affects cartilage, causing the ears to "fold".';

?>

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
            <a href="index.html">
                <img id="logo" src="images/logo.png" alt="logo">
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
                    <?php
                    foreach($nav as $key => $value) {
                        if(THIS_PAGE == $key) {
                            echo '<li><a class="current href="'.$key.'">'.$value.'</a></li>';
                        } else {
                            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                        }
                        
                    }
                    ?>
                </ul>
            </nav>
        </div> <!-- Close header inner -->
    </header>