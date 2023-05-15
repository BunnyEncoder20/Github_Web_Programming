<?php
    session_start();
?>

<html>
    <head>

    </head>
    <body>
        <h2>Index Page</h2>
        <ul>
            <li><a href="secondpage.php">NextPage</a></li>
        </ul>

        <?php
            $_SESSION['username'] = "bunny1506";
            echo $_SESSION['username'];
        ?>
    </body>
</html>