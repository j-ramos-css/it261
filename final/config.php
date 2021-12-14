<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

// LOGIN

$first_name = '';
$last_name = '';
$email = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();

// NAV

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Cuisine';
$nav['project.php'] = 'Politics';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'People';

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'The Great Puerto Rican Website';
        $body = 'home';
        $headline = 'The Great Puerto Rican Website';
        break;
    case 'about.php':
        $title = 'About Puerto Rico';
        $body = 'about inner';
        $headline = 'About Puerto Rico';
        break;
    case 'daily.php':
        $title = 'Daily Puerto Rican Food';
        $body = 'daily inner';
        $headline = 'Daily Puerto Rican Food';
        break;
    case 'project.php':
        $title = 'Political Parties of Puerto Rico';
        $body = 'project inner';
        $headline = 'Political Parties of Puerto Rico';
        break;
    case 'contact.php':
        $title = 'Contact the Great Puerto Rican Website';
        $body = 'contact inner';
        $headline = 'Keep in touch with us!';
        break;
    case 'gallery.php':
        $title = 'Important figures in Puerto Rican History';
        $body = 'gallery inner';
        $headline = 'Important figures in Puerto Rican History';
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
        $daily = '<h2>Sunday is for Mofongo!</h2>';
        $pic = 'mofongo.jpg';
        $alt = 'Mofongo';
        $content = 'Puerto Rican comfort food at its finest... 

        Mofongo is traditionally made from deep-fried green plantain pieces mashed with garlic and either salt-cured pork, pork crackling, butter, or oil. Some recipes use a salty broth to soften the plantains while mashing.
        
        Mofongo can be served as a side dish or stuffed with any meat, such as stewed chicken, crab meat, octopus, skirt steak, fried pork, seafood, or stewed vegetables. Other variations of mofongo include yuca mofongo and trifongo, made with green plantain, sweet plantain, and yuca.';
        break;

    case 'Monday' :
        $daily = '<h2>Monday is Empanadillas day!</h2>';
        $pic = 'empanadillas.jpg';
        $alt = 'Empanadillas';
        $content = 'Puerto Rican empanadallias are savory fried pastries traditionally filled with ground beef, although now you can find them stuffed with chicken as well. Although similar to empanadas, empanadillas tend to have a thicker outer crust.';
        break;

    case 'Tuesday' :
        $daily = '<h2>Tuesday is Tostones day!</h2>';
        $pic = 'tostones.jpg';
        $alt = 'Tostones';
        $content = 'These are two traditional ways to prepare plantains. Tostones are made from green plantain, which is savory. The plantain is cut into thick wheels marinated in water and garlic, then deep-fried in oil to soften, smashed, and deep-fried again until crispy. Amarillos, on the other hand, are ripe plantains cut into pieces and fried until the outside is almost blackened, and the inside is soft and sweet.';
        break;

    case 'Wednesday' :
        $daily = '<h2>Wednesday is Lechon day!</h2>';
        $pic = 'lechon.jpg';
        $alt = 'Lechon';
        $content = 'A Puerto Rican culinary legacy! To prepare this delicacy, first, a whole pig (lechón) is marinated in adobo (a mix of garlic, oregano, black pepper, vinegar, and water) and then slowly roasted over coals for several hours until the meat is juicy and the skin crispy. To sample some of the best lechón in Puerto Rico, plan a day trip to Guavate, where the road headed up the mountains of Cayey is lined with lechoneras (pork restaurants) serving locally sourced pork. Another specialty pork dish is pernil, or pork shoulder, seasoned with adobo, and roasted in the oven.';
        break;

    case 'Thursday' :
        $daily = '<h2>Thursday is Arroz y habichuelas Day!</h2>';
        $pic = 'rice.jpg';
        $alt = 'rice and beans';
        $content = 'Rice and beans are the quintessential Puerto Rican side dish. Pink beans are stewed with onions, peppers, garlic, ham hock, calabaza squash, and sofrito — a cooking base made by blending onion, garlic, peppers, culantro, cilantro, and oregano (as well as other herbs, spices, and aromatics depending on the family recipe).
        White, medium-grain rice is cooked separately from the beans and seasoned with olive oil and salt. The two are served next to each other so you can choose how much beans to add to the rice.';
        break;

    case 'Friday' :
        $daily = '<h2>Friday is our Pasteles Day!</h2>';
        $pic = 'pasteles.jpg';
        $alt = 'Pasteles';
        $content = 'A true local specialty, pasteles resemble tamales and are traditionally made with green banana masa stuffed with stewed pork meat. Sometimes yuca or other root vegetables are added; the masa can also be made with just yuca. Pasteles can also be stuffed with chicken or bacalao (salted cod), and some vegan versions have been introduced recently.

        To form the pastel, masa is pressed onto a plantain leaf, the stuffing added in the center, and the plantain leaf is folded, tied with string and covered in parchment paper. The pasteles are then boiled, unwrapped, and served.';
        break;

    case 'Saturday' :
        $daily = '<h2>Saturday is Alcapurria Day!</h2>';
        $pic = 'alcapurria.jpg';
        $alt = 'Alcapurria';
        $content = 'Made with yucca and plantains, alcapurrias are fritters filled with ground beef. They are similar to corndogs in America, but I think they\'re much more delicious. The best alcapurrias are sold at cuchifritos. Cuchifritos refers to restaurants that sell Puerto Rican fried food. These establishments are often counter-serve, rather than sit down restaurants. ';
        break;

}

// GALLERY

$figures['Jose_Coll_y_Cuchi'] = 'cuchi_Jose Coll y Cuchi was a lawyer, writer and the founder of the Puerto Rican Nationalist Party. He was a member of a Puerto Rican family of politicians, educators and writers.';
$figures['Albizu_Campos'] = 'Albizu Campos was the president and spokesperson of the Puerto Rican Nationalist Party from 1930 until his death in 1965. Because of his oratorical skill, he was hailed as El Maestro (The Teacher). He was imprisoned twenty-six years for attempting to overthrow the United States government in Puerto Rico.';
$figures['Juan_Mari_Bras'] = 'marib_Juan Mari Bras was an advocate for Puerto Rican independence from the United States who founded the Puerto Rican Socialist Party (PSP). On October 25, 2006, he became the first person to receive a Puerto Rican citizenship certificate from the Puerto Rico State Department. His son, Santiago Mari Pesquera was assassinated by a suspected far-right activist in 1976.';
$figures['Eugenio_Maria_de_Hostos'] = 'hosto_Eugenio Maria de Hostos (January 11, 1839 – August 11, 1903), known as "El Gran Ciudadano de las Américas" ("The Great Citizen of the Americas"), was a Puerto Rican educator, philosopher, intellectual, lawyer, sociologist, novelist, and Puerto Rican independence advocate.';
$figures['Filiberto_Ojeda_Rios'] = 'ojeda_Filiberto Ojeda Rios was a Puerto Rican independence activist and militant who cofounded the Boricua Popular Army, also known as Los Macheteros, and its predecessor, the Fuerzas Armadas de Liberación Nacional Puertorriqueña (FALN). In 1990, Ojeda Ríos became a fugitive of the Federal Bureau of Investigation (FBI). On September 23 2005, he was killed during an exchange of gunfire with FBI agents after they surrounded the house in Hormigueros, Puerto Rico. ';

// EMAILABLE FORM

$first_name = '';
$last_name = '';
$gender = '';
$email = '';
$newsletter = '';
$comments = '';
$regions = '';
$privacy = '';
$phone = '';


$first_name_Err = '';
$last_name_Err = '';
$gender_Err = '';
$email_Err = '';
$newsletter_Err = '';
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

    if(empty($_POST['newsletter'])) {
        $newsletter_Err = 'Please choose your newsletters';
    } else {
        $newsletter = $_POST['newsletter'];
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
        
        

    function my_newsletter() {
        $my_return = '';
        if(!empty($_POST['newsletter'])) {
            $my_return = implode(', ', $_POST['newsletter'] );
        }
        return $my_return;
    }

    if(isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['newsletter'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy'],
    $_POST['phone']

    )) {

        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test Email' .date('m/d/y');
        $body = '
        The first name is: '.$first_name.' '.PHP_EOL.'
        The last name is: '.$last_name.' '.PHP_EOL.'
        Gender: '.$gender.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Newsletters: '.my_newsletter().' '.PHP_EOL.'
        Region: '.$regions.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'noreply@mystudentswa.com',
            'Reply-to' => ''.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');

    }

}

// DISPLAY PHOTOS RANDOMLY - index.php

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

function random_pics($photos) {
    $i = rand(0, 4);
    $selected_image = ''.$photos[$i].'.jpg';
    return '<img src="images/'.$selected_image.'" id="hero" alt="'.$photos[$i].'">';
}

// PROJECT

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}