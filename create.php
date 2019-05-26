<?php
    session_start();
    // var_dump($_SESSION);
    if (!empty($_POST['submit']) && $_POST['submit'] === "OK"
    && !empty($_POST['login']) && !empty($_POST['passwd']))
    {
        $_SESSION['login'] = mysqli_real_escape_string($con, $_POST['login']);
        $_SESSION['passwd'] = hash('whirlpool', mysqli_real_escape_string($con, $_POST['passwd']));
        print_r($_SESSION);
    }
    else
        echo "Error : No login and/or password provided\n";
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
	<body>
    <?php  require_once 'header.php';  ?>
        <div id="box">
	    	<form action="create.php" method="POST">
            <div id="login">
                <h1>CREATE A NEW USER</h1>
                <p>Username</p>
                <input type="user" placeholder="Enter Username" name="login">
                <p>Password</p>
                <p><input type="password" placeholder="Enter Password" name="passwd"></p>
                <input type="submit" name="submit" value="Submit">
                <div class="text-foot">
                    <p><a href="login.php" class="btn">Login</a></p>
                    <p><a href="index.php" class="btn">Go back to Mainpage</a></p>
                </div>
            </div>
            </form>
        </div>
    </body>
    <?php  require_once 'footer.php';  ?>
</html>
