<?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo "<div style=\"margin :0 auto; width: 600px;\">";
        echo "<h2>This is Profil Page</h2>";
        echo "User  : ".$_SESSION['user'];
        echo "<br>Name  : Admin Web App";
        echo "<br>Email : admin@myweb.app";
        echo "<hr><br><a href='index.php'>HOME</a> | ";
        echo "<a href='logout.php'>LOGOUT</a>";
        echo "</div>";
    } else {
        header("Location:http://localhost");
    }
?>

