<?php

    include_once "./lib/connect.php";
    include_once "./lib/create_db.php";
    include_once "./lib/create_tbl.php";
    include_once "./lib/insert_into_table.php";

// 1* load resources: images
// 2* connect to db
    $host = "127.0.0.1";
    $user = "root";
    $passwd = "myadmin";
    $db = "Inventory";

    $con = connect($host, $user, $passwd);
    if (create_db($con, $db))
    {
        mysqli_select_db($con, $db);
        $users = "CREATE TABLE  Users(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, passwd VARCHAR(128) NOT NULL, privilege INT DEFAULT 0 , reg_date TIMESTAMP)";
        create_tbl($con, "Users", $users);
        $user = mysqli_real_escape_string($con, 'root');
        $passwd = hash('whirlpool', mysqli_real_escape_string($con, 'myadmin'));
        $add_root = "INSERT INTO Users(username, passwd, privilege) VALUES ('".$user."', '".$passwd."', 1)"; 
        if (!mysqli_query($con, $add_root))
        {
            die("Failed to create the root user \n".mysqli_error($con));
        }
        $passwd = hash('whirlpool', 'user');
        insert_into_table($con, "Users", "INSERT INTO Users(username, passwd, privilege) VALUES ('ismahene', '".$passwd."', 0)");
        insert_into_table($con, "Users", "INSERT INTO Users(username, passwd, privilege) VALUES ('stina', '".$passwd."', 0)");
        $men = "CREATE TABLE Men(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, `description`  VARCHAR(128) NOT NULL, price INT NOT NULL, size INT NOT NULL)";
        $women = "CREATE TABLE Women(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, `description`  VARCHAR(128) NOT NULL, price INT NOT NULL, size INT NOT NULL)";
        $children = "CREATE TABLE Children(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, `description`  VARCHAR(128) NOT NULL, price INT NOT NULL, size INT  NOT NULL)";
        create_tbl($con, "Men", $men);
        create_tbl($con, "Women", $women);
        create_tbl($con, "Children", $children);

        //3*filling
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/bottoms/shorts_izod_blue.jpg', 'Shorts IZOD Menwear', 60, 40)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/bottoms/trouser_pullandbear_blue.jpg', 'Trousers  PULL&BEAR Menwear', 80, 38)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/bottoms/trouser_yourturn_grey.jpg', 'Trousers YOUR TURN Menwear', 100, 36)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/shirts/polo_ralphlauren_black.jpg', 'Polo RALPH LAUREN Menwear', 140, 38)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/shirts/shirt_tomtailor_blue.jpg', 'Shirt TOM TAILOR Menwear', 190, 40)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/shirts/tshirt_ralphlauren_white.jpg', 'T-shirt RALPH LAUREN Menwear', 150, 38)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/shoes/converse_blue.jpg', 'CONVERSE model 45', 90, 40)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/shoes/newbalance_white.jpg', 'NEW BALANCE model 360', 85, 38)");
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES('./img/men/shoes/nike_white.jpg', 'NIKE AIR', 160, 42)");
        
        
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/bottoms/trouser_leivs_black.jpg', 'Trousers LEVI\'S', 140, 38)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/bottoms/short_levis_blue.jpg', 'Shorts LEVI\'S', 120, 36)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/bottoms/skirt_only_blue.png', 'Skirt ONLY BLUE', 90, 34)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/shirts/pullover_nike_grey.jpg', 'Pullover NIKE ', 65, 36)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/shirts/blouse_sanna_blue.jpg', 'Shirt SANNA ', 40, 36)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/shirts/dress_vila_black.jpg', 'Dress VILLA', 200, 36)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/shoes/reebok_white.jpg', 'REEBOK', 100, 38)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/shoes/vans_black.jpg', 'VANS', 125, 36)");
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES('./img/women/shoes/vans_red.jpg', 'VANS', 135, 39)");

        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/bottoms/shorts_3_pack_fribo.jpg', 'Shorts FRIBO Children colllection', 100, 34)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/bottoms/trouser_hilfiger_blue.jpg', 'Trousers TOMMY HILFIGER Children colllection', 200, 32)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/bottoms/trouser_j_crew_grey.jpg', 'Trousers JCREW', 100, 30)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/shirts/t_shirt_lacoste_white.jpg', 'T-shirt LACOSTE Children colllection', 80, 32)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/shirts/t_shirt_benetton_grey.jpg', 'T-shirt BENETTON Children colllection', 140, 30)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/shirts/tshirt_levis_blue.jpg', 'T-shirt LEVI\S Children colllection', 90, 28)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/shoes/vans_pink.jpg', 'VANS Children collection', 110, 28)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/CHILDREN/shoes/babies_sandals.jpg', 'Babies Sandals  FRIBO Children collection', 120, 28)");
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES('./img/men/shoes/nike_white.jpg', 'NIKE Children collection', 90, 26)");

        //load mainpage
        // header("Location : index.php");
    }
?>