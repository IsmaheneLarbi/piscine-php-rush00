<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SERVER['not']))
    {
        echo "OK\n";
    }
    else echo "KO\n";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
	<body>
        <div id="center">
	    	<form action="login.php" method="POST">
            <div id="login">
                <h1>SIGN IN</h1>
                <p>Username</p>
                <input type="text" placeholder="Enter Username" name="login">
                <p>Password</p>
                <p><input type="password" placeholder="Enter Password" name="passwd"></p>
                <input type="submit" name="submit" value="Sign in">
                <div class="text-foot">
                    <p>Don't have an account yet? <a href="create.php" class="btn">Register</a></p>
                    <p>Want to change your password? <a href="modif.php" class="btn">Modify Password</a></p>
                    <p>Go back to <a href="index.php" class="btn">Mainpage</a></p>
                </div>
            </div>
            </form>
        </div>
	</body>
</html>