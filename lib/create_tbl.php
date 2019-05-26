<?php
    function create_tbl($con, $tbl_name, $query)
    {
        echo mysqli_query($con, "DROP TABLE IF EXISTS ".$tbl_name);
        if (mysqli_query($con, $query))
        {
            echo "Table created\n";
            return TRUE;
        }
        else
        {
            echo "Could not create table".mysqli_error($con);
            return FALSE;
        }
    }
?>