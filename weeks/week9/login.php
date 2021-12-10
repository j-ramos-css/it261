<?php // login.php

include('server.php');
include('includes/header.php');
?>

<h1 class="center">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <label for="username">Username</label>
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">

    <label for="password">Password</label>
    <input type="password" name="password">

    <button type="submit" class="btn" name="login_user">Login</button>

    <button type="button" onclick="windows.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>

    <?php include('includes/errors.php'); ?>

</fieldset>
</form>