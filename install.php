#!/usr/bin/php

<?php

    include_once "./lib/connect.php";
    include_once "./lib/create_db.php";
    include_once "./lib/create_tbl.php";
    include_once "./lib/insert_into_table.php";

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

        //3*filling
        insert_into_table($con, "Men", "INSERT INTO Men(img, description, price, size) VALUES('./img/men/black_shoe_m.jpeg', 'VANS model 369', 100, 39)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, description, price, size) VALUES('./img/men/t_shirt_black_m.jpg', 't-shirt ZARA spring men colllection', 80, 38)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, description, price, size) VALUES('./img/men/white_shoe_w.jpg', 't-shirt ZARA spring men colllection', 80, 40)");


        insert_into_table($con, "Women", "INSERT INTO Women(img, description, price, size) VALUES('./img/women/jpg', 't-shirt SCREEN STARS spring women colllection', 100, 38)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, description, price, size) VALUES('./img/women/t_shirt_blue_w.jpg', 't-shirt QGIS spring  colllectn', 40, 36)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, description, price, size) VALUES('./img/women/white_shoe_w.jpg', 'ADIDAS Stan Smith', 100, 38)");

        insert_into_table($con, "Children", "INSERT INTO Children(img, description, price, size) VALUES('./img/t_shirt_red_m.jpg', 't-shirt SCREEN STARS spring women colllection', 100, 38)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, description, price, size) VALUES('./img/t_shirt_blue_w.jpg', 't-shirt QGIS spring women colllection', 40, 36)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, description, price, size) VALUES('./img/white_shoe_w.jpg', 'ADIDAS Stan Smith', 100, 38)");
    }
?>
