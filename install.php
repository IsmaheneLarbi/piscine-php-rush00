#!/usr/bin/php

<?php

    include_once "connect.php";
    include_once "create_db.php";
    include_once "create_tbl.php";

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
        $users = "CREATE TABLE IF NOT EXISTS Users(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, pwd VARCHAR(12) NOT NULL, privilege INT DEFAULT 0 , reg_date TIMESTAMP)";
        // $men = "CREATE TABLE Men(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, category_id  INT FOREIGN KEY REFERENCES Category(id), description  VARCHAR(30) NOT NULL, size INT)";
        // $women = "CREATE TABLE Women(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, category_id  INT FOREIGN KEY REFERENCES Category(id), description  VARCHAR(30) NOT NULL, size INT)";
        // $children = "CREATE TABLE Children(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, category_id  INT FOREIGN KEY REFERENCES Category(id), description  VARCHAR(30) NOT NULL, size INT)";
        // $categories = "CREATE TABLE Categories(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, label VARCHAR(30) NOT NULL)";
        create_tbl($con, $users);
        // create_tbl($con, $men);
        // create_tbl($con, $women);
        // create_tbl($con, $children);
        // create_tbl($con, $categories);
    }
?>
