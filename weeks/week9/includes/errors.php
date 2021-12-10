<?php // errors page
// logically, if we have more than 0 errors, we need to display a message
// we cannot echo an array - we will use a foreach loop

if(count($errors) > 0 ) : ?>
<div class="error">
    <?php foreach($errors as $error) : ?>
        <p><?php echo $error; ?></p>
    <?php endforeach; ?>
</div>
<?php endif; ?>