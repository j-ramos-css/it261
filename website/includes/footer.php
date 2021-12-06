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