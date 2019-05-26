<?php
    echo isset($con);
    
    function insert_into_table($con, $tbl_name, $query)
    {
        if ($tbl_name === "Users")
            insert_into_users($con, $query);
        else
            insert_into_inventory($con, $query);
    }

    function insert_into_users($con, $query, $privilege)
    {
        if ($stmt = mysqli_prepare($con, $query))
        {
            mysqli_stmt_bind_param($stmt, "ssi", $_SESSION['login'], $_SESSION['passwd'], $privilege);
            if (!mysqli_stmt_execute($stmt))
            {
                echo "Failed to insert values into Users\n";
                exit();
            }
            // header("Location: index.php");
        }
        else
        {
            echo "Failed to prepare statement\n";
            exit();
        }
    }

    function    insert_into_inventory($con, $tbl_name, $query)
    {
        if ($stmt = mysqli_prepare($con, $query))
        {
            mysqli_stmt_bind_param($stmt, "ssii", $_SESSION['img'], $_SESSION['description'], $_SESSION['price'], $_SESSION['size']);
            if (!mysqli_stmt_execute($stmt))
            {
                echo "Failed to insert values into Users\n";
                exit();
            }
            // header("Location: index.php");
        }
        else
        {
            echo "Failed to prepare statement\n";
            exit();
        }
    }
?>