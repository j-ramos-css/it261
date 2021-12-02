<?php 
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
	<link
		href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
		rel="stylesheet">
	<script src="https://use.fontawesome.com/6a71565c22.js"></script>
	<link rel="stylesheet" href="styles/styles.css"/>

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
	<header>

		<div class="header-inner">
			<a href="index.html">
				<img id="logo" src="images/logo.png" alt="logo">
			</a>

			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Daily</a></li>
					<li><a href="">Project</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="gallery.php">Gallery</a></li>
				</ul>
			</nav>
		</div> <!-- Close header inner -->
	</header>

	<table>
		<?php foreach($cats as $name => $image) : ?>
		<tr>
			<td><img src="images/<?php echo substr($image, 0, 5); ?>.jpg"
					alt="<?php echo str_replace('_', ' ', $name); ?>" width="400" height="400"></td>
			<td><?php echo str_replace('_', ' ', $name); ?></td>
			<td><?php echo substr($image, 6, 100); ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>

<!-- BEGINNING OF FOOTER -->

<footer>
	<ul>
		<li>Copyright &copy; 2021</li>
		<li>All rights reserved</li>
		<li><a href="">Terms of Use</li>
		<li><a href="">Web Design by Julio</li>
		<li><a href="">HTML Validation</li>
		<li><a href="">CSS Validation</li>


	</ul>
</footer>


</div>
<!--end wrapper-->

</body>

</html>