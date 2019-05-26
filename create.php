<?php
    session_start();
    
	include_once "./install.php";
    
    echo "OK sis3!\n";
    include_once "./lib/tbl_get_rows.php";
    include_once "./lib/insert_into_table.php";
	$users = tbl_get_rows($con, "Users");
    if (isset($_POST['submit']))
    {
        if (!empty($_POST['submit']) && $_POST['submit'] === "Submit"
        && !empty($_POST['login']) && !empty($_POST['passwd']))
        {
            $_SESSION['login'] = mysqli_real_escape_string($con, $_POST['login']);
            $_SESSION['passwd'] = hash('whirlpool', mysqli_real_escape_string($con, $_POST['passwd']));
            foreach ($users as $key =>$value)
            {
                if ($value['username'] === $_SESSION['login'])
                {
                    echo "Error : a user with this username already exists!\n";
                    exit();
                }
            }
            
            $query = "INSERT INTO Users(username, passwd, privilege) VALUES(?, ?, ?)";
            insert_into_table($con, "Users", $query);
            
        }
        else
            echo "Error : No login and/or password provided\n";
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
	    	<form action="create.php" method="POST">
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
