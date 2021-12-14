<div class="push"></div>
<footer>
    <ul>
        <li>Copyright &copy;
            <?php 
                    $date_current = date('Y'); 
                    $date_created = 2017;
                    if($date_current == $date_created) {
                        echo $date_current;
                    } else {
                        echo ''.$date_created.' - '.$date_current.'';
                    }
                    ?></li>
        <li>All rights reserved</li>
        <li><a href="../index.php">Web Design by Julio</a></li>
        <li><a href="https://validator.w3.org/check?uri=referer">HTML</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a></li>



    </ul>
</footer>


</div>
<!--end wrapper-->

</body>

</html>