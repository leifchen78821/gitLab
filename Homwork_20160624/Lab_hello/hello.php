<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        Hello! 
        <?php echo $_SESSION["userName"] ?>
    </body>
</html>