<?php // login.php

include('server.php');
include('includes/header-form.php');
?>
<div id="wrapper">
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="login-box" method="post">
        <fieldset>
            <label for="username">Username</label>
            <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">

            <label for="password">Password</label>
            <input type="password" name="password">

            <div class="buttons">

            <button type="submit" class="btn" name="login_user">Login</button>

            <button type="button"
                onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
            
            </div>

            <?php include('includes/errors.php'); ?>

        </fieldset>

        <div class="block">
        <h3>Not a member?</h3>
        <span class="block1">
            <a href="register.php">Register here!</a>
        </span>
        </div>

    </form>


</div> <!-- CLOSE WRAPPER -->
</body>

</html>