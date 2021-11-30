<?php include '../includes/websites-header.php';
// cat gallery

$cats['Maine_Coon'] = 'maine_One of the biggest domestic cats.';
$cats['Munchkin'] = 'munch_Also called a Sausage cat, it is a newer breed.';
$cats['Persian'] = 'persi_The Persian is a long-haired breed of cat  with a round face and short muzzle.';
$cats['Ragamuffin'] = 'ragam_They are notable for their friendly personalities and thick, rabbit-like fur.';
$cats['Scottish_Fold'] = 'sfold_A breed with a natural mutation that affects cartilage, causing the ears to "fold".';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Julio Ramos | IIT261</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow" />
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/6a71565c22.js"></script>
	<link rel="stylesheet" href="../css/nav.css" />
	<link rel="stylesheet" href="../css/portal.css" />

    <style>
        body {
            background-color: linen;
        }

        table {
            border: 5px solid maroon;
            color: maroon;
            margin: 50px auto;
            padding: 8px;
        }

        td {
            border: 2px solid maroon;
        }

    </style>

</head>


<body>
	<!-- START WRAPPER -->
	<main class="wrapper">
		<header>
			<h1 id="header"><a href="../index.php">Julio Ramos | IT261 Portal</a></h1>
			<nav>
				<ul class="topnav" id="myTopnav">

					<li><a href="../index.php" >Home</a></li>
					<li><a href="">Switch (3)</a></li>
					<li><a href="adder.php">Troubleshoot (4)</a></li>
					<li><a href="calculator.php">Calculator (5)</a></li>
					<li><a href="email.php">Email (6)</a></li>
					<li><a href="gallery.php">Gallery (7)</a></li>
					<li><a href="databases.php">Databases (8)</a></li>
					<li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>

				</ul>
			</nav>
		</header>



    <table>
        <?php foreach($cats as $name => $image) : ?>
        <tr>
            <td><img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>" width="400" 
     height="400" ></td>
            <td><?php echo str_replace('_', ' ', $name); ?></td>
            <td><?php echo substr($image, 6, 100); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php include '../includes/footer.php'; ?>