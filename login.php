<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        if (!empty($_POST['login']) && !empty($_POST['passwd']))
        {
            $con = mysqli_connect("127.0.0.1", "root", "myadmin", "Inventory");
            $_SESSION['login'] = mysqli_real_escape_string($con, $_POST['login']);
            $_SESSION['passwd'] = mysqli_real_escape_string($con, $_POST['passwd']);
            //check if user exists in users
            //just to test this file
            $query = "SELECT * FROM Users";
            $result = mysqli_query($con, $query);
            if (!empty($result))
            {
                $rows = mysqli_fetch_array($result);
                foreach ($rows as $key=>$value)
                {
                    if ($row['username'] === $_SESSION['login'] && $row['pwd'] === $_SESSION['passwd'])
                    {
                        // header("Location: index.php");
                        echo "user authenticated\n";
                        exit();
                    }
                }
            }
            echo "Login failed. Username or/and password invalid 1\n";
        }
        else
            echo "Login failed. Username or/and password invalid 2\n";
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
	<body>
        <div id="center">
	    	<form action="./login.php" method="POST">
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
