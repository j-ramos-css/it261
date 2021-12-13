<?php include('includes/header.php'); ?>

<!-- END OF HEAD -->

    <div id="hero">
    <?php echo random_pics($photos); ?>
    <p class="rand-function">
        <pre>
            <br>function random_pics($photos) {
                $i = rand(0, 4);
                $selected_image = ''.$photos[$i].'.jpg';
                return '< img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
            }
        </pre>
    </p>
    </div>
    <!--end hero-->

    <main>
        <h1><?php echo $headline; ?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
            anim id est laborum.
        </p>
    </main>

    <aside>

    </aside>

    <!-- BEGINNING OF FOOTER -->

<?php include('includes/footer.php'); ?>