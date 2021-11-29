<?php
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
    <title>Our Pictures - Week 7</title>

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


</body>
</html>