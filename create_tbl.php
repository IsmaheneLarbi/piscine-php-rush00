<?php
    function create_tbl($con, $query)
    {
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