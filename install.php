#!/usr/bin/php

<?php

    include_once "connect.php";
    include_once "create_db.php";
    include_once "create_tbl.php";
    // include_once "";

// 1* load resources: images
// 2* connect to db
    $host = "127.0.0.1";
    $user = "root";
    $pwd = "myadmin";
    $db = "Inventory";

    $con = connect($host, $user, $pwd);
    if (create_db($con, $db))
    {
        mysqli_select_db($con, $db);
        $users = "CREATE TABLE  Users(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, pwd VARCHAR(12) NOT NULL, privilege INT DEFAULT 0 , reg_date TIMESTAMP)";
        create_tbl($con, "Users", $users);
        $add_root = "INSERT INTO Users(username, pwd, privilege) VALUES ('root', 'myadmin', 1)"; 
        if (!mysqli_query($con, $add_root))
        {
            die("Failed to create the root user \n".mysqli_error());
        }
        $men = "CREATE TABLE Men(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, description  VARCHAR(30) NOT NULL, price INT NOT NULL, size INT NOT NULL)";
        $women = "CREATE TABLE Women(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, description  VARCHAR(30) NOT NULL, price INT NOT NULL, size INT NOT NULL)";
        $children = "CREATE TABLE Children(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, description  VARCHAR(30) NOT NULL, price INT NOT NULL, size INT  NOT NULL)";
        create_tbl($con, "Men", $men);
        create_tbl($con, "Women", $women);
        create_tbl($con, "Children", $children);
    }
?>
