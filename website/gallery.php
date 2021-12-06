<?php include(includes/header.php); ?>
<!-- END OF HEADER -->

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


<!-- BEGINNING OF FOOTER -->
<?php include(includes/footer.php); ?>