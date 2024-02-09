<?php
 session_start();
?>

<html>
    <body>
        <?php
        echo "My favourite color is: ". $_SESSION['favcolor'];
        ?>
    </body>
</html>