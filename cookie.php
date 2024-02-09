<?php
$cookie_name = 'User';
$cookie_value = 'Anu';
setcookie($cookie_name, $cookie_value, time()+(3600), '/' )
?>


<html>
    <body>
        <?php

        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie not set";
        }
        else{
            echo"Cookie set! <br>";
            echo "The user name stored in cookie is: ", $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>