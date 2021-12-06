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

// SWITCH

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

// GALLERY

$cats['Maine_Coon'] = 'maine_One of the biggest domestic cats.';
$cats['Munchkin'] = 'munch_Also called a Sausage cat, it is a newer breed.';
$cats['Persian'] = 'persi_The Persian is a long-haired breed of cat  with a round face and short muzzle.';
$cats['Ragamuffin'] = 'ragam_They are notable for their friendly personalities and thick, rabbit-like fur.';
$cats['Scottish_Fold'] = 'sfold_A breed with a natural mutation that affects cartilage, causing the ears to "fold".';

// EMAILABLE FORM

$first_name = '';
$last_name = '';
$gender = '';
$email = '';
$wines = '';
$comments = '';
$regions = '';
$privacy = '';
$phone = '';


$first_name_Err = '';
$last_name_Err = '';
$gender_Err = '';
$email_Err = '';
$wines_Err = '';
$comments_Err = '';
$regions_Err = '';
$privacy_Err = '';
$phone_Err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['gender'])) {
        $gender_Err = 'Please fill out your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['wines'])) {
        $wines_Err = 'Please choose your wines';
    } else {
        $wines = $_POST['wines'];
    }

    if($_POST['regions'] == NULL) {
        $regions_Err = 'Please select your region';
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_Err = 'Please agree';
    } else {
        $privacy = $_POST['privacy'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please share your comments with us';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_Err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)) {
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
                $phone_Err = 'Invalid format!';
            } else{
                $phone = $_POST['phone'];
            }
        }
        
        

    function my_wines() {
        $my_return = '';
        if(!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines'] );
        }
        return $my_return;
    }

    if(isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['wines'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy'],
    $_POST['phone']

    )) {

        $to = 'juliorayramos@gmail.com';
        $subject = 'Test Email' .date('m/d/y');
        $body = '
        The first name is: '.$first_name.' '.PHP_EOL.'
        The last name is: '.$last_name.' '.PHP_EOL.'
        Gender: '.$gender.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Wines: '.my_wines().' '.PHP_EOL.'
        Region: '.$regions.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'noreply@juliorayramos@gmail.com',
            'Reply-to' => ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');

    }

}
