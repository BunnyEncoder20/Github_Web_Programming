<?php
    session_start();
?>

<html>
    <head>

    </head>
    <body>
        <h2>Second Page</h2>
        <ul>
            <li><a href="index.php">Previous page</a></li>
        </ul>
        <?php
            //$_SESSION['username'] = "bunny1506";
            echo $_SESSION['username'];
        ?>
    </body>
</html>