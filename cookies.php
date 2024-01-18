<?php
setcookie('Ecommerce', '3', time() + (86400 * 30), "/", "", false,true);
?>
<html>
    <body>
        <?php
        if (isset($_COOKIE['Ecommerce'])) {
            echo "Cookie named 'Ecommerce' is set!<br>";
            echo "Value is: " . $_COOKIE['Ecommerce'];
        } else {
            echo "Cookie named 'Ecommerce' is not set!";
        }
        ?>
    </body>
</html>