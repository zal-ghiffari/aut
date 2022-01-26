<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Page 1</title>
    
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
?>
  <div class="login" style="margin :0 auto; width: 600px;">
  <h2 class="header">Login Here...</h2>  
  <form method="post">
	<input type="text" name="user" placeholder="Username...">
	<input type="password" name="pass" placeholder="Password...">
	<input type="submit" name="login" value="Log In">
  </form>
  <hr><a href="http://localhost">PUBLIC PAGE</a>
  <?php
    if(isset($_POST['user'])&&isset($_POST['pass'])){
        if ($_POST['user']=='admin' && $_POST['pass']=='admin123') {
            $_SESSION['user'] = $_POST['user'];
            header('location:http://localhost/admin/index.php');
        } else {
            echo "<br>Wrong username or password";
        }
    }
  ?>
  </div>
  <?php    
    } else {
        echo "<div style=\"margin :0 auto; width: 600px;\">";
        echo "<div id='welcome'>Selamat Datang ".$_SESSION['user']."!</div><br>";
        echo "<hr><br><a href='profil.php'>PROFIL</a> | ";
        echo "<a href='logout.php'>LOGOUT</a>";
        echo "</div>";
    }
  ?>
</body>
</html>

