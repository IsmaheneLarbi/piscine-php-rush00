<?php

    function create($username, $pwd)
    {
        if (!empty($username) && !empty($pwd))
        {
           
            
        }
        else
        {
            echo "Error: failed to create new user: username or password invalid \n";
        }
    }
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
                <h1>Create a new user</h1>
                <p>Username</p>
                <input type="text" placeholder="Enter Username" name="login">
                <p>Password</p>
                <p><input type="password" placeholder="Enter Password" name="passwd"></p>
                <input type="submit" name="submit" value="Submit">
                <div class="text-foot">
                    <p>Go back to <a href="index.php" class="btn">Mainpage</a></p>
                </div>
            </div>
            </form>
        </div>
	</body>
</html>